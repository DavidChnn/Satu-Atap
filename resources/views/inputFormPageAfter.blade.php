<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Satu Atap</title>
    </head>
    <body class="min-h-screen bg-gradient-to-b from-[#0077C0] to-[#003C60]">
        {{-- Navbar --}}
        @include('component/navbarLogged')
        {{-- Navbar end --}}

        {{-- Content --}}
        <div class="text-white text-center my-8">
            <h1 class="text-xl font-bold mb-4">e-KTP</h1>
        </div>
        <div class="bg-white p-8 mx-4 md:mx-16 lg:mx-24 rounded-xl mb-24">
            <h1 class="text-xl text-center font-bold mb-4">Upload Files</h1>

            <div id="file-input-container">
                <p class="text-lg px-12 ">Kartu Keluarga <span class="text-md text-red-400 italic">(Gambar kurang jelas)</span> </p>
                @include('component/form/errorForm')

                <p class="text-lg px-12 ">NPWP <span class="text-md text-red-400 italic">(File salah)</span> </p>
                @include('component/form/errorForm')

                <p class="text-lg px-12 ">SKCK</p>
                @include('component/form/successForm')

                <p class="text-lg px-12 ">Ijazah</p>
                @include('component/form/successForm')
            </div>

            <a href="afterSubmit">
                <div class="container py-6 px-10 mx-0 min-w-full flex flex-col items-center">
                    <button class="text-lg bg-[#0077C0] text-white hover:bg-gradient-to-r hover:from-[#0077C0] hover:to-[#373390] font-bold py-4 px-36 mt-3 rounded-2xl">Submit</button>
                </div>
            </a>
        </div>
        
        {{-- Content end --}}

        {{-- Footer --}}
        @include('component/footer')
        {{-- Footer end --}}
        <script>
            function handleFileInputChange(input) {
                console.log('File selected:', input.files[0]);
            }
    
            document.getElementById('file-input-container').addEventListener('click', function() {
                document.getElementById('file-input').click();
            });
        </script>
    </body>
</html>