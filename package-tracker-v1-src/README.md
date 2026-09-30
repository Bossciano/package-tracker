# Package Tracker V1

Laravel + Blade + MySQL package tracking system designed for cPanel/shared hosting.

## Included
- Public tracking lookup and timeline
- ETA and delivery confirmation
- Shipment status workflow with validated transitions
- Admin authentication and role protection
- Dashboard, shipments, customers and audit history
- Automatic tracking numbers
- Customer email notifications
- Rate limiting, validation, CSRF and soft deletion
- Basic feature tests
- cPanel deployment guidance

## Important
This archive is a **source package**. It intentionally does not include `vendor/` or real `.env` secrets. Run `composer install` after extracting it. If your deployment uses the supplied static `public/build` assets, Node.js is not required on cPanel.

## Local setup
```bash
composer install
cp .env.example .env
php artisan key:generate
# configure MySQL in .env
php artisan migrate
npm install
npm run build
php artisan storage:link
php artisan serve
```

## Admin account
Set `ADMIN_EMAIL` and `ADMIN_PASSWORD` in `.env`, then run:
```bash
php artisan db:seed --class=DatabaseSeeder
```
Do not commit real credentials.

## cPanel
Keep the Laravel project outside `public_html`, for example:
`/home/USERNAME/package-tracker/`

Copy the contents of `public/` to:
`/home/USERNAME/public_html/`

Update `public_html/index.php`:
```php
require __DIR__.'/../package-tracker/vendor/autoload.php';
$app = require_once __DIR__.'/../package-tracker/bootstrap/app.php';
```

Set production `.env`:
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
APP_TIMEZONE=UTC
APP_DISPLAY_TIMEZONE=Africa/Lagos
QUEUE_CONNECTION=sync
```
Configure MySQL and SMTP. Then:
```bash
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan storage:link
php artisan optimize:clear
php artisan optimize
```

## Security checklist
- `APP_DEBUG=false` in production
- `.env` outside `public_html`
- HTTPS enabled
- Strong admin password
- SMTP credentials kept secret
- Regular MySQL backups
- Never use `chmod 777` on the application

## V1 intentionally excludes
GPS, live maps, WebSockets, live driver location, SMS and mobile apps. Those are V2 candidates.
