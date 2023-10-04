<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>lah?</title>
</head>
<body>
    <div class="container mx-auto">
        <nav class="flex justify-between p-5 fixed bg-slate-200 w-full">
            <div class="logo">
                <h3>MagicNews</h3>
            </div>
            <ul class="flex gap-5">
                <li><a href="#">Home</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <hr>
        <div class="content flex justify-center mt-14">
            <div class="wrap grid grid-cols-1 gap-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2">
                @foreach ($news as $item)
                    <div class="card border mt-2  rounded-lg md:max-w-xs sm:max-w-xs max-w-md mx-5  shadow-lg">
                        <div class="img min-w-full mb-2 p-1">
                            <img class="rounded w-full" src={{ $item['image'] }} alt="">
                        </div>
                        <div class="text p-4">
                            <h3>{{ $item['title'] }}</h3>
                            <p class="text-xs mt-2 text-slate-700">{{ $item['date'] }}</p>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
</body>
</html>