<script>
  (function () {
    const meta = document.querySelector('meta[name="luntian-api-base"]');

    // Always strip "/admin" from the current path
    let apiBase = window.location.origin + window.location.pathname.replace(/\/admin(\/.*)?$/, '');

    // If we’re inside /admin and didn’t get a usable base, force fallback
    if (!apiBase || apiBase.endsWith('/')) {
      apiBase = window.location.origin;
    }

    // If the base doesn’t already point to luntianAi, enforce it
    if (!apiBase.endsWith('/luntianAi')) {
      apiBase = window.location.origin + '/luntianAi';
    }

    meta.content = apiBase;

    function secret() {
      let s = sessionStorage.getItem('luntian_admin_secret');
      const input = document.getElementById('admin-secret').value.trim();
      if (input) {
        s = input;
        sessionStorage.setItem('luntian_admin_secret', s);
      }
      return s;
    }

    async function adminFetch(path, options = {}) {
      const headers = {
        'X-Admin-Secret': secret(),
        'Content-Type': 'application/json',
        ...(options.headers || {})
      };
      const res = await fetch(apiBase + path, { ...options, headers });
      const data = await res.json();
      if (!res.ok) throw new Error(data.error || 'Failed');
      return data;
    }

    async function load() {
      const list = document.getElementById('list');
      list.innerHTML = '<p class="text-slate-400">Loading…</p>';
      try {
        const data = await adminFetch('/api/admin/payments.php?status=submitted');
        if (!data.payments || !data.payments.length) {
          list.innerHTML = '<p class="text-slate-400">No submitted payments waiting.</p>';
          return;
        }
        list.innerHTML = data.payments.map((p) => `
          <div class="border border-slate-700 rounded-xl p-4 bg-slate-800/50">
            <p class="font-bold">${p.reference_code} — ₱${Number(p.amount_php).toLocaleString()} (${p.billing_cycle})</p>
            <p class="text-sm text-slate-400">${p.display_name || ''} &lt;${p.email || ''}&gt;</p>
            <p class="text-sm">GCash ref: <strong>${p.gcash_reference || '—'}</strong></p>
            ${p.proof_path ? `<a class="text-violet-400 text-sm" href="../${p.proof_path}" target="_blank">View screenshot</a>` : ''}
            <div class="flex gap-2 mt-3">
              <button data-approve="${p.id}" class="px-3 py-1.5 bg-green-600 rounded-lg text-sm">Approve</button>
              <button data-reject="${p.id}" class="px-3 py-1.5 bg-red-600/80 rounded-lg text-sm">Reject</button>
            </div>
          </div>
        `).join('');

        list.querySelectorAll('[data-approve]').forEach((btn) => {
          btn.addEventListener('click', async () => {
            await adminFetch('/api/admin/payments.php', {
              method: 'POST',
              body: JSON.stringify({ paymentId: +btn.dataset.approve, action: 'approve' }),
            });
            load();
          });
        });
        list.querySelectorAll('[data-reject]').forEach((btn) => {
          btn.addEventListener('click', async () => {
            const note = prompt('Rejection note (optional):') || '';
            await adminFetch('/api/admin/payments.php', {
              method: 'POST',
              body: JSON.stringify({ paymentId: +btn.dataset.reject, action: 'reject', adminNote: note }),
            });
            load();
          });
        });
      } catch (e) {
        list.innerHTML = '<p class="text-red-400">' + e.message + '</p>';
      }
    }

    document.getElementById('load-btn').addEventListener('click', load);
  })();
</script>
