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
        <div class="bg-zinc-100 py-20 px-10">
            <h1 class="text-center text-3xl font-bold py-4">
                DUKCAPIL
            </h1>
            <div class="px-4 relative grid grid-cols-2 gap-10">
                <div class="w-fit h-fit mx-auto px-14 py-4 bg-gradient-to-br from-sky-700 to-blue-400 rounded-2xl flex flex-col items-center justify-center">
                    <h1 class="text-center text-white pt-10 text-3xl">
                        No. Antrian
                    </h1>
                    <div class="w-80 border-2 border-white rounded-xl"></div>
                    <h1 class="text-center text-white py-6 text-9xl font-bold">
                        0001
                    </h1>
                </div>
                <div class="py-2 w-fit">
                    <h1 class="w-fit text-2xl border-b-2 border-black font-bold">
                        Penerbitan <span class="text-sky-600">e-KTP</span>
                    </h1>
                    <form action="" class="py-8">
                        <table class="table-fixed">
                            <tbody>
                                <tr>
                                    <td class="pr-8 py-3">Tempat</td>
                                    <td class="px-2">:</td>
                                    <td class="px-4">Kantor Dukcapil Jalan Basuki Rahmat No. 123, Surabaya</td>
                                </tr>
                                <tr>
                                    <td class="pr-8 py-3">tanggal</td>
                                    <td class="px-2">:</td>
                                    <td class="px-4">Rabu, 4 Oktober 2023</td>
                                </tr>
                                <tr>
                                    <td class="pr-8 pt-3">Waktu</td>
                                    <td class="px-2">:</td>
                                    <td class="px-4">14.50 WIB - 15.20 WIB</td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <h2 class="font-bold text-xl">
                        Notes:
                    </h2>
                    <p class="italic">
                        *) Jangan lupa membawa berkas yang di upload
                    </p>
                </div>
            </div>
            <div class="text-center pt-60">
                <a href="landingPageLogged" class="text-zinc-800 text-lg font-normal font-['Inter'] underline">
                    Back to Home
                </a>
            </div>
        </div>
        {{-- Content end --}}

        {{-- Footer --}}
        @include('component/footer')
        {{-- Footer end --}}
    </body>
</html>