# SatuAtap Website Project

## Deskripsi
SatuAtap adalah website inovatif yang bertujuan untuk memudahkan dan mempercepat proses pengecekan dokumen di Mall Pelayanan Publik Kota Surabaya. Website ini didesain untuk meningkatkan efisiensi, transparansi, dan pengalaman warga Surabaya dalam berinteraksi dengan Mall Pelayanan Publik.

## Fitur
### 1. Pengecekan Dokumen Otomatis
- Unggah dokumen untuk layanan (SIM, KTP).
- Sistem otomatis periksa kelengkapan dengan umpan balik.

### 2. Jadwal dan Antrian Online
- Lihat jadwal layanan dan pesan antrian online.
- Notifikasi saat giliran mendekat.

### 3. Notifikasi Real-time
- Notifikasi perubahan jadwal via email.

### 4. Informasi Terkini
- Berita dan pembaruan layanan publik.

## Cara Clone dan Menjalankan Proyek

1. Clone repositori ini ke mesin lokal Anda:

   ```bash
   git clone https://github.com/nama-username/SatuAtap.git
   ```

2. Pindah ke direktori proyek:

   ```bash
   cd Satu-Atap
   ```

3. Install dependencies menggunakan Composer:

   ```bash
   composer install
   ```

4. Salin file `.env.example` ke `.env` dan atur konfigurasi database:

   ```bash
   cp .env.example .env
   ```

5. Generate kunci aplikasi:

   ```bash
   php artisan key:generate
   ```

6. Migrasi dan seeding database:
    - jalankan xampp

   ```bash
   php artisan migrate --seed
   ```

7. Jalankan server lokal:

   ```bash
   php artisan serve
   ```

   Kunjungi `http://localhost:8000` pada browser untuk melihat proyek.

Menambahkan Tailwind CSS ke proyek Laravel, ikuti langkah-langkah berikut:

**Langkah 1: Instal Tailwind CSS dan PostCSS Dependencies**

Buka terminal dan jalankan perintah berikut:

```bash
npm install tailwindcss postcss autoprefixer
```

**Langkah 2: Jalankan perintah berikut untuk mengkompilasi Tailwind CSS:**

```bash
npm run dev
```

## Kontribusi
Jika Anda ingin berkontribusi pada proyek ini, silakan ikuti langkah-langkah berikut:

1. Fork repositori ini.
2. Buat branch baru: `git checkout -b fitur-anda`.
3. Commit perubahan: `git commit -m 'Menambahkan fitur baru'`.
4. Push ke branch: `git push origin fitur-anda`.
5. Submit pull request.

Terima kasih atas kontribusinya!

## Lisensi

Proyek ini dilisensikan di bawah [Lisensi MIT](LICENSE).
```

Pastikan untuk mengganti URL repositori, nama pengguna, dan proyek sesuai dengan proyek Anda. Juga, pastikan bahwa Anda telah menyediakan panduan yang akurat untuk instalasi dan kontribusi proyek.
