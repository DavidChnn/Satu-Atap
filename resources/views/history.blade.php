<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Satu Atap</title>
    </head>
    <body class="bg-white">
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
                <div class="relative flex items-center border-2 rounded-lg mx-8">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="mx-2">
                        <path d="M21 21L16.657 16.657M16.657 16.657C17.3999 15.9141 17.9892 15.0322 18.3912 14.0615C18.7933 13.0909 19.0002 12.0506 19.0002 11C19.0002 9.94939 18.7933 8.90908 18.3912 7.93845C17.9892 6.96782 17.3999 6.08588 16.657 5.34299C15.9141 4.6001 15.0322 4.01081 14.0615 3.60877C13.0909 3.20672 12.0506 2.99979 11 2.99979C9.94939 2.99979 8.90908 3.20672 7.93845 3.60877C6.96782 4.01081 6.08588 4.6001 5.34299 5.34299C3.84266 6.84332 2.99979 8.87821 2.99979 11C2.99979 13.1218 3.84266 15.1567 5.34299 16.657C6.84332 18.1573 8.87821 19.0002 11 19.0002C13.1218 19.0002 15.1567 18.1573 16.657 16.657Z" stroke="#A6A6A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <input type="search" placeholder="Cari..." class="outline-none">
                </div>
            </div>
            <div class="relative flex items-center p-4">
                <p>Helo, User</p>
            </div>
        </nav>
        <div class="flex flex-col bg-gray-300 h-fit justify-between px-20 ">
                <div class="flex items-center p-4 font-bold text-3xl">
                    <p class="pr-4">Profile</p>
                </div>
                <div class="flex p-8 mr-auto">
                    <a href="Login">
                        <p class="pr-4 text-black">Account</p>
                     </a>
                    <a href="Register">
                        <p class="ml-4 pr-4 border-b-2 border-blue-500 text-blue-500">History</p>
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
        <div class="bg-white">
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
    </body>
</html>