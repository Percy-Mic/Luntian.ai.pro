<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="luntian-api-base" content=""/>
<title>Admin — GCash payments</title>
<script src="https://cdn.tailwindcss.com"></script>
<script>
  document.querySelector('meta[name="luntian-api-base"]').content =
    window.location.origin + window.location.pathname.replace(/\/admin\/[^/]*$/, '').replace(/\/admin$/, '') ||
    window.location.origin + window.location.pathname.replace(/\/admin\/.*$/, '');
  const base = document.querySelector('meta[name="luntian-api-base"]').content;
  if (!base.endsWith('luntianAi') && base.includes('/admin')) {
    document.querySelector('meta[name="luntian-api-base"]').content =
      window.location.origin + '/luntianAi';
  }
</script>
</head>
<body class="bg-slate-900 text-white min-h-screen p-6 font-sans">
<div class="max-w-4xl mx-auto">
<h1 class="text-2xl font-bold mb-2">GCash payment approvals</h1>
<p class="text-slate-400 text-sm mb-6">Free manual process — no GCash API. Enter your <code>ADMIN_SECRET</code> from .env (stored only in this browser session).</p>

<div class="flex gap-2 mb-6">
<input type="password" id="admin-secret" class="flex-1 rounded-lg bg-slate-800 border border-slate-600 px-4 py-2" placeholder="ADMIN_SECRET"/>
<button id="load-btn" class="px-4 py-2 bg-violet-600 rounded-lg font-medium">Load pending</button>
</div>

<div id="list" class="space-y-4"></div>
</div>
<script>
(function () {
  const meta = document.querySelector('meta[name="luntian-api-base"]');
  let apiBase = meta.content;
  if (!apiBase) {
    apiBase = window.location.origin + window.location.pathname.replace(/\/admin\/.*$/, '');
    meta.content = apiBase;
  }

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
    const headers = Object.assign(
      { 'X-Admin-Secret': secret(), 'Content-Type': 'application/json' },
      options.headers || {}
    );
    const res = await fetch(apiBase + path, Object.assign({}, options, { headers }));
    const data = await res.json();
    if (!res.ok) throw new Error(data.error || 'Failed');
    return data;
  }

  async function load() {
    const list = document.getElementById('list');
    list.innerHTML = '<p class="text-slate-400">Loading…</p>';
    try {
      const data = await adminFetch('/api/admin/payments.php?status=submitted');
      if (!data.payments.length) {
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
</body>
</html>
