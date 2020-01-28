# WEBSITE GUNUNGGGAJAH

## First Time Setup
1. Clone repository.
1. Make sure following folders writeable by web server:
	1. `storage`
	1. `bootstrap/cache`
1. Run command `composer install`.
1. Run command `npm install`.
1. Run command `npm run dev` untuk dev atau `npm run prod` untuk production.
1. Copy `.env.example` to `.env` and adjust the content.
1. Run command `php artisan migrate:fresh --seed`.
1. Run command `php artisan key:generate`.
1. Run command `php artisan storage:link`.
1. Run command `php artisan laravolt:link-assets`.
1. Run command `php artisan serve`  or use valet and then open the URL provided by the console in browser.

## Pengembangan dilakukan di branch dev
