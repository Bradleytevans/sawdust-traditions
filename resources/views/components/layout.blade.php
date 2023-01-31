<!DOCTYPE html>
<html>

<head>
    <title>Sawdust Traditions</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <link href="/dist/output.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2a492774b7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body style="background-image: url({{ asset('images/wood.jpg') }})"
    class="bg-fixed text-center font-serif font-semibold text-xl">
    {{ $slot }}
</body>

</html>
