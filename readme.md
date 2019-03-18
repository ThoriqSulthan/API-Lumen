# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

# Penjelasan
Proyek ini adalah crud yang mempunyai 2 table yang terdiri dari `t_kelas` dan `t_siswa`, `t_siswa` terdiri dari `nis`,
`nama_lengkap`,`jenis_kelamin`, dan `alamat` dan `t_kelas` terdiri dari `nama_kelas` dan `jurusan`.

# Komponen
Setiap Table mempunyai `crud`nya masing-masing, untuk `t_siswa` `crud`nya diatur dalam `SiswaController.php` dan untuk `t_kelas` `crud`nya diatur dalam `KelasController.php`.

## Cara Penginstallan 

Pertama ketik di cmd `composer create-project laravel/lumen nama-project --prefer-dist` 
Selain itu, download postman untuk melihat/mengecek database
Pada postman ada beberapa method :
- `POST` Untuk menambah dan mengubah data pada database
- `GET` Untuk mengambil data atau read data pada database
- `DELETE` Untuk menghapus data pada database

## Cara Kerja

- Pertama, membuat project Lumen
- Kedua, Install postman untuk mengetest function
- Ketiga, Membuat database dan ketik `php artisan make:migration create_t_siswa` pada cmd untuk membuat migration
- Keempat, Membuat `controller` untuk masing-masing table
- Kelima, Buatlah beberapa function didalam controller dan test di dalam postman

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
