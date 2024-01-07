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

        {{-- Content --}}
        <div class="flex flex-col bg-gray-300 h-fit justify-between px-20 ">
                <div class="flex items-center p-4 font-bold text-3xl">
                    <p class="pr-4">Profile</p>
                </div>
                <div class="flex px-4">
                    <a href="Account">
                        <p class="mr-4 border-b-2 border-blue-500 text-blue-500">Account</p>
                    </a>
                    <a href="History">
                        <p class="text-black">History</p>
                    </a>
                </div>
        </div>

        <div class="flex flex-row px-20 my-20">
            <div class="w-1/3 px-4 text-2xl font-bold flex flex-col items-center mt-10">
                <h1 class="text-gray-500">Account Information</h1>
                <div class="w-50 h-50 bg-gray-300 rounded-full overflow-hidden mr-4 my-4">
                    <img src="https://media.licdn.com/dms/image/D4E03AQFBIVld2DIstQ/profile-displayphoto-shrink_200_200/0/1697211431823?e=2147483647&v=beta&t=r2PQyC2pM1n3zMol-W9rYvUoLtY6mTVp0g4XN4D50KQ" alt="User Profile" class="w-full h-full object-cover rounded-full">
                </div>
                <h1>User</h1>
            </div>

            <div class="w-2/3 flex flex-col flex-grow">
                <a href="" class="text-gray-500 underline text-gray-500 hover:underline hover:text-blue-500 ml-auto">Edit</a>
                <div class="my-4">
                    <p>Name</p>                    
                    <p class="bg-gray-300 text-gray-500 p-2 rounded">User</p>
                </div>
                <div class="my-4">
                    <p>Email</p>                    
                    <p class="bg-gray-300 text-gray-500 p-2 rounded">user@gmail.com</p>
                </div>
                <div class="my-4">
                    <p>Address</p>                    
                    <p class="bg-gray-300 text-gray-500 p-2 pb-20 rounded">Jalan Sisingamangaraja no.132, Surabaya</p>
                </div>
                <a href="" class="text-gray-500 underline text-gray-500 hover:underline hover:text-blue-500 ml-auto">Change Password</a>
            </div>
        </div>
        {{-- Content end --}}

        {{-- Footer --}}
        @include('component/footer')
        {{-- Footer end --}}
    </body>
</html>