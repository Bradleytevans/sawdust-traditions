<!DOCTYPE html>
<html>

<head>
    <title>Sawdust Traditions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link href="/dist/output.css" rel="stylesheet">
</head>

<body style="background-image: url({{asset('images/wood.jpg')}})" class="bg-fixed text-center font-serif font-semibold text-xl">
    {{ $slot }}
</body>

</html>
