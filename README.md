# SPK_metode_AHP_PM_pemilihan_Lahan_Tanah

![Logo Proyek](https://github.com/ren-zi-fa/SPK_metode_AHP_PM_pemilihan_Lahan_Tanah/blob/main/public/favicon.ico)

Proyek ini adalah sistem pendukung keputusan (SPK) yang menggunakan metode Analytic Hierarchy Process (AHP) dan Profile Matching (PM) untuk pemilihan lahan tanah. Sistem ini dirancang untuk membantu dalam menentukan lahan tanah yang paling sesuai berdasarkan kriteria-kriteria yang sudah saya tentukan.

## Daftar Isi

- [Fitur](#fitur)
- [Persyaratan](#persyaratan)
- [Instalasi](#instalasi)
- [Penggunaan](#penggunaan)

## Fitur

- Implementasi metode AHP untuk menentukan bobot kriteria.
- Implementasi metode Profile Matching untuk evaluasi alternatif lahan.
- Antarmuka pengguna yang sederhana dan mudah digunakan.
- Telah menggunakan fitur login oAuth dengan menggunakan Google.
- Login dengan menggunakan multi role.

## Persyaratan

Sebelum menginstal dan menjalankan proyek ini, pastikan Anda memiliki:

- PHP >= 8.1
- Composer
- Database (MySQL)
- Node.js dan NPM

## Instalasi

Berikut adalah langkah-langkah untuk menginstal dan menjalankan proyek ini secara lokal:

1. Clone repository ini:
    ```bash
    git clone https://github.com/ren-zi-fa/SPK_metode_AHP_PM_pemilihan_Lahan_Tanah.git
    ```

2. Pindah ke direktori proyek:
    ```bash
    cd SPK_metode_AHP_PM_pemilihan_Lahan_Tanah
    ```

3. Instal dependensi PHP menggunakan Composer:
    ```bash
    composer install
    ```

4. Instal dependensi Node.js menggunakan NPM:
    ```bash
    npm install
    ```

5. Salin file `.env.example` menjadi `.env` dan sesuaikan pengaturan database:
    ```bash
    cp .env.example .env
    ```

6. Generate application key:
    ```bash
    php artisan key:generate
    ```

7. Migrasi dan seed database:
    ```bash
    php artisan migrate --seed
    ```

8. Jalankan server pengembangan Laravel:
    ```bash
    php artisan serve
    ```

9. Jalankan Vite untuk mengompilasi asset:
    ```bash
    npm run dev
    ```

## Penggunaan

Setelah menginstal dan menjalankan aplikasi, Anda dapat mengaksesnya melalui browser di alamat `http://localhost:8000`. Ikuti instruksi pada layar untuk memasukkan data kriteria dan alternatif lahan.

## Gambar Proyek
![Screenshot Aplikasi](https://github.com/ren-zi-fa/SPK_metode_AHP_PM_pemilihan_Lahan_Tanah/blob/main/Screenshot_22-5-2024_132517_laravel-pkl-ahp-pm.nzy.jpeg)
![Screenshot Aplikasi](https://github.com/ren-zi-fa/SPK_metode_AHP_PM_pemilihan_Lahan_Tanah/blob/main/Screenshot_22-5-2024_132549_laravel-pkl-ahp-pm.nzy.jpeg)
![Screenshot Aplikasi](https://github.com/ren-zi-fa/SPK_metode_AHP_PM_pemilihan_Lahan_Tanah/blob/main/Screenshot_22-5-2024_132714_laravel-pkl-ahp-pm.nzy.jpeg)
![Screenshot Aplikasi](https://github.com/ren-zi-fa/SPK_metode_AHP_PM_pemilihan_Lahan_Tanah/blob/main/Screenshot_22-5-2024_132743_laravel-pkl-ahp-pm.nzy.jpeg)
![Screenshot Aplikasi](https://github.com/ren-zi-fa/SPK_metode_AHP_PM_pemilihan_Lahan_Tanah/blob/main/Screenshot_22-5-2024_132820_laravel-pkl-ahp-pm.nzy.jpeg)
![Screenshot Aplikasi](https://github.com/ren-zi-fa/SPK_metode_AHP_PM_pemilihan_Lahan_Tanah/blob/main/Screenshot_22-5-2024_133012_laravel-pkl-ahp-pm.nzy.jpeg)
