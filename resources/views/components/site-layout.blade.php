<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Primary Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Stylesheets -->
        <link href="css/styles.css" rel="stylesheet">

        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>

    </head>

    <body class="antialiased">
        <!-- Header -->
        <x-navigation-menu/>

        <!-- Hero -->
        <x-hero/>

        <div class="px-10 py-4 dark:bg-gray-800 dark:text-gray-50"></div>

        <!--Blogs Post-->
        <section class="dark:bg-gray-800 dark:text-gray-50">
            <div class="container grid grid-cols-12 mx-auto dark:bg-gray-900">
                <div class="bg-no-repeat bg-cover dark:bg-gray-700 col-span-full lg:col-span-4" style="background-image: url('https://source.unsplash.com/random/640x480'); background-position: center center; background-blend-mode: multiply; background-size: cover;"></div>
                <div class="flex flex-col p-6 col-span-full row-span-full lg:col-span-8 lg:p-10">
                    <div class="flex justify-start">
                        <span class="px-3 py-1 text-xs rounded-full dark:bg-violet-400 dark:text-gray-900">Label</span>
                        <span class="px-3 py-1 text-xs rounded-full dark:bg-violet-400 dark:text-gray-900">Label</span>
                    </div>
                    <div class="pt-4"></div>
                    <h1 class="text-3xl font-semibold">Lorem ipsum dolor sit.</h1>
                    <p class="flex-1 pt-2">{{$slot}}</p>
                    <a rel="noopener noreferrer" href="#" class="inline-flex items-center pt-2 pb-6 space-x-2 text-sm dark:text-violet-400">
                        <span>Read more</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4">
                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <div class="flex items-center justify-between pt-2">
                        <span class="text-sm dark:text-gray-400">Jun 1, 2020</span>
                        <div class="flex space-x-2">
                            <a rel="noopener noreferrer" href="#" class="flex items-center">
                                <img src="https://source.unsplash.com/50x50/?portrait" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full dark:bg-gray-500">
                                <span class="hover:underline dark:text-gray-400">Leroy Jenkins</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pages-->
            <div class="flex justify-center space-x-1 dark:text-gray-100 px-10 py-10 ">
                <span class="block">Page 1 of ..</span>
                <div class="space-x-1">
                    <button title="previous" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow">
                        <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>
                    <button title="next" type="button" class="inline-flex items-center justify-center w-8 h-8 py-0 border rounded-md shadow">
                        <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="w-4">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
                </div>
            </div>
        </section>

        <div class="px-10 py-20 dark:bg-gray-800 dark:text-gray-50"></div>       

        <!-- Footer-->
        <x-footer/>
    </body>
</html>
