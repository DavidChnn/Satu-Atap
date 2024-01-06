<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Satu Atap</title>
    </head>
    <body class="bg-gradient-to-r from-white to-sky-600">
        <nav class="flex bg-white shadow-xl h-fit justify-between px-20">
            <a href="/">
                <div class="relative flex flex-row items-center p-4 font-bold text-3xl">
                    <h1>Satu</h1>
                    <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.08331 28.3333V17H2.83331L17 4.25L22.6666 9.35V5.66667H26.9166V13.175L31.1666 17H26.9166V28.3333H19.8333V19.8333H14.1666V28.3333H7.08331ZM14.1666 14.2021H19.8333C19.8333 13.4465 19.55 12.8265 18.9833 12.342C18.4166 11.8575 17.7555 11.6157 17 11.6167C16.2444 11.6167 15.5833 11.8589 15.0166 12.3434C14.45 12.8279 14.1666 13.4475 14.1666 14.2021Z" fill="#0077C0"/>
                    </svg>
                    <h1>tap</h1>
                </div>
            </a>
            <div class="relative flex items-center p-4 font-bold w-fit ">
                <a href="" class="mx-8">
                    Beranda
                </a>
                <a href="" class="mx-8">
                    Tentang
                </a>
                <a href="" class="mx-8">
                    Hubungi Kami
                </a>
                <a href="" class="mx-8">
                    FAQ
                </a>
            </div>
            <div class="relative flex items-center p-4">
                <div class="relative flex items-center border-2 rounded-lg mx-2">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-2">
                        <path d="M21 21L16.657 16.657M16.657 16.657C17.3999 15.9141 17.9892 15.0322 18.3912 14.0615C18.7933 13.0909 19.0002 12.0506 19.0002 11C19.0002 9.94939 18.7933 8.90908 18.3912 7.93845C17.9892 6.96782 17.3999 6.08588 16.657 5.34299C15.9141 4.6001 15.0322 4.01081 14.0615 3.60877C13.0909 3.20672 12.0506 2.99979 11 2.99979C9.94939 2.99979 8.90908 3.20672 7.93845 3.60877C6.96782 4.01081 6.08588 4.6001 5.34299 5.34299C3.84266 6.84332 2.99979 8.87821 2.99979 11C2.99979 13.1218 3.84266 15.1567 5.34299 16.657C6.84332 18.1573 8.87821 19.0002 11 19.0002C13.1218 19.0002 15.1567 18.1573 16.657 16.657Z" stroke="#A6A6A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <input type="search" placeholder="Cari..." class="outline-none">
                </div>
                <a href="Login">
                    <button type="button" class="mx-2 px-4 font-bold text-sky-600 border-2 border-sky-600 rounded-lg">Masuk</button>
                </a>
                <a href="Register">
                    <button type="button" class="mx-2 px-4 font-bold bg-sky-600 border-2 border-sky-600 rounded-lg text-white">Daftar</button>
                </a>
            </div>
        </nav>
        <div class="relative flex justify-center items-center">
            <div class="relative bg-white m-20 w-96 h-96 rounded-xl">
                <div class="flex p-8">
                    <a href="Login">
                        <p class="ml-4 pr-4 border-b-2 border-black">Login</p>
                    </a>
                    <a href="Register">
                        <p class="ml-4 pr-4 text-neutral-400">Register</p>
                    </a>
                </div>
                <div class="px-12 py-4">
                    <form action="landingPageLogged">
                        <div>
                            <label for="email">Email</label><br>
                            <input type="email" class="bg-zinc-200 rounded-lg w-full"><br>
                            <label for="password">Password</label><br>
                            <input type="password" class="bg-zinc-200 rounded-lg w-full"><br>
                        </div>
                        <div class="flex justify-center items-center">
                            <button type="submit" class="bg-sky-600 rounded-lg text-white px-4 py-2 my-4 text-center w-56">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>