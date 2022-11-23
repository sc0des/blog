<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Primary Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Writeups</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Script -->
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    </head>

    <body class="antialiased">
        <!-- Header -->
        <x-navigation-menu/>

        <!-- Hero -->
        <x-hero :title="$title"/>

        <div class="px-10 pt-20 py-4 dark:bg-gray-800 dark:text-gray-50"></div>

        <!--Main Slot-->
        <section class="dark:bg-gray-800 dark:text-gray-50">
            <div class="container  mx-auto dark:bg-gray-900">
                <div class="flex flex-col p-6 ">
                    <div class="pt-4">{{$slot}}</div>
                </div>
            </div>
        </section>

        <div class="px-10 py-20 dark:bg-gray-800 dark:text-gray-50"></div>

        <!-- Footer-->
        <x-footer/>
    </body>
</html>
