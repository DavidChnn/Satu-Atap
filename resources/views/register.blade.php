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
                        <p class="ml-4 pr-4 text-neutral-400 text-xl">Login</p>
                    </a>
                    <a href="History">
                        <p class="ml-4 pr-4 border-b-2 border-black text-xl">Register</p>
                    </a>
                </div>
                <div class="px-12 py-4">
                    <form id="formRegist" action="Login">
                        <div>
                            <div class="py-2">
                                <label for="email" class="text-2xl">Email</label><br>
                                <input id="email" type="email" class="bg-zinc-200 rounded-lg w-full py-1 px-4" required>
                            </div>
                            <div class="py-2">
                                <label for="username" class="text-2xl">Username</label><br>
                                <input id="username" type="text" class="bg-zinc-200 rounded-lg w-full py-1 px-4" required>
                            </div>
                            <div class="py-2">
                                <label for="password" class="text-2xl">Password</label><br>
                                <input id="password" type="password" class="bg-zinc-200 rounded-lg w-full py-1 px-4" required>
                            </div>
                            <div class="py-2">
                                <label for="repassword" class="text-2xl">Re-Password</label><br>
                                <input id="repassword" type="password" class="bg-zinc-200 rounded-lg w-full py-1 px-4" required>
                            </div>
                        </div>
                        <div class="flex justify-center items-center py-4">
                            <button type="submit" class="bg-sky-600 rounded-lg text-white px-4 py-2 my-4 text-center w-56">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Content end --}}
        <script>
            // Mengambil elemen-elemen dari formulir HTML
            const form = document.querySelector('#formRegist');
            const inputEmail = document.querySelector('#email');
            const inputUsername = document.querySelector('#username');
            const inputPassword = document.querySelector('#password');
            const inputRePassword = document.querySelector('#repassword');
            const submitButton = document.querySelector('button[type="submit"]');

            // Fungsi validasi
            const validasi = (event) => {
                event.preventDefault(); // Mencegah pengiriman formulir default

                const valEmail = inputEmail.value;
                const valUsername = inputUsername.value;
                const valPassword = inputPassword.value;
                const valRePassword = inputRePassword.value;

                if (!valEmail || valEmail.indexOf('@') === -1) {
                    alert("Masukkan alamat email yang valid");
                } else if (!valUsername) {
                    alert("Masukkan username Anda");
                } else if (!valPassword || valPassword.length < 8) {
                    alert("Password harus diisi dan setidaknya 8 karakter");
                } else if (valPassword !== valRePassword) {
                    alert("Password yang Anda masukkan tidak cocok");
                } else {
                    // Jika semua validasi berhasil, Anda dapat mengirimkan formulir atau melakukan tindakan lain sesuai kebutuhan Anda.
                    alert("Formulir berhasil diverifikasi!");
                    window.location.href = '/Login'
                    // Untuk mengirim formulir, Anda dapat menambahkan kode di sini.
                    // form.submit();
                }
            };

            // Tambahkan event listener pada tombol submit
            submitButton.addEventListener('click', validasi);
        </script>
    </body>
</html>