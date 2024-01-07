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
        @include('component/navbarlogged')
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
                    <button class="bg-white text-black py-2 px-4 rounded-full mr-2 mb-2 w-28 border border-black">All</button>
                    <button class="bg-white text-black py-2 px-4 rounded-full mr-2 mb-2 w-28 border border-gray-300">Complete</button>
                    <button class="bg-white text-black py-2 px-4 rounded-full mr-2 mb-2 w-28 border border-gray-300">Pending</button>
                </div>
        </div>

        <div class="bg-white flex-grow px-20">
            <div class="relative flex items-center px-4">
                <div class="relative rounded-xl shadow-xl w-full max-w-screen-lg border-2 border-gray-200 h-fit text-center">
                    <form action="">
                        <div>
                        <table class="table-fixed w-full">
                            <thead class="relative border-b-2 border-gray-300">
                                <tr>
                                <th class="px-4 py-2">Order ID</th>
                                <th class="px-4 py-2">Date</th>
                                <th class="px-4 py-2">Instansi</th>
                                <th class="px-4 py-2">layanan</th>
                                <th class="px-4 py-2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="hover:bg-gray-200">
                                    <td class="py-4">#15267</td>
                                    <td>Mar 1, 2023</td>
                                    <td>Dukacapil</td>
                                    <td>E-Ktp</td>
                                    <td class="text-green-500">Success</td>
                                </tr>
                                <tr class="hover:bg-gray-200">
                                    <td class="py-4">#15267</td>
                                    <td>Mar 1, 2023</td>
                                    <td>Dukacapil</td>
                                    <td>E-Ktp</td>
                                    <td class="text-green-500">Success</td>
                                </tr>
                                <tr class="hover:bg-gray-200">
                                    <td class="py-4">#15267</td>
                                    <td>Mar 1, 2023</td>
                                    <td>Dukacapil</td>
                                    <td>E-Ktp</td>
                                    <td class="text-green-500">Success</td>
                                </tr>
                                <tr class="hover:bg-gray-200">
                                    <td class="py-4">#15267</td>
                                    <td>Mar 1, 2023</td>
                                    <td>Dukacapil</td>
                                    <td>E-Ktp</td>
                                    <td class="text-sky-600">Pending</td>
                                </tr>
                                <tr class="hover:bg-gray-200">
                                    <td class="py-4">#15267</td>
                                    <td>Mar 1, 2023</td>
                                    <td>Dukacapil</td>
                                    <td>E-Ktp</td>
                                    <td class="text-red-600">Cancel</td>
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