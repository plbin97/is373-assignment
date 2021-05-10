
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="rwzc9gHolQoGXxs5PPzlJ6CJw1DN3dhma5YNMLsd">

    <title>{{$post->title}}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>
</head>
<body class="font-sans antialiased">

<div class="min-h-screen bg-gray-100">

    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$post->title}}
            </h2>
            <div style="margin-top: 1em">
                {{date('m - d - Y', strtotime($post->date))}}
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <main>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                {!! $post->body !!}
            </div>
        </div>
    </main>
</div>

</body>
</html>
