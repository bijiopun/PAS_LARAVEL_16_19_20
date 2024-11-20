<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    <section class="bg-gray-900 text-white">
        <nav class="flex justify-between items-center px-8 py-4">
            <div class="logo">
                <img src="Asset/logomanuk.ai.png" class="h-10">
            </div>

            <ul class="flex space-x-6">
            <li><a href="{{ route ('login') }}" class="hover:text-yellow-500">Login</a></li>
                <li><a href="#Home" class="hover:text-yellow-500">Home</a></li>
                <li><a href="{{ route ('about') }}" class="hover:text-yellow-500">About</a></li>
                <li><a href="#packages" class="hover:text-yellow-500">Packages</a></li>
                <li><a href="#destination" class="hover:text-yellow-500">Destination</a></li>
                <li><a href="#feedback" class="hover:text-yellow-500">Review</a></li>
                <li><a href="#book" class="hover:text-yellow-500">Book</a></li>
            </ul>
        </nav>

        <div class="main flex flex-col items-center justify-center h-screen">
            <div class="heading text-center">
                <h1 class="text-5xl font-bold mb-4">TRAVEL<br>THE<span class="text-yellow-500">WORLD</span></h1>
            </div>

            <a href="#packages" class="bg-yellow-500 text-gray-900 font-semibold py-2 px-6 rounded-full hover:bg-yellow-600 transition">Explore Now...</a>
        </div>
    </section>

</body>
</html>