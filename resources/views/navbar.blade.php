<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Tailwind CSS</title>
    <!-- Include Tailwind CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"></head>
<body>
<!-- Navbar -->
<nav class="bg-gray-800 py-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-white text-lg font-semibold">
            <img src="/public/images/thumbsup.jpg" class="h-8 w-auto" alt="Title"></a>
        <ul class="flex space-x-4">
            <li><a href="#" class="text-white hover:text-gray-300">home</a></li>
            <li><a href="#" class="text-white hover:text-gray-300">About</a></li>
            <li><a href="#" class="text-white hover:text-gray-300">Services</a></li>
            <li><a href="#" class="text-white hover:text-gray-300">Contact</a></li>
        </ul>
    </div>
</nav>
