# Luntian AI - Vercel Deployment Guide

## Overview
This application uses PHP backend with Firebase authentication and Aiven PostgreSQL. All fixes have been applied for seamless Vercel deployment.

## Environment Variables Required for Vercel

Add these environment variables in your Vercel project settings:

### Core Configuration
- `APP_URL` - Your Vercel deployment URL (e.g., `https://luntian-ai-pro.vercel.app`)
- `APP_ENV` - Set to `production` (auto-set)
- `DATABASE_URL` - Your Aiven PostgreSQL connection string (includes SSL)

### Firebase Configuration
- `FIREBASE_API_KEY` - From Firebase Console → Project Settings
- `FIREBASE_AUTH_DOMAIN` - Firebase auth domain (e.g., `luntian-ai-pro.firebaseapp.com`)
- `FIREBASE_PROJECT_ID` - Firebase project ID
- `FIREBASE_STORAGE_BUCKET` - Firebase storage bucket
- `FIREBASE_MESSAGING_SENDER_ID` - Firebase sender ID
- `FIREBASE_APP_ID` - Firebase app ID
- `FIREBASE_FACEBOOK_APP_ID` - Facebook app ID for social login

### AI & Services
- `GEMINI_API_KEY` - Google Gemini API key (from `ai.google.dev`)
- `GEMINI_MODEL` - Set to `gemini-2.0-flash`

### Payment Configuration (GCash)
- `GCASH_ACCOUNT_NAME` - Your GCash account name
- `GCASH_MOBILE` - Your GCash mobile number
- `GCASH_PRO_MONTHLY_PHP` - Monthly subscription price in PHP
- `GCASH_PRO_YEARLY_PHP` - Yearly subscription price in PHP

### Security
- `ADMIN_SECRET` - Long random string for admin verification (e.g., `Xk9#mPqR2vLw8@nZd5!uYt3`)
- `SESSION_SECRET` - Long random string for sessions (e.g., `bQ7*jHs4Kf1&eNg6Mc0#pWx`)

## Deployment Steps

1. **Push to GitHub**
   ```bash
   git push origin main
   ```

2. **Connect Vercel Project**
   - Go to `vercel.com/dashboard`
   - Click "Add New..." → "Project"
   - Select your GitHub repository
   - Skip framework selection (auto-detected)

3. **Add Environment Variables**
   - In Vercel dashboard: Project → Settings → Environment Variables
   - Add all variables listed above
   - Ensure `DATABASE_URL` includes `?sslmode=require` for Aiven

4. **Deploy**
   - Vercel will automatically deploy on push
   - Monitor deployment in "Deployments" tab
   - Check logs if issues occur

## File Changes Made for Vercel

- **vercel.json** - Updated routes to properly serve assets and API endpoints
- **luntian-api.js** - Fixed API base URL resolution for Vercel environment
- **package.json** - Ensured proper structure for Node.js runtime

## Troubleshooting

### "LuntianAPI is not defined"
- Verify `/assets/js/luntian-api.js` is accessible
- Check Vercel route configuration (it should serve `/assets/*`)

### Database Connection Failed
- Ensure `DATABASE_URL` includes full connection string with SSL
- Verify credentials are correct in `.env.local`
- Check Aiven firewall allows Vercel IPs

### Firebase Configuration Not Loaded
- Verify all `FIREBASE_*` environment variables are set
- Check `/api/auth/config.php` returns valid JSON

## Local Development

```bash
# Start local PHP server
npm start

# Server runs on http://localhost:8000
```

## Production Considerations

- All sensitive data (API keys, secrets) are environment variables
- Database has SSL enabled for security
- Firebase handles authentication
- GCash payments are manually verified by admin
- Session tokens stored in localStorage (client-side)

## Support

For issues:
1. Check Vercel deployment logs
2. Verify all environment variables are set
3. Check database connectivity from Vercel
4. Review browser console for client-side errors
