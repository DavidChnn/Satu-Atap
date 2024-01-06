<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Satu Atap</title>
    </head>
    <body class="bg-gradient-to-r from-white to-sky-600">
        {{-- Navbar --}}
        @include('component/navbarGuest')
        {{-- Navbar end --}}

        {{-- Content --}}
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
        {{-- Content end --}}
    </body>
</html>