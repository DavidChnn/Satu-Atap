<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Satu Atap</title>
    </head>
    <body class="">
        {{-- Navbar --}}
        @include('component/navbarLogged')
        {{-- Navbar end --}}

        {{-- Content --}}
        <div class="grid grid-cols-2 justify-center items-center py-20 bg-gradient-to-r from-sky-600 to-white">
            <div class="self-center">
                <img src="{{ url('images/landingpageimg.png') }}" alt="Deskripsi Gambar" class="mx-auto">
            </div>
            <div class="">
                <p class="w-fit text-zinc-900 text-7xl font-bold m-4">
                    Berbagai Layanan, <br> Satu Portal
                </p>
                <p class="w-[650px] text-zinc-800 text-3xl font-normal m-4">
                    Hemat waktu dengan navigasi yang sederhana dan akses cepat ke semua layanan
                </p>
            </div>
        </div>
        <div class="bg-zinc-100">
            <div class="grid grid-cols-4 mx-40">
                <div class="bg-white w-fit mx-auto my-20 p-2 rounded-lg shadow-lg w-52">
                    <div class="h-52 flex justify-center items-center">
                        <img src="{{ url('images/dukcapil.png') }}" alt="Deskripsi Gambar" class="mx-auto">
                    </div>
                    <p class="text-center">DUKCAPIL</p>
                </div>
                <div class="bg-white w-fit mx-auto my-20 p-2 rounded-lg shadow-lg w-52">
                    <div class="h-52 flex justify-center items-center">
                        <img src="{{ url('images/samsat.png') }}" alt="Deskripsi Gambar" class="mx-auto">
                    </div>
                    <p class="text-center">SAMSAT</p>
                </div>
                <div class="bg-white w-fit mx-auto my-20 p-2 rounded-lg shadow-lg w-52">
                    <div class="h-52 flex justify-center items-center">
                        <img src="{{ url('images/polri.png') }}" alt="Deskripsi Gambar" class="mx-auto">
                    </div>
                    <p class="text-center">POLRI</p>
                </div>
                <div class="bg-white w-fit mx-auto my-20 p-2 rounded-lg shadow-lg w-52">
                    <div class="h-52 flex justify-center items-center">
                        <img src="{{ url('images/imigrasi.png') }}" alt="Deskripsi Gambar" class="mx-auto ">
                    </div>
                    <p class="text-center">IMIGRASI</p>
                </div>
            </div>
        </div>
        {{-- Content end --}}

        {{-- Footer --}}
        @include('component/footer')
        {{-- Footer end --}}
    </body>
</html>