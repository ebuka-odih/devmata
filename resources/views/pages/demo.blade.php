<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

</head>
<body>

<header class="bg-white py-4 shadow">
    <nav class="max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6 lg:px-8">
        <!-- Logo -->
        <a href="#" class="flex items-center">
            <img src="path_to_logo.png" alt="Listee" class="mr-3 h-8">
            <span class="self-center text-lg font-semibold whitespace-nowrap dark:text-white">Listee</span>
        </a>
        <!-- Navigation Links -->
        <div class="flex items-center space-x-4">
            <a href="#" class="text-gray-900 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">Home</a>
            <!-- More navigation items -->
            <a href="#" class="text-gray-900 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">Blog</a>
        </div>
        <!-- Actions -->
        <div class="flex items-center space-x-4">
            <a href="#" class="text-gray-900 hover:text-red-600 px-3 py-2 rounded-md text-sm font-medium">Sign Up</a>
            <a href="#" class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Sign In</a>
        </div>
    </nav>
</header>



<div class="relative bg-cover bg-center py-24" style="background-image: url('https://ssl.cdn-redfin.com/photo/211/bigphoto/791/OLRS-2074791_2.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="container relative z-10 text-center text-white max-w-6xl mx-auto">


        <div class=" relative bg-off-white">
            <div class="flex">
                <!-- Left-aligned form with 25% width of the screen -->
                <div class="w-2/4 px-4 py-16" style="background: rgb(248, 236, 236);"> <!-- This sets the off-white background color -->
                    <div class="text-left">
                        <h2 class="text-2xl font-semibold text-gray-900 mb-3">Let us help you</h2>
                        <h1 class="text-5xl font-bold text-gray-900 mb-3">Find, Buy & Own Dreams</h1>
                        <p class="text-lg text-gray-600 mb-6">
                            Country's most loved and trusted classified ad listing website. Browse thousands of items near you.
                        </p>
                        <form class="space-y-4">
                            <div>
                                <label for="category" class="sr-only">Choose a category</label>
                                <select id="category" name="category" class="block w-full px-4 py-2 rounded-md border border-gray-300">
                                    <option>Choose Category</option>
                                    <!-- Add more options here -->
                                </select>
                            </div>
                            <div>
                                <label for="location" class="sr-only">Choose location</label>
                                <input id="location" name="location" type="text" placeholder="Choose Location" class="block w-full px-4 py-2 rounded-md border border-gray-300" required>
                            </div>
                            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-md">
                                Search
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Remaining section of the banner -->
                <div class="w-3/4">
                    <!-- Content for the rest of the banner -->
                    <!-- Add your content here -->
                </div>
            </div>
        </div>

    </div>

</div>

<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">We invest in the world’s potential</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Get started
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
            <a href="#" class="inline-flex justify-center items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800">
                Learn more
            </a>
        </div>
    </div>
</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>




</body>
</html>
