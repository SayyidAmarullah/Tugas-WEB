# CRUD Minuman

Aplikasi Laravel sederhana untuk mengelola data minuman.

## Deskripsi

CRUD Minuman adalah aplikasi web yang memungkinkan pengguna untuk:

- melihat daftar minuman
- menambahkan minuman baru
- mengedit data minuman
- menghapus minuman

## Teknologi

- Laravel 11
- PHP 8.2+
- Blade template
- Bootstrap 5 (CDN)
- SQLite atau MySQL

## Instalasi

Ikuti langkah berikut untuk menjalankan project ini di lokal:

1. Clone repository:

```bash
git clone <repository-url>
cd CRUD_Minuman
```

2. Instal dependensi:

```bash
composer install
```

3. Salin file environment:

```bash
copy .env.example .env
```

4. Generate application key:

```bash
php artisan key:generate
```

5. Konfigurasi database:

- Untuk SQLite: buat file `database/database.sqlite`
- Untuk MySQL: atur `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` di `.env`

6. Jalankan migrasi:

```bash
php artisan migrate
```

7. Jalankan server lokal:

```bash
php artisan serve
```

Buka aplikasi di: `http://127.0.0.1:8000/minuman`

## Struktur Utama

- `routes/web.php` - definisi route CRUD
- `app/Http/Controllers/MinumanController.php` - logika controller untuk index, create, store, edit, update, destroy
- `app/Models/minuman.php` - model Eloquent untuk tabel `minumen`
- `database/migrations/2026_04_19_061021_create_minumen_table.php` - migrasi tabel minuman
- `resources/views/minuman/index.blade.php` - halaman daftar minuman
- `resources/views/minuman/create.blade.php` - halaman tambah minuman
- `resources/views/minuman/edit.blade.php` - halaman edit minuman

## Route

Route yang tersedia:

- `GET /minuman` → daftar minuman
- `GET /minuman/create` → halaman tambah minuman
- `POST /minuman/store` → simpan minuman baru
- `GET /minuman/{id}/edit` → halaman edit minuman
- `PUT /minuman/{id}` → perbarui minuman
- `DELETE /minuman/{id}` → hapus minuman

## Fitur

- menambahkan data minuman
- menampilkan daftar minuman
- mengedit data minuman
- menghapus data minuman
- tampilan sederhana dengan Bootstrap

## Catatan

- Model `App\Models\minuman` menggunakan tabel `minumen`.
- Validasi form dijalankan pada saat menyimpan dan memperbarui data.
- Tampilan menggunakan Bootstrap CDN untuk styling cepat.

## Troubleshooting

- Jika route `/minuman/create` error, pastikan `MinumanController` memiliki method `create()` dan route terdaftar di `routes/web.php`.
- Jika migrasi gagal, periksa konfigurasi database pada file `.env`.
- Jika menggunakan SQLite, pastikan file `database/database.sqlite` sudah dibuat dan memiliki izin tulis.

## Lisensi

Proyek ini menggunakan lisensi MIT.
