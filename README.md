# Laravel-API-Sederhana
Tools Akses API Postman Download di https://www.postman.com/downloads/
Rest API menggunakan framework Laravel
1. git clone https://github.com/vembririyan/Laravel-API-Sederhana
2. Masuk ke folder project
3. buka command line console
4. composer update
5. php artisan key:generate
6. Ubah nama file .env.example menjadi .env (disarankan dicopy paste untuk backup), yg berada di posisi file root project
7. Buat database dengan nama restapi
8. php artisan migrate atau php artisan migrate:fresh

Note: kalo buat API setiap url yg mau di pakai didaftarin di $except di file middleware
cek di App>Http>Middleware>VerifyCsrfToken.php

URL Api
Get All Data|GET| Isi data di params : http://localhost:8000/identitas

Store Data|POST| Isi data di body>x-www-form-url-encoded : http://localhost:8000/identitas

show Data|GET| Isi data di params : http://localhost:8000/identitas/{id}

update Data|PUT| Isi data di body>x-www-form-url-encoded : http://localhost:8000/identitas/{id}

delete data|DELETE | Isi data di params : http://localhost:8000/identitas/{id}
