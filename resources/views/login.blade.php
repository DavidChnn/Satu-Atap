<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Satu Atap</title>
    </head>
    <body class="min-h-screen bg-cover bg-[url('/public/images/bgloginregist.jpg')]">
        {{-- Navbar --}}
        @include('component/navbarGuest')
        {{-- Navbar end --}}

        {{-- Content --}}
        <div class="relative flex justify-center items-center">
            <div class="relative bg-white m-20 w-[500px] h-full rounded-xl">
                <div class="flex p-8">
                    <a href="Login">
                        <p class="ml-4 pr-4 border-b-2 border-black text-xl">Login</p>
                    </a>
                    <a href="Register">
                        <p class="ml-4 pr-4 text-neutral-400 text-xl">Register</p>
                    </a>
                </div>
                <div class="px-12 py-4">
                    <form action="landingPageLogged">
                        <div class="">
                            <div class="py-2">
                                <label for="email" class="text-2xl">Email</label><br>
                                <input type="email" class="bg-zinc-200 rounded-lg w-full py-1 px-4" required>
                            </div>
                            <div class="py-2">
                                <label for="password" class="text-2xl">Password</label><br>
                                <input type="password" class="bg-zinc-200 rounded-lg w-full py-1 px-4" required>
                            </div>
                        </div>
                        <div class="flex justify-center items-center py-4">
                            <button type="submit" class="bg-sky-600 rounded-lg text-white px-4 py-2 my-4 text-center w-56">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Content end --}}
        <script>
            // Mengambil elemen-elemen dari formulir HTML
            const form = document.querySelector('form');
            const inputEmail = document.querySelector('input[type="email"]');
            const inputPassword = document.querySelector('input[type="password"]');
            const submitButton = document.querySelector('button[type="submit"]');

            // Simulasi pemeriksaan server-side (untuk tujuan pengujian saja)
            const serverSideCheck = (email, password) => {
                // Data pengguna yang telah di-hardcode (untuk tujuan pengujian saja)
                const users = {
                    'david.chan-2021@fst.unair.ac.id': '12345678', '123213123',
                    // Tambahkan pengguna lain jika diperlukan
                };

                return users[email] === password;
            };

            // Fungsi validasi
            const validasi = (event) => {
                event.preventDefault(); // Mencegah pengiriman formulir default

                const valEmail = inputEmail.value;
                const valPass = inputPassword.value;

                if (!valEmail || valEmail.indexOf('@') === -1) {
                    alert("Masukkan alamat email yang valid");
                } else if (!valPass || !serverSideCheck(valEmail, valPass)) {
                    alert("Email atau Password tidak sesuai");
                } else {
                    window.location.href = "/landingPageLogged"; // Mengarahkan ke halaman setelah login berhasil
                }
            };

            // Tambahkan event listener pada tombol submit
            submitButton.addEventListener('click', validasi);
        </script>
    </body>
</html>