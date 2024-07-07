<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/20">
            <div>
                <a href="#">
                    <img src="https://fakeimg.pl/50x50/" alt="">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Restaurants</a>
                <a href="#">Categories</a>
            </div>

            <div>
                <a href="#">Login</a>
            </div>
        </nav>

        <div class="mx-auto max-w-5xl">
            {{ $slot }}
        </div>

    </div>
</body>
</html>