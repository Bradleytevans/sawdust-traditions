<!DOCTYPE html>
<html>

<head>
    <title>Sawdust Traditions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2a492774b7.js" crossorigin="anonymous"></script>
</head>

<body style="background-image: url({{asset('images/wood.jpg')}})" class="bg-fixed text-center font-serif font-semibold text-xl">
    {{ $slot }}
</body>

</html>
