<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Satu Atap</title>
    </head>
    <body class="flex flex-col min-h-screen">
        {{-- Navbar --}}
        @include('component/navbarGuest')
        {{-- Navbar end --}}

        <div class="flex flex-col bg-gray-300 h-fit justify-between px-20 ">
                <div class="flex items-center p-4 font-bold text-3xl">
                    <p class="pr-4">Profile</p>
                </div>
                <div class="flex px-4">
                    <a href="Account">
                        <p class="mr-4 text-black">Account</p>
                    </a>
                    <a href="Register">
                        <p class="border-b-2 border-blue-500 text-blue-500">History</p>
                    </a>
                </div>
        </div>
        <div class="flex flex-col bg-white h-fit justify-between px-20 ">
                <div class="flex p-8 mr-auto">
                <button class="bg-white text-black py-2 px-4 rounded-full mr-2 mb-2 w-24 border border-black">All</button>
                <button class="bg-white text-black py-2 px-4 rounded-full mr-2 mb-2 w-24 border border-gray-300">Complete</button>
                <button class="bg-white text-black py-2 px-4 rounded-full mr-2 mb-2 w-24 border border-gray-300">Pending</button>
                </div>
        </div>

        <div class="bg-white flex-grow">
            <div class="relative flex justify-center items-center">
                <div class="relative bg-gray-300 rounded-xl w-full max-w-screen-md p-6">
                    <form action="">
                        <div>
                        <table class="table-fixed w-full">
                            <thead>
                                <tr>
                                <th class="px-4 py-2">Order ID</th>
                                <th class="px-4 py-2">Date</th>
                                <th class="px-4 py-2">Instansi</th>
                                <th class="px-4 py-2">layanan</th>
                                <th class="px-4 py-2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>#15267</td>
                                <td>Mar 1, 2023</td>
                                <td>Dukacapil</td>
                                <td>E-Ktp</td>
                                <td>Status</td>
                                </tr>
                                <tr>
                                <td>#15267</td>
                                <td>Mar 1, 2023</td>
                                <td>Dukacapil</td>
                                <td>E-Ktp</td>
                                <td>Status</td>
                                </tr>
                                <tr>
                                <td>#15267</td>
                                <td>Mar 1, 2023</td>
                                <td>Dukacapil</td>
                                <td>E-Ktp</td>
                                <td>Status</td>
                                </tr>
                                <tr>
                                <td>#15267</td>
                                <td>Mar 1, 2023</td>
                                <td>Dukacapil</td>
                                <td>E-Ktp</td>
                                <td>Status</td>
                                </tr>
                                <tr>
                                <td>#15267</td>
                                <td>Mar 1, 2023</td>
                                <td>Dukacapil</td>
                                <td>E-Ktp</td>
                                <td>Status</td>
                                </tr>
                                <tr>
                                <td>#15267</td>
                                <td>Mar 1, 2023</td>
                                <td>Dukacapil</td>
                                <td>E-Ktp</td>
                                <td>Status</td>
                                </tr>
                                <tr>
                                <td>#15267</td>
                                <td>Mar 1, 2023</td>
                                <td>Dukacapil</td>
                                <td>E-Ktp</td>
                                <td>Status</td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        @include('component/footer')
        {{-- Footer end --}}
    </body>
</html>