
#perbaikan-bengkel-laravel-8

Using HTML,CSS and Javascript

##perbaikan bengkel merupakan sebuah website yang digunakan untuk mengelola perbaikan bengkel. Aplikasi ini dibuat menggunakan Laravel 8 dan minimal PHP 7.4 olehkarena itu jika pada saat proses instalasi terdapat error karena versi dari PHP yang tidak support.

### Beberapa Fitur yang tersedia:
- Kelola akun user & hak akses
- Spare part
- Pemesanan
- Perintah perbaikan
- Perbaikan
- Survey

## Instalasi
#### Via Git
```bash
git clone git@github.com:EbenEzerManurung/perbaikan-bengkel-laravel-8.git
```

### Setup Aplikasi
Jalankan perintah 
```bash
composer update
```
atau:
```bash
composer install
```
Copy file .env dari .env.example
```bash
cp .env.example .env
```
Konfigurasi file .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_bengkel
DB_USERNAME=root
DB_PASSWORD=
```
Generate key
```bash
php artisan key:generate
```
Migrate database
```bash
php artisan migrate
```
Menjalankan aplikasi
```bash
php artisan serve
```

## Screenshot 
## Register account

![App Screenshot](https://github.com/EbenEzerManurung/perbaikan-bengkel-laravel-8/blob/main/screenshot/register_account.PNG?raw=true)

## Login

![App Screenshot](https://github.com/EbenEzerManurung/perbaikan-bengkel-laravel-8/blob/main/screenshot/login.PNG?raw=true)

## Dashboard

![App Screenshot](https://github.com/EbenEzerManurung/perbaikan-bengkel-laravel-8/blob/main/screenshot/dashboard.PNG?raw=true)

## Access

![App Screenshot](https://github.com/EbenEzerManurung/perbaikan-bengkel-laravel-8/blob/main/screenshot/access.PNG?raw=true)

## create spare part

![App Screenshot](https://github.com/EbenEzerManurung/perbaikan-bengkel-laravel-8/blob/main/screenshot/create_sparepart.PNG?raw=true)

## create pemesanan

![App Screenshot](https://github.com/EbenEzerManurung/perbaikan-bengkel-laravel-8/blob/main/screenshot/pemesan.PNG?raw=true)

## create perintah perbaikan

![App Screenshot](https://github.com/EbenEzerManurung/perbaikan-bengkel-laravel-8/blob/main/screenshot/perintah_perbaikan.PNG?raw=true)

## create perbaikan

![App Screenshot](https://github.com/EbenEzerManurung/perbaikan-bengkel-laravel-8/blob/main/screenshot/perbaikan.PNG?raw=true)

## create survey

![App Screenshot](https://github.com/EbenEzerManurung/perbaikan-bengkel-laravel-8/blob/main/screenshot/survey.PNG?raw=true)
















