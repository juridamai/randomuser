## RandomUserApp

Aplikasi ini digunkanan untuk generata user random dari [https://randomuser.me/api](https://randomuser.me/api) 

Cara Instal: 
- Clone repo randomuser dengan cara buka git bash ketik "git clone git@github.com:juridamai/randomuser.git"
- Masuk ke folder project kemudian jalankan "composer install"
- Buat database baru dengan nama "randomuser"
- Atur konfigurasi database pada file .env (sesuaikan dengan komputer yang digunakan)
- Kemudian jalankan "php artisan migrate:fresh --seed"

Cara Menjalankan:
- Jalankan "php artisan serve" pada terminal
- Untuk generate randomuser akses http://localhost:8000/store
- Untuk melihat hasil response http://localhost:8000/home
- Untuk melihat hasil response dicount by profesi http://localhost:8000/profesi

