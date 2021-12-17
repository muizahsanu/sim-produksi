<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT. Citra Sari</title>

    <link rel="stylesheet" href="./styles/index.css">

    {{-- ICON --}}
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    @include('partials.navbar')
    
    <main class="main">
        @include('partials.sidebar')
        @yield('container')
    </main>
</body>
</html>