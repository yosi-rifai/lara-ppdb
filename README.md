## Cara Install Projek Ini
- Jalankan `git clone https://github.com/yosi-rifai/lara-ppdb`
- Jalankan composer install.
- Jalankan cp .env.example .env or copy .env.example .env.
- Sesuaikan konfigurasi database anda di .env
- Jalankan php artisan key:generate
- Jalankan php artisan migrate --seed
- Jalankan php artisan serve
- Buka website sesuai dengan localhost dan portnya di web browser anda contoh `http://localhost:8000`
```
user url : localhost:8000
admin url : localhost:8000/admin
```

## User dan Password Admin

```
email: admin@admin.com
password: 123456
```
