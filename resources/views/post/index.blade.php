<x-app-layout>
<x-slot name="header">
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    {{__('blog')__}}
</h2>
<x-slot>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0ed3cf">
    <meta name="msapplication-TileColor" content="#0ed3cf">
    <meta name="theme-color" content="#0ed3cf">

    
    <meta property="og:image" content="https://tailwindcomponents.com/storage/5939/conversions/temp89063-ogimage.jpg?v=2022-02-23 07:30:36" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <meta property="og:image:type" content="image/png" />

    <meta property="og:url" content="https://tailwindcomponents.com/component/blog-page" />
    <meta property="og:title" content="Blog Page by khatabwedaa | Pages" />
    <meta property="og:description" content="&#039;Simple blog page with Authors and Categories&#039;" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@TwComponents" />
    <meta name="twitter:title" content="Blog Page by khatabwedaa | Pages" />
    <meta name="twitter:description" content="&#039;Simple blog page with Authors and Categories&#039;" />
    <meta name="twitter:image" content="https://tailwindcomponents.com/storage/5939/conversions/temp89063-ogimage.jpg?v=2022-02-23 07:30:36" />

    <meta name="google-site-verification" content="D4BL2NNYf_eEOMneiD3A61KMM4QiL_qas4wZfm84BVY" />

    <title>Blog Page by khatabwedaa | Pages</title>
    <meta name="description" content="&#039;Simple blog page with Authors and Categories&#039;">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap">
    <link rel="stylesheet" href="/css/app.css?id=dac10a7f6fcce783afc0">
    
        
            <meta name="twitter:creator" content="@khatabwedaa" />
    
    <script>
        if (window.localStorage) {
            if (localStorage.getItem("darkMode") == "true") {
                document.documentElement.classList.add("dark");
            } else if (localStorage.getItem("darkMode") == "false") {
                document.documentElement.classList.remove("dark");
            }
        }
    </script>

    <script src="/js/app.js?id=98cf6ddf507aaa2361ec" defer></script>
</head>
<body>
    <div id="app" class="flex flex-col min-h-screen font-roboto dark:bg-gray-900">
        <header class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 lg:fixed lg:w-full lg:top-0 lg:left-0 lg:z-40">
            <div class="container px-4 py-5 mx-auto space-y-4 lg:space-y-0 lg:flex lg:items-center lg:justify-between lg:space-x-10">
                <div class="flex justify-between">
                    <a href="/" class="text-gray-800 dark:text-gray-200">
                        <div class="flex items-center">
    <svg class="h-7 w-7 -mt-2 flex-shrink-0" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 27"><path d="M22.487.658s5.03 13.072-1.822 22.171C16.476 28.39 9.84 27.26 5.484 25.68c1.513-3.391 3.441-6.067 5.784-8.03 1.176.623 3.186.792 6.03.51-2.535-.221-4.284-.654-5.246-1.3l.125.08c2.122-1.546 4.556-2.556 7.303-3.029-3.16-.285-6.026.315-8.598 1.804-.577-.742-1.157-1.748-1.74-3.018.07 1.534.339 2.734.809 3.6-2.64 1.797-4.953 4.58-6.94 8.351a7.583 7.583 0 01-.188-.088c-.802-.358-1.328-1.037-1.755-2.036C-1.9 13.366 4.645 8.273 11.123 7.989 23.046 7.465 22.487.658 22.487.658z" fill="#0ED3CF"/></svg>
    <p class="text-xl ml-2">tailwind<strong>components</strong></p>
</div>                    </a>

                    <div class="flex items-center space-x-2 lg:hidden">
                        <button @click="isOpen = !isOpen" class="p-1 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 focus:bg-gray-100 dark:focus:bg-gray-800 focus:outline-none">
                            <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                
                <transition
                    v-cloak
                    enter-active-class="transition duration-100 ease-out transform"
                    enter-class="scale-95 opacity-0"
                    enter-to-class="scale-100 opacity-100"
                    leave-active-class="transition duration-75 ease-in transform"
                    leave-class="scale-100 opacity-100"
                    leave-to-class="scale-95 opacity-0"
                >
                    <div v-show="isOpen" class="flex flex-col space-y-4 lg:hidden">
                        <div class="flex flex-col space-y-3 lg:space-y-0 lg:flex-row lg:space-x-6 xl:space-x-8 lg:items-center">
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800" href="/">Home</a>
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800 lg:hidden" href="/components">Components</a>
    <dropdown class="hidden lg:block">
        <button class="text-gray-500 dark:text-gray-200 hover:text-gray-800 flex items-center space-x-1 focus:outline-none">
            <span>Components</span>
            
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>

        <template v-slot:content>
            <div class="w-36">
                <a href="/components" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                    All Components
                </a>
                <a href="/awesome" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                    awesome
                </a>
                                    <a href="/components/alpinejs" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Alpinejs
                    </a>
                                    <a href="/components/buttons" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Buttons
                    </a>
                                    <a href="/components/cards" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Cards
                    </a>
                                    <a href="/components/dropdowns" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Dropdowns
                    </a>
                                    <a href="/components/forms" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Forms
                    </a>
                                    <a href="/components/inputs" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Inputs
                    </a>
                                    <a href="/components/logins" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Logins
                    </a>
                                    <a href="/components/modals" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Modals
                    </a>
                                    <a href="/components/navigations" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Navigations
                    </a>
                                    <a href="/components/pages" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Pages
                    </a>
                                    <a href="/components/selects" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Selects
                    </a>
                                    <a href="/components/tabs" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Tabs
                    </a>
                                    <a href="/components/tables" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Tables
                    </a>
                                    <a href="/components/widget" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Widget
                    </a>
                            </div>
        </template>
    </dropdown>
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800" href="/premium">Premium</a>
    
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800 lg:hidden" href="/cheatsheet" target="_blank">Cheatsheet</a>
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800 lg:hidden" href="/gradient-generator" target="_blank">Gradient Generator</a>
    <dropdown class="hidden lg:block">
        <button class="text-gray-500 dark:text-gray-200 hover:text-gray-800 flex items-center space-x-1 focus:outline-none">
            <span>Tools</span>
            
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>

        <template v-slot:content>
            <div class="w-40">
                <a target="_blank" href="/cheatsheet" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                    Cheatsheet
                </a>

                <a target="_blank" href="/gradient-generator" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                    Gradient Generator
                </a>
            </div>
        </template>
    </dropdown>

    </div>

<div class="flex flex-col space-y-4 lg:space-y-0 lg:flex-row lg:items-center lg:space-x-4">
    <dark-mode></dark-mode>

            <form action="/search" class="flex flex-wrap justify-between md:flex-row">
            <input type="search" name="query" class="w-full h-12 px-4 text-sm text-gray-700 bg-white border border-gray-300 rounded-lg lg:w-20 xl:transition-all xl:duration-300 xl:w-36 xl:focus:w-44 lg:h-10 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-teal-500 dark:focus:border-teal-500 focus:outline-none focus:ring focus:ring-primary dark:placeholder-gray-400 focus:ring-opacity-40" placeholder="Search" required>
        </form>
        
    <a href="/submit-component" class="flex items-center justify-center h-12 px-4 text-sm font-semibold text-center text-white rounded-md lg:h-10 bg-primary hover:bg-teal-300">
        Submit <span class="lg:hidden 2xl:inline">&nbsp;new component</span>
    </a>

            <a href="/login" class="flex items-center justify-center h-12 px-4 mt-2 text-sm text-center text-gray-600 transition-colors duration-200 transform border rounded-lg lg:h-10 dark:text-gray-300 dark:border-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
            Login
        </a>
    </div>                    </div>
                </transition>

                <div class="hidden lg:flex lg:flex-row lg:items-center lg:justify-between lg:flex-1 lg:space-x-2">
                    <div class="flex flex-col space-y-3 lg:space-y-0 lg:flex-row lg:space-x-6 xl:space-x-8 lg:items-center">
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800" href="/">Home</a>
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800 lg:hidden" href="/components">Components</a>
    <dropdown class="hidden lg:block">
        <button class="text-gray-500 dark:text-gray-200 hover:text-gray-800 flex items-center space-x-1 focus:outline-none">
            <span>Components</span>
            
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>

        <template v-slot:content>
            <div class="w-36">
                <a href="/components" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                    All Components
                </a>
                <a href="/awesome" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                    awesome
                </a>
                                    <a href="/components/alpinejs" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Alpinejs
                    </a>
                                    <a href="/components/buttons" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Buttons
                    </a>
                                    <a href="/components/cards" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Cards
                    </a>
                                    <a href="/components/dropdowns" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Dropdowns
                    </a>
                                    <a href="/components/forms" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Forms
                    </a>
                                    <a href="/components/inputs" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Inputs
                    </a>
                                    <a href="/components/logins" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Logins
                    </a>
                                    <a href="/components/modals" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Modals
                    </a>
                                    <a href="/components/navigations" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Navigations
                    </a>
                                    <a href="/components/pages" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Pages
                    </a>
                                    <a href="/components/selects" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Selects
                    </a>
                                    <a href="/components/tabs" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Tabs
                    </a>
                                    <a href="/components/tables" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Tables
                    </a>
                                    <a href="/components/widget" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                        Widget
                    </a>
                            </div>
        </template>
    </dropdown>
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800" href="/premium">Premium</a>
    
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800 lg:hidden" href="/cheatsheet" target="_blank">Cheatsheet</a>
    <a class="text-gray-500 dark:text-gray-200 hover:text-gray-800 lg:hidden" href="/gradient-generator" target="_blank">Gradient Generator</a>
    <dropdown class="hidden lg:block">
        <button class="text-gray-500 dark:text-gray-200 hover:text-gray-800 flex items-center space-x-1 focus:outline-none">
            <span>Tools</span>
            
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>

        <template v-slot:content>
            <div class="w-40">
                <a target="_blank" href="/cheatsheet" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                    Cheatsheet
                </a>

                <a target="_blank" href="/gradient-generator" class="block px-4 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:text-primary dark:hover:text-primary">
                    Gradient Generator
                </a>
            </div>
        </template>
    </dropdown>

    </div>

<div class="flex flex-col space-y-4 lg:space-y-0 lg:flex-row lg:items-center lg:space-x-4">
    <dark-mode></dark-mode>

            <form action="/search" class="flex flex-wrap justify-between md:flex-row">
            <input type="search" name="query" class="w-full h-12 px-4 text-sm text-gray-700 bg-white border border-gray-300 rounded-lg lg:w-20 xl:transition-all xl:duration-300 xl:w-36 xl:focus:w-44 lg:h-10 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-teal-500 dark:focus:border-teal-500 focus:outline-none focus:ring focus:ring-primary dark:placeholder-gray-400 focus:ring-opacity-40" placeholder="Search" required>
        </form>
        
    <a href="/submit-component" class="flex items-center justify-center h-12 px-4 text-sm font-semibold text-center text-white rounded-md lg:h-10 bg-primary hover:bg-teal-300">
        Submit <span class="lg:hidden 2xl:inline">&nbsp;new component</span>
    </a>

            <a href="/login" class="flex items-center justify-center h-12 px-4 mt-2 text-sm text-center text-gray-600 transition-colors duration-200 transform border rounded-lg lg:h-10 dark:text-gray-300 dark:border-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
            Login
        </a>
    </div>                </div>
            </div>
        </header>

        <main class="flex-1 lg:mt-20">
                        
                <section class="container px-4 mx-auto mt-8">
        <div class="flex flex-col space-y-4 lg:space-y-0 lg:flex-row lg:items-center lg:justify-between">
            <div class="flex flex-col flex-shrink-0 w-full lg:w-1/2">
                <span class="font-light text-gray-400">tailwindcss@3.0.18</span>

                <div class="flex flex-col mt-2 space-y-1 sm:flex-row sm:space-y-0 sm:items-center sm:space-x-4">
                    <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Blog Page</h3>

                                    </div>

                <p class="mt-2 text-gray-500 dark:text-gray-400 lg:max-w-xl description-link">Simple blog page with Authors and Categories</p>

                
                <twitter-link class="mt-4" text="Check out Tailwind CSS Blog Page By khatabwedaa" url="https://tailwindcomponents.com/component/blog-page"></twitter-link>

                <div class="mt-8 lg:flex lg:space-x-4">
                    <a href="/submit-component?fork=blog-page" class="items-center hidden px-4 py-2 space-x-3 text-gray-600 transition-colors duration-200 transform border rounded-lg lg:flex dark:text-gray-200 dark:border-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z" />
                            <path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
                        </svg>
                        <span>Fork</span>
                    </a>

                                            <form action="/component/blog-page/favorites" method="post">
                            <input type="hidden" name="_token" value="tVfOEng6KRCW6NJX45mHMPcqkREl7r6bHerypJUE">
                            <button type="submit" class="flex items-center justify-center w-full px-4 py-2 space-x-3 text-gray-600 transition-colors duration-200 transform border rounded-lg lg:w-auto dark:text-gray-200 dark:border-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                </svg>
                                <span>Favorite</span>
                            </button>
                        </form>
                    
                </div>
            </div>

            <div class="w-full lg:w-1/2 custom-slant"  style="height: 182px">
                <div class="relative hide-with-banner">
                    <a href="https://a.paddle.com/v2/click/37973/127422?link=3167" target="_blank" class="flex flex-col w-full h-full py-4">
                        <div class="z-10 flex-col items-start justify-center w-1/2 px-6 xl:px-10">
                            <img src="/images/ap/tails.svg" class="mb-2" />
                            <p class="mb-3 font-sans text-2xl font-black text-white">
                                TailwindCSS
                                <span class="block font-light">Page Creator</span>
                            </p>
                            <div>
                                <span class="h-8 px-4 py-2 font-sans text-xs font-bold text-blue-600 bg-white rounded-full">Learn more</span>
                            </div>
                        </div>
                        <img src="/images/ap/tails.png" class="absolute bottom-0 left-0 object-cover w-full h-full overflow-hidden rounded-md" />
                    </a>
                </div>
            </div>
        </div>

        
        <div class="flex flex-col mt-10" id="component">
            <component-preview :show-code-button="true" class="overflow-hidden rounded-lg" style="height: 80vh" css="https://tailwindcomponents.com/css/component.blog-page.css" :component="{&quot;id&quot;:829,&quot;name&quot;:&quot;Blog Page&quot;,&quot;tailwind_version&quot;:&quot;3.0.18&quot;,&quot;description&quot;:&quot;Simple blog page with Authors and Categories&quot;,&quot;body&quot;:&quot;&lt;div class=\&quot;overflow-x-hidden bg-gray-100\&quot;&gt;\n    &lt;nav class=\&quot;px-6 py-4 bg-white shadow\&quot;&gt;\n        &lt;div class=\&quot;container flex flex-col mx-auto md:flex-row md:items-center md:justify-between\&quot;&gt;\n            &lt;div class=\&quot;flex items-center justify-between\&quot;&gt;\n                &lt;div&gt;\n                    &lt;a href=\&quot;#\&quot; class=\&quot;text-xl font-bold text-gray-800 md:text-2xl\&quot;&gt;Brand&lt;\/a&gt;\n                &lt;\/div&gt;\n                &lt;div&gt;\n                    &lt;button type=\&quot;button\&quot; class=\&quot;block text-gray-800 hover:text-gray-600 focus:text-gray-600 focus:outline-none md:hidden\&quot;&gt;\n                        &lt;svg viewBox=\&quot;0 0 24 24\&quot; class=\&quot;w-6 h-6 fill-current\&quot;&gt;\n                            &lt;path d=\&quot;M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z\&quot;&gt;\n                            &lt;\/path&gt;\n                        &lt;\/svg&gt;\n                    &lt;\/button&gt;\n                &lt;\/div&gt;\n            &lt;\/div&gt;\n            &lt;div class=\&quot;flex-col hidden md:flex md:flex-row md:-mx-4\&quot;&gt;\n                &lt;a href=\&quot;#\&quot; class=\&quot;my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0\&quot;&gt;Home&lt;\/a&gt;\n                &lt;a href=\&quot;#\&quot; class=\&quot;my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0\&quot;&gt;Blog&lt;\/a&gt;\n                &lt;a href=\&quot;#\&quot; class=\&quot;my-1 text-gray-800 hover:text-blue-500 md:mx-4 md:my-0\&quot;&gt;About us&lt;\/a&gt;\n            &lt;\/div&gt;\n        &lt;\/div&gt;\n    &lt;\/nav&gt;\n\n    &lt;div class=\&quot;px-6 py-8\&quot;&gt;\n        &lt;div class=\&quot;container flex justify-between mx-auto\&quot;&gt;\n            &lt;div class=\&quot;w-full lg:w-8\/12\&quot;&gt;\n                &lt;div class=\&quot;flex items-center justify-between\&quot;&gt;\n                    &lt;h1 class=\&quot;text-xl font-bold text-gray-700 md:text-2xl\&quot;&gt;Post&lt;\/h1&gt;\n                    &lt;div&gt;\n                        &lt;select class=\&quot;w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50\&quot;&gt;\n                            &lt;option&gt;Latest&lt;\/option&gt;\n                            &lt;option&gt;Last Week&lt;\/option&gt;\n                        &lt;\/select&gt;\n                    &lt;\/div&gt;\n                &lt;\/div&gt;\n                &lt;div class=\&quot;mt-6\&quot;&gt;\n                    &lt;div class=\&quot;max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md\&quot;&gt;\n                        &lt;div class=\&quot;flex items-center justify-between\&quot;&gt;&lt;span class=\&quot;font-light text-gray-600\&quot;&gt;Jun 1,\n                                2020&lt;\/span&gt;&lt;a href=\&quot;#\&quot;\n                                class=\&quot;px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500\&quot;&gt;Laravel&lt;\/a&gt;\n                        &lt;\/div&gt;\n                        &lt;div class=\&quot;mt-2\&quot;&gt;&lt;a href=\&quot;#\&quot; class=\&quot;text-2xl font-bold text-gray-700 hover:underline\&quot;&gt;Build\n                                Your New Idea with Laravel Freamwork.&lt;\/a&gt;\n                            &lt;p class=\&quot;mt-2 text-gray-600\&quot;&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit.\n                                Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim\n                                reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!&lt;\/p&gt;\n                        &lt;\/div&gt;\n                        &lt;div class=\&quot;flex items-center justify-between mt-4\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                                class=\&quot;text-blue-500 hover:underline\&quot;&gt;Read more&lt;\/a&gt;\n                            &lt;div&gt;&lt;a href=\&quot;#\&quot; class=\&quot;flex items-center\&quot;&gt;&lt;img\n                                        src=\&quot;https:\/\/images.unsplash.com\/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=731&amp;amp;q=80\&quot;\n                                        alt=\&quot;avatar\&quot; class=\&quot;hidden object-cover w-10 h-10 mx-4 rounded-full sm:block\&quot;&gt;\n                                    &lt;h1 class=\&quot;font-bold text-gray-700 hover:underline\&quot;&gt;Alex John&lt;\/h1&gt;\n                                &lt;\/a&gt;&lt;\/div&gt;\n                        &lt;\/div&gt;\n                    &lt;\/div&gt;\n                &lt;\/div&gt;\n                &lt;div class=\&quot;mt-6\&quot;&gt;\n                    &lt;div class=\&quot;max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md\&quot;&gt;\n                        &lt;div class=\&quot;flex items-center justify-between\&quot;&gt;&lt;span class=\&quot;font-light text-gray-600\&quot;&gt;mar 4,\n                                2019&lt;\/span&gt;&lt;a href=\&quot;#\&quot;\n                                class=\&quot;px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500\&quot;&gt;Design&lt;\/a&gt;\n                        &lt;\/div&gt;\n                        &lt;div class=\&quot;mt-2\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                                class=\&quot;text-2xl font-bold text-gray-700 hover:underline\&quot;&gt;Accessibility tools for\n                                designers and developers&lt;\/a&gt;\n                            &lt;p class=\&quot;mt-2 text-gray-600\&quot;&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit.\n                                Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim\n                                reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!&lt;\/p&gt;\n                        &lt;\/div&gt;\n                        &lt;div class=\&quot;flex items-center justify-between mt-4\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                                class=\&quot;text-blue-500 hover:underline\&quot;&gt;Read more&lt;\/a&gt;\n                            &lt;div&gt;&lt;a href=\&quot;#\&quot; class=\&quot;flex items-center\&quot;&gt;&lt;img\n                                        src=\&quot;https:\/\/images.unsplash.com\/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=333&amp;amp;q=80\&quot;\n                                        alt=\&quot;avatar\&quot; class=\&quot;hidden object-cover w-10 h-10 mx-4 rounded-full sm:block\&quot;&gt;\n                                    &lt;h1 class=\&quot;font-bold text-gray-700 hover:underline\&quot;&gt;Jane Doe&lt;\/h1&gt;\n                                &lt;\/a&gt;&lt;\/div&gt;\n                        &lt;\/div&gt;\n                    &lt;\/div&gt;\n                &lt;\/div&gt;\n                &lt;div class=\&quot;mt-6\&quot;&gt;\n                    &lt;div class=\&quot;max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md\&quot;&gt;\n                        &lt;div class=\&quot;flex items-center justify-between\&quot;&gt;&lt;span class=\&quot;font-light text-gray-600\&quot;&gt;Feb 14,\n                                2019&lt;\/span&gt;&lt;a href=\&quot;#\&quot;\n                                class=\&quot;px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500\&quot;&gt;PHP&lt;\/a&gt;\n                        &lt;\/div&gt;\n                        &lt;div class=\&quot;mt-2\&quot;&gt;&lt;a href=\&quot;#\&quot; class=\&quot;text-2xl font-bold text-gray-700 hover:underline\&quot;&gt;PHP:\n                                Array to Map&lt;\/a&gt;\n                            &lt;p class=\&quot;mt-2 text-gray-600\&quot;&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit.\n                                Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim\n                                reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!&lt;\/p&gt;\n                        &lt;\/div&gt;\n                        &lt;div class=\&quot;flex items-center justify-between mt-4\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                                class=\&quot;text-blue-500 hover:underline\&quot;&gt;Read more&lt;\/a&gt;\n                            &lt;div&gt;&lt;a href=\&quot;#\&quot; class=\&quot;flex items-center\&quot;&gt;&lt;img\n                                        src=\&quot;https:\/\/images.unsplash.com\/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=281&amp;amp;q=80\&quot;\n                                        alt=\&quot;avatar\&quot; class=\&quot;hidden object-cover w-10 h-10 mx-4 rounded-full sm:block\&quot;&gt;\n                                    &lt;h1 class=\&quot;font-bold text-gray-700 hover:underline\&quot;&gt;Lisa Way&lt;\/h1&gt;\n                                &lt;\/a&gt;&lt;\/div&gt;\n                        &lt;\/div&gt;\n                    &lt;\/div&gt;\n                &lt;\/div&gt;\n                &lt;div class=\&quot;mt-6\&quot;&gt;\n                    &lt;div class=\&quot;max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md\&quot;&gt;\n                        &lt;div class=\&quot;flex items-center justify-between\&quot;&gt;&lt;span class=\&quot;font-light text-gray-600\&quot;&gt;Dec 23,\n                                2018&lt;\/span&gt;&lt;a href=\&quot;#\&quot;\n                                class=\&quot;px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500\&quot;&gt;Django&lt;\/a&gt;\n                        &lt;\/div&gt;\n                        &lt;div class=\&quot;mt-2\&quot;&gt;&lt;a href=\&quot;#\&quot; class=\&quot;text-2xl font-bold text-gray-700 hover:underline\&quot;&gt;Django\n                                Dashboard - Learn by Coding&lt;\/a&gt;\n                            &lt;p class=\&quot;mt-2 text-gray-600\&quot;&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit.\n                                Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim\n                                reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!&lt;\/p&gt;\n                        &lt;\/div&gt;\n                        &lt;div class=\&quot;flex items-center justify-between mt-4\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                                class=\&quot;text-blue-500 hover:underline\&quot;&gt;Read more&lt;\/a&gt;\n                            &lt;div&gt;&lt;a href=\&quot;#\&quot; class=\&quot;flex items-center\&quot;&gt;&lt;img\n                                        src=\&quot;https:\/\/images.unsplash.com\/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=735&amp;amp;q=80\&quot;\n                                        alt=\&quot;avatar\&quot; class=\&quot;hidden object-cover w-10 h-10 mx-4 rounded-full sm:block\&quot;&gt;\n                                    &lt;h1 class=\&quot;font-bold text-gray-700 hover:underline\&quot;&gt;Steve Matt&lt;\/h1&gt;\n                                &lt;\/a&gt;&lt;\/div&gt;\n                        &lt;\/div&gt;\n                    &lt;\/div&gt;\n                &lt;\/div&gt;\n                &lt;div class=\&quot;mt-6\&quot;&gt;\n                    &lt;div class=\&quot;max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md\&quot;&gt;\n                        &lt;div class=\&quot;flex items-center justify-between\&quot;&gt;&lt;span class=\&quot;font-light text-gray-600\&quot;&gt;Mar 10,\n                                2018&lt;\/span&gt;&lt;a href=\&quot;#\&quot;\n                                class=\&quot;px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500\&quot;&gt;Testing&lt;\/a&gt;\n                        &lt;\/div&gt;\n                        &lt;div class=\&quot;mt-2\&quot;&gt;&lt;a href=\&quot;#\&quot; class=\&quot;text-2xl font-bold text-gray-700 hover:underline\&quot;&gt;TDD\n                                Frist&lt;\/a&gt;\n                            &lt;p class=\&quot;mt-2 text-gray-600\&quot;&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit.\n                                Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim\n                                reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!&lt;\/p&gt;\n                        &lt;\/div&gt;\n                        &lt;div class=\&quot;flex items-center justify-between mt-4\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                                class=\&quot;text-blue-500 hover:underline\&quot;&gt;Read more&lt;\/a&gt;\n                            &lt;div&gt;&lt;a href=\&quot;#\&quot; class=\&quot;flex items-center\&quot;&gt;&lt;img\n                                        src=\&quot;https:\/\/images.unsplash.com\/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=373&amp;amp;q=80\&quot;\n                                        alt=\&quot;avatar\&quot; class=\&quot;hidden object-cover w-10 h-10 mx-4 rounded-full sm:block\&quot;&gt;\n                                    &lt;h1 class=\&quot;font-bold text-gray-700 hover:underline\&quot;&gt;Khatab Wedaa&lt;\/h1&gt;\n                                &lt;\/a&gt;&lt;\/div&gt;\n                        &lt;\/div&gt;\n                    &lt;\/div&gt;\n                &lt;\/div&gt;\n                &lt;div class=\&quot;mt-8\&quot;&gt;\n                    &lt;div class=\&quot;flex\&quot;&gt;\n                        &lt;a href=\&quot;#\&quot; class=\&quot;px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed\&quot;&gt;\n                            previous\n                        &lt;\/a&gt;\n                    \n                        &lt;a href=\&quot;#\&quot; class=\&quot;px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white\&quot;&gt;\n                            1\n                        &lt;\/a&gt;\n                    \n                        &lt;a href=\&quot;#\&quot; class=\&quot;px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white\&quot;&gt;\n                            2\n                        &lt;\/a&gt;\n                    \n                        &lt;a href=\&quot;#\&quot; class=\&quot;px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white\&quot;&gt;\n                            3\n                        &lt;\/a&gt;\n                    \n                        &lt;a href=\&quot;#\&quot; class=\&quot;px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white\&quot;&gt;\n                            Next\n                        &lt;\/a&gt;\n                    &lt;\/div&gt;\n                &lt;\/div&gt;\n            &lt;\/div&gt;\n            &lt;div class=\&quot;hidden w-4\/12 -mx-8 lg:block\&quot;&gt;\n                &lt;div class=\&quot;px-8\&quot;&gt;\n                    &lt;h1 class=\&quot;mb-4 text-xl font-bold text-gray-700\&quot;&gt;Authors&lt;\/h1&gt;\n                    &lt;div class=\&quot;flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md\&quot;&gt;\n                        &lt;ul class=\&quot;-mx-4\&quot;&gt;\n                            &lt;li class=\&quot;flex items-center\&quot;&gt;&lt;img\n                                    src=\&quot;https:\/\/images.unsplash.com\/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=731&amp;amp;q=80\&quot;\n                                    alt=\&quot;avatar\&quot; class=\&quot;object-cover w-10 h-10 mx-4 rounded-full\&quot;&gt;\n                                &lt;p&gt;&lt;a href=\&quot;#\&quot; class=\&quot;mx-1 font-bold text-gray-700 hover:underline\&quot;&gt;Alex John&lt;\/a&gt;&lt;span\n                                        class=\&quot;text-sm font-light text-gray-700\&quot;&gt;Created 23 Posts&lt;\/span&gt;&lt;\/p&gt;\n                            &lt;\/li&gt;\n                            &lt;li class=\&quot;flex items-center mt-6\&quot;&gt;&lt;img\n                                    src=\&quot;https:\/\/images.unsplash.com\/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=333&amp;amp;q=80\&quot;\n                                    alt=\&quot;avatar\&quot; class=\&quot;object-cover w-10 h-10 mx-4 rounded-full\&quot;&gt;\n                                &lt;p&gt;&lt;a href=\&quot;#\&quot; class=\&quot;mx-1 font-bold text-gray-700 hover:underline\&quot;&gt;Jane Doe&lt;\/a&gt;&lt;span\n                                        class=\&quot;text-sm font-light text-gray-700\&quot;&gt;Created 52 Posts&lt;\/span&gt;&lt;\/p&gt;\n                            &lt;\/li&gt;\n                            &lt;li class=\&quot;flex items-center mt-6\&quot;&gt;&lt;img\n                                    src=\&quot;https:\/\/images.unsplash.com\/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=281&amp;amp;q=80\&quot;\n                                    alt=\&quot;avatar\&quot; class=\&quot;object-cover w-10 h-10 mx-4 rounded-full\&quot;&gt;\n                                &lt;p&gt;&lt;a href=\&quot;#\&quot; class=\&quot;mx-1 font-bold text-gray-700 hover:underline\&quot;&gt;Lisa Way&lt;\/a&gt;&lt;span\n                                        class=\&quot;text-sm font-light text-gray-700\&quot;&gt;Created 73 Posts&lt;\/span&gt;&lt;\/p&gt;\n                            &lt;\/li&gt;\n                            &lt;li class=\&quot;flex items-center mt-6\&quot;&gt;&lt;img\n                                    src=\&quot;https:\/\/images.unsplash.com\/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=735&amp;amp;q=80\&quot;\n                                    alt=\&quot;avatar\&quot; class=\&quot;object-cover w-10 h-10 mx-4 rounded-full\&quot;&gt;\n                                &lt;p&gt;&lt;a href=\&quot;#\&quot; class=\&quot;mx-1 font-bold text-gray-700 hover:underline\&quot;&gt;Steve Matt&lt;\/a&gt;&lt;span\n                                        class=\&quot;text-sm font-light text-gray-700\&quot;&gt;Created 245 Posts&lt;\/span&gt;&lt;\/p&gt;\n                            &lt;\/li&gt;\n                            &lt;li class=\&quot;flex items-center mt-6\&quot;&gt;&lt;img\n                                    src=\&quot;https:\/\/images.unsplash.com\/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=373&amp;amp;q=80\&quot;\n                                    alt=\&quot;avatar\&quot; class=\&quot;object-cover w-10 h-10 mx-4 rounded-full\&quot;&gt;\n                                &lt;p&gt;&lt;a href=\&quot;#\&quot; class=\&quot;mx-1 font-bold text-gray-700 hover:underline\&quot;&gt;Khatab\n                                        Wedaa&lt;\/a&gt;&lt;span class=\&quot;text-sm font-light text-gray-700\&quot;&gt;Created 332 Posts&lt;\/span&gt;\n                                &lt;\/p&gt;\n                            &lt;\/li&gt;\n                        &lt;\/ul&gt;\n                    &lt;\/div&gt;\n                &lt;\/div&gt;\n                &lt;div class=\&quot;px-8 mt-10\&quot;&gt;\n                    &lt;h1 class=\&quot;mb-4 text-xl font-bold text-gray-700\&quot;&gt;Categories&lt;\/h1&gt;\n                    &lt;div class=\&quot;flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md\&quot;&gt;\n                        &lt;ul&gt;\n                            &lt;li&gt;&lt;a href=\&quot;#\&quot; class=\&quot;mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline\&quot;&gt;-\n                                    AWS&lt;\/a&gt;&lt;\/li&gt;\n                            &lt;li class=\&quot;mt-2\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                                    class=\&quot;mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline\&quot;&gt;-\n                                    Laravel&lt;\/a&gt;&lt;\/li&gt;\n                            &lt;li class=\&quot;mt-2\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                                    class=\&quot;mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline\&quot;&gt;- Vue&lt;\/a&gt;\n                            &lt;\/li&gt;\n                            &lt;li class=\&quot;mt-2\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                                    class=\&quot;mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline\&quot;&gt;-\n                                    Design&lt;\/a&gt;&lt;\/li&gt;\n                            &lt;li class=\&quot;flex items-center mt-2\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                                    class=\&quot;mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline\&quot;&gt;-\n                                    Django&lt;\/a&gt;&lt;\/li&gt;\n                            &lt;li class=\&quot;flex items-center mt-2\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                                    class=\&quot;mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline\&quot;&gt;- PHP&lt;\/a&gt;\n                            &lt;\/li&gt;\n                        &lt;\/ul&gt;\n                    &lt;\/div&gt;\n                &lt;\/div&gt;\n                &lt;div class=\&quot;px-8 mt-10\&quot;&gt;\n                    &lt;h1 class=\&quot;mb-4 text-xl font-bold text-gray-700\&quot;&gt;Recent Post&lt;\/h1&gt;\n                    &lt;div class=\&quot;flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md\&quot;&gt;\n                        &lt;div class=\&quot;flex items-center justify-center\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                                class=\&quot;px-2 py-1 text-sm text-green-100 bg-gray-600 rounded hover:bg-gray-500\&quot;&gt;Laravel&lt;\/a&gt;\n                        &lt;\/div&gt;\n                        &lt;div class=\&quot;mt-4\&quot;&gt;&lt;a href=\&quot;#\&quot; class=\&quot;text-lg font-medium text-gray-700 hover:underline\&quot;&gt;Build\n                                Your New Idea with Laravel Freamwork.&lt;\/a&gt;&lt;\/div&gt;\n                        &lt;div class=\&quot;flex items-center justify-between mt-4\&quot;&gt;\n                            &lt;div class=\&quot;flex items-center\&quot;&gt;&lt;img\n                                    src=\&quot;https:\/\/images.unsplash.com\/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;amp;auto=format&amp;amp;fit=crop&amp;amp;w=731&amp;amp;q=80\&quot;\n                                    alt=\&quot;avatar\&quot; class=\&quot;object-cover w-8 h-8 rounded-full\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                                    class=\&quot;mx-3 text-sm text-gray-700 hover:underline\&quot;&gt;Alex John&lt;\/a&gt;&lt;\/div&gt;&lt;span\n                                class=\&quot;text-sm font-light text-gray-600\&quot;&gt;Jun 1, 2020&lt;\/span&gt;\n                        &lt;\/div&gt;\n                    &lt;\/div&gt;\n                &lt;\/div&gt;\n            &lt;\/div&gt;\n        &lt;\/div&gt;\n    &lt;\/div&gt;\n    &lt;footer class=\&quot;px-6 py-2 text-gray-100 bg-gray-800\&quot;&gt;\n        &lt;div class=\&quot;container flex flex-col items-center justify-between mx-auto md:flex-row\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                class=\&quot;text-2xl font-bold\&quot;&gt;Brand&lt;\/a&gt;\n            &lt;p class=\&quot;mt-2 md:mt-0\&quot;&gt;All rights reserved 2020.&lt;\/p&gt;\n            &lt;div class=\&quot;flex mt-4 mb-2 -mx-2 md:mt-0 md:mb-0\&quot;&gt;&lt;a href=\&quot;#\&quot;\n                    class=\&quot;mx-2 text-gray-100 hover:text-gray-400\&quot;&gt;&lt;svg viewBox=\&quot;0 0 512 512\&quot;\n                        class=\&quot;w-4 h-4 fill-current\&quot;&gt;\n                    &lt;path\n                        d=\&quot;M444.17,32H70.28C49.85,32,32,46.7,32,66.89V441.61C32,461.91,49.85,480,70.28,480H444.06C464.6,480,480,461.79,480,441.61V66.89C480.12,46.7,464.6,32,444.17,32ZM170.87,405.43H106.69V205.88h64.18ZM141,175.54h-.46c-20.54,0-33.84-15.29-33.84-34.43,0-19.49,13.65-34.42,34.65-34.42s33.85,14.82,34.31,34.42C175.65,160.25,162.35,175.54,141,175.54ZM405.43,405.43H341.25V296.32c0-26.14-9.34-44-32.56-44-17.74,0-28.24,12-32.91,23.69-1.75,4.2-2.22,9.92-2.22,15.76V405.43H209.38V205.88h64.18v27.77c9.34-13.3,23.93-32.44,57.88-32.44,42.13,0,74,27.77,74,87.64Z\&quot;&gt;\n                    &lt;\/path&gt;\n                &lt;\/svg&gt;&lt;\/a&gt;&lt;a href=\&quot;#\&quot; class=\&quot;mx-2 text-gray-100 hover:text-gray-400\&quot;&gt;&lt;svg viewBox=\&quot;0 0 512 512\&quot;\n                    class=\&quot;w-4 h-4 fill-current\&quot;&gt;\n                    &lt;path\n                        d=\&quot;M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z\&quot;&gt;\n                    &lt;\/path&gt;\n                &lt;\/svg&gt;&lt;\/a&gt;&lt;a href=\&quot;#\&quot; class=\&quot;mx-2 text-gray-100 hover:text-gray-400\&quot;&gt;&lt;svg viewBox=\&quot;0 0 512 512\&quot;\n                    class=\&quot;w-4 h-4 fill-current\&quot;&gt;\n                    &lt;path\n                        d=\&quot;M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z\&quot;&gt;\n                    &lt;\/path&gt;\n                &lt;\/svg&gt;&lt;\/a&gt;\n            &lt;\/div&gt;\n        &lt;\/div&gt;\n    &lt;\/footer&gt;\n&lt;\/div&gt;&quot;,&quot;author_type&quot;:&quot;App\\User&quot;,&quot;author_id&quot;:368,&quot;fork_id&quot;:null,&quot;votes&quot;:29,&quot;score&quot;:&quot;4.7&quot;,&quot;visits&quot;:22540,&quot;popularity&quot;:12286,&quot;slug&quot;:&quot;blog-page&quot;,&quot;approved&quot;:1,&quot;created_at&quot;:&quot;2020-12-25T14:17:46.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-02-23T07:30:36.000000Z&quot;,&quot;downloads&quot;:1163,&quot;code_views&quot;:6868,&quot;center&quot;:false,&quot;notified&quot;:0,&quot;premium&quot;:1,&quot;tailwind_config&quot;:&quot;module.exports = {\n    plugins: [require(&#039;@tailwindcss\/forms&#039;),]\n};\n&quot;,&quot;type&quot;:&quot;component&quot;,&quot;css&quot;:&quot;https:\/\/tailwindcomponents.com\/css\/component.blog-page.css&quot;,&quot;should_tweet&quot;:1,&quot;favoritesCount&quot;:40,&quot;media&quot;:[{&quot;id&quot;:5939,&quot;model_type&quot;:&quot;App\\Component&quot;,&quot;model_id&quot;:829,&quot;collection_name&quot;:&quot;preview&quot;,&quot;name&quot;:&quot;temp89063&quot;,&quot;file_name&quot;:&quot;temp89063.png&quot;,&quot;mime_type&quot;:&quot;image\/png&quot;,&quot;disk&quot;:&quot;public&quot;,&quot;size&quot;:200190,&quot;manipulations&quot;:[],&quot;custom_properties&quot;:[],&quot;responsive_images&quot;:{&quot;media_library_original&quot;:{&quot;urls&quot;:[&quot;temp89063___media_library_original_1280_957.png&quot;,&quot;temp89063___media_library_original_1070_799.png&quot;,&quot;temp89063___media_library_original_896_669.png&quot;,&quot;temp89063___media_library_original_749_559.png&quot;,&quot;temp89063___media_library_original_627_468.png&quot;,&quot;temp89063___media_library_original_524_391.png&quot;,&quot;temp89063___media_library_original_439_328.png&quot;,&quot;temp89063___media_library_original_367_274.png&quot;,&quot;temp89063___media_library_original_307_229.png&quot;],&quot;base64svg&quot;:&quot;data:image\/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgMTI4MCA5NTciPgoJPGltYWdlIHdpZHRoPSIxMjgwIiBoZWlnaHQ9Ijk1NyIgeGxpbms6aHJlZj0iZGF0YTppbWFnZS9qcGVnO2Jhc2U2NCwvOWovNEFBUVNrWkpSZ0FCQVFFQVlBQmdBQUQvL2dBN1ExSkZRVlJQVWpvZ1oyUXRhbkJsWnlCMk1TNHdJQ2gxYzJsdVp5QkpTa2NnU2xCRlJ5QjJPREFwTENCeGRXRnNhWFI1SUQwZ09UQUsvOXNBUXdBREFnSURBZ0lEQXdNREJBTURCQVVJQlFVRUJBVUtCd2NHQ0F3S0RBd0xDZ3NMRFE0U0VBME9FUTRMQ3hBV0VCRVRGQlVWRlF3UEZ4Z1dGQmdTRkJVVS85c0FRd0VEQkFRRkJBVUpCUVVKRkEwTERSUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVLzhBQUVRZ0FGd0FmQXdFUkFBSVJBUU1SQWYvRUFCOEFBQUVGQVFFQkFRRUJBQUFBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUUFBSUJBd01DQkFNRkJRUUVBQUFCZlFFQ0F3QUVFUVVTSVRGQkJoTlJZUWNpY1JReWdaR2hDQ05Dc2NFVlV0SHdKRE5pY29JSkNoWVhHQmthSlNZbktDa3FORFUyTnpnNU9rTkVSVVpIU0VsS1UxUlZWbGRZV1ZwalpHVm1aMmhwYW5OMGRYWjNlSGw2ZzRTRmhvZUlpWXFTazVTVmxwZVltWnFpbzZTbHBxZW9xYXF5czdTMXRyZTR1YnJDdzhURnhzZkl5Y3JTMDlUVjF0ZlkyZHJoNHVQazVlYm42T25xOGZMejlQWDI5L2o1K3YvRUFCOEJBQU1CQVFFQkFRRUJBUUVBQUFBQUFBQUJBZ01FQlFZSENBa0tDLy9FQUxVUkFBSUJBZ1FFQXdRSEJRUUVBQUVDZHdBQkFnTVJCQVVoTVFZU1FWRUhZWEVUSWpLQkNCUkNrYUd4d1Frak0xTHdGV0p5MFFvV0pEVGhKZkVYR0JrYUppY29LU28xTmpjNE9UcERSRVZHUjBoSlNsTlVWVlpYV0ZsYVkyUmxabWRvYVdwemRIVjJkM2g1ZW9LRGhJV0doNGlKaXBLVGxKV1dsNWlabXFLanBLV21wNmlwcXJLenRMVzJ0N2k1dXNMRHhNWEd4OGpKeXRMVDFOWFcxOWpaMnVMajVPWG01K2pwNnZMejlQWDI5L2o1K3YvYUFBd0RBUUFDRVFNUkFEOEEvU3FDWnJRYlFwSXFpU2I3YzVIM1RSWUN0TmZUQkNlMUlhTE5veG5qQlBXZ0NOcFpGZkFqeUtZZ2FTVm96Kzd3S0FLbmtTUEVRVHhtaXc5alN0TFo0b1ZwQVJCNVJKeGpGVUl0R1FpRXNRUGVvR3RUQzFuVWY3UDA2YTZRWjJET0s2S0VQYXpVU0tqNUZjNG5SdmpGTGYzRHdlUmpabXZvcW1VcUVGSzU1c2NZNU8xai85az0iPgoJPC9pbWFnZT4KPC9zdmc+&quot;}},&quot;order_column&quot;:5825,&quot;created_at&quot;:&quot;2022-01-25T13:28:19.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-01-25T13:28:21.000000Z&quot;,&quot;conversions_disk&quot;:&quot;public&quot;,&quot;uuid&quot;:&quot;86d4352b-482f-406c-8a59-7751ddba82b3&quot;,&quot;generated_conversions&quot;:{&quot;thumb&quot;:true,&quot;ogimage&quot;:true},&quot;original_url&quot;:&quot;https:\/\/tailwindcomponents.com\/storage\/5939\/temp89063.png&quot;,&quot;preview_url&quot;:&quot;&quot;}],&quot;author&quot;:{&quot;id&quot;:368,&quot;name&quot;:&quot;khatabwedaa&quot;,&quot;slug&quot;:&quot;khatabwedaa&quot;,&quot;bio&quot;:&quot;Web designer &amp; developer \ud83e\udd19 with art https:\/\/merakiui.com https:\/\/tailwindcomponents.com.&quot;,&quot;avatar&quot;:&quot;\/storage\/avatars\/SD7Vpu7J4gebI9ijAacRX4wPGI2omR3a6UGaLm2F.jpg&quot;,&quot;header&quot;:&quot;\/storage\/headers\/lZJnENTl4gyk3h0P40WkPCHIDZrS4ccg33xP89VT.jpg&quot;,&quot;created_at&quot;:&quot;2020-02-15T10:59:29.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-01-20T20:32:48.000000Z&quot;},&quot;tags&quot;:[{&quot;id&quot;:7,&quot;name&quot;:{&quot;en&quot;:&quot;Pages&quot;},&quot;slug&quot;:{&quot;en&quot;:&quot;pages&quot;},&quot;type&quot;:null,&quot;order_column&quot;:10,&quot;created_at&quot;:&quot;2019-07-04T08:20:17.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-06-02T16:51:32.000000Z&quot;,&quot;pivot&quot;:{&quot;taggable_id&quot;:829,&quot;tag_id&quot;:7,&quot;taggable_type&quot;:&quot;App\\Component&quot;}}],&quot;fork&quot;:null,&quot;favorites&quot;:[{&quot;id&quot;:368,&quot;name&quot;:&quot;khatabwedaa&quot;,&quot;slug&quot;:&quot;khatabwedaa&quot;,&quot;bio&quot;:&quot;Web designer &amp; developer \ud83e\udd19 with art https:\/\/merakiui.com https:\/\/tailwindcomponents.com.&quot;,&quot;avatar&quot;:&quot;\/storage\/avatars\/SD7Vpu7J4gebI9ijAacRX4wPGI2omR3a6UGaLm2F.jpg&quot;,&quot;header&quot;:&quot;\/storage\/headers\/lZJnENTl4gyk3h0P40WkPCHIDZrS4ccg33xP89VT.jpg&quot;,&quot;created_at&quot;:&quot;2020-02-15T10:59:29.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-01-20T20:32:48.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:368}},{&quot;id&quot;:3604,&quot;name&quot;:&quot;chrisparks91&quot;,&quot;slug&quot;:&quot;chrisparks91&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/pbs.twimg.com\/profile_images\/1315772210536222721\/rKCSH-Rl_normal.jpg&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-05-28T16:24:05.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-28T16:24:05.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:3604}},{&quot;id&quot;:3752,&quot;name&quot;:&quot;pitipatdop&quot;,&quot;slug&quot;:&quot;pitipatdop&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/1094681?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-06-06T10:41:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-06-06T10:41:10.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:3752}},{&quot;id&quot;:3845,&quot;name&quot;:&quot;parkdk&quot;,&quot;slug&quot;:&quot;parkdk&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/29618281?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-06-13T07:56:30.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-06-13T07:56:30.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:3845}},{&quot;id&quot;:3860,&quot;name&quot;:&quot;BlackBarba&quot;,&quot;slug&quot;:&quot;blackbarba&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/5497993?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-06-14T02:11:27.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-06-14T02:11:27.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:3860}},{&quot;id&quot;:3875,&quot;name&quot;:&quot;Rodrigo Costa&quoquot;,&quot;slug&quot;:&quot;rodrigo-costa&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/www.gravatar.com\/avatar\/65e74e5850e4f7ef5f7f7d55e4a0a23a&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-06-14T19:19:15.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-06-14T19:19:15.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:3875}},{&quot;id&quot;:3924,&quot;name&quot;:&quot;mizumizuriced&quot;,&quot;slug&quot;:&quot;mizumizuriced&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;\/storage\/avatars\/RXkz2hP4YDW31j93XUNVQ8HUwTEOGhc3SkIXiJeb.jpg&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-06-18T13:42:01.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-06-23T11:42:59.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:3924}},{&quot;id&quot;:3038,&quot;name&quot;:&quot;lohnsonok&quot;,&quot;slug&quot;:&quot;lohnsonok&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/60504466?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-04-11T20:40:20.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-04-11T20:40:20.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:3038}},{&quot;id&quot;:4077,&quot;name&quot;:&quot;bouhmouch&quot;,&quot;slug&quot;:&quot;bouhmouch&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/www.gravatar.com\/avatar\/cdbb068af8493c8e1f5fc0569da2a157&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-06-30T14:24:12.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-06-30T14:24:12.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:4077}},{&quot;id&quot;:4087,&quot;name&quot;:&quot;sinovic&quot;,&quot;slug&quot;:&quot;sinovic&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/22367751?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-07-01T09:44:32.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-07-01T09:44:32.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:4087}},{&quot;id&quot;:4205,&quot;name&quot;:&quot;IceBay&quot;,&quot;slug&quot;:&quot;icebay&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/20467578?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-07-12T07:13:56.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-07-12T07:13:56.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:4205}},{&quot;id&quot;:4037,&quot;name&quot;:&quot;puper&quot;,&quot;slug&quot;:&quot;puper&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/5547922?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-06-27T09:39:33.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-06-27T09:39:33.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:4037}},{&quot;id&quot;:4684,&quot;name&quot;:&quot;mariya&quot;,&quot;slug&quot;:&quot;mariya&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;\/storage\/avatars\/T45SHJefewVoWFasyrBJlmGxNknV2olVLRr5bJKV.jpg&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-08-19T14:28:06.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-19T16:30:18.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:4684}},{&quot;id&quot;:4761,&quot;name&quot;:&quot;mohammadsaju&quot;,&quot;slug&quot;:&quot;mohammadsaju&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/75413106?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-08-26T16:52:25.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-26T16:52:25.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:4761}},{&quot;id&quot;:4600,&quot;name&quot;:&quot;Masayo&quot;,&quot;slug&quot;:&quot;masayo&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/www.gravatar.com\/avatar\/edb21dd232317edfacf17e58043e67b1&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-08-13T13:34:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-13T13:34:10.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:4600}},{&quot;id&quot;:3866,&quot;name&quot;:&quot;devdeno&quot;,&quot;slug&quot;:&quot;devdeno&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/51911254?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-06-14T09:54:38.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-06-14T09:54:38.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:3866}},{&quot;id&quot;:4257,&quot;name&quot;:&quot;nkendrick101&quot;,&quot;slug&quot;:&quot;nkendrick101&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/40567184?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-07-15T17:31:18.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-07-15T17:31:18.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:4257}},{&quot;id&quot;:3558,&quot;name&quot;:&quot;whoisthisstud&quot;,&quot;slug&quot;:&quot;whoisthisstud&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/44807533?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-05-25T15:23:04.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-05-25T15:23:04.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:3558}},{&quot;id&quot;:5192,&quot;name&quot;:&quot;CalvinMagezi&quot;,&quot;slug&quot;:&quot;calvinmagezi&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/30309553?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-09-27T06:33:09.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-09-27T06:33:09.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:5192}},{&quot;id&quot;:5364,&quot;name&quot;:&quot;onyedikachi-david&quot;,&quot;slug&quot;:&quot;onyedikachi-david&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/51977119?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-10-11T09:12:52.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-11T09:12:52.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:5364}},{&quot;id&quot;:5368,&quot;name&quot;:&quot;jinmayamashita&quot;,&quot;slug&quot;:&quot;jinmayamashita&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/9401060?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-10-11T13:25:49.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-11T13:25:49.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:5368}},{&quot;id&quot;:3241,&quot;name&quot;:&quot;moneya&quot;,&quot;slug&quot;:&quot;moneya&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/7353773?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-04-28T15:37:06.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-04-28T15:37:06.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:3241}},{&quot;id&quot;:5605,&quot;name&quot;:&quot;md-marop-hossain&quot;,&quot;slug&quot;:&quot;md-marop-hossain&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/81180354?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-10-28T15:41:01.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-28T15:41:01.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:5605}},{&quot;id&quot;:5610,&quot;name&quot;:&quot;eekrain&quot;,&quot;slug&quot;:&quot;eekrain&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/65037854?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-10-29T06:47:01.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-29T06:47:01.000000Z&quot;,&quot;pivot&ququot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:5610}},{&quot;id&quot;:5611,&quot;name&quot;:&quot;Fahid Javid&quot;,&quot;slug&quot;:&quot;fahid-javid&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/www.gravatar.com\/avatar\/19051598a5b322a46f6c87bce41233f3&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-10-29T08:29:27.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-29T08:29:27.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:5611}},{&quot;id&quot;:5692,&quot;name&quot;:&quot;Asiqur Rahman&quot;,&quot;slug&quot;:&quot;asiqur-rahman&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/www.gravatar.com\/avatar\/c942477a8040bd7453333ca8d18ef24b&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-11-05T12:58:10.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-11-05T12:58:10.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:5692}},{&quot;id&quot;:5719,&quot;name&quot;:&quot;fininhors&quot;,&quot;slug&quot;:&quot;fininhors&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/6165243?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-11-08T13:40:46.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-11-08T13:40:46.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:5719}},{&quot;id&quot;:5815,&quot;name&quot;:&quot;brahimbim&quot;,&quot;slug&quot;:&quot;brahimbim&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/24649160?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-11-17T06:23:59.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-11-17T06:23:59.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:5815}},{&quot;id&quot;:5149,&quot;name&quot;:&quot;Julian Crosson-Hill&quot;,&quot;slug&quot;:&quot;julian-crosson-hill&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;\/storage\/avatars\/D1CNSQBZnNpgBICD2VAraFilMGGhkfjIxAUxzM2q.png&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-09-22T18:15:04.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-11-24T20:09:04.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:5149}},{&quot;id&quot;:5491,&quot;name&quot;:&quot;starkbaum&quot;,&quot;slug&quot;:&quot;starkbaum&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/5096854?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-10-19T17:30:00.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-19T17:30:00.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:5491}},{&quot;id&quot;:5927,&quot;name&quot;:&quot;kardespro&quot;,&quot;slug&quot;:&quot;kardespro&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/61694826?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-11-26T11:28:33.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-11-26T11:28:33.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:5927}},{&quot;id&quot;:319,&quot;name&quot;:&quot;BbsonLin&quot;,&quot;slug&quot;:&quot;bbsonlin&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars0.githubusercontent.com\/u\/18156421?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2020-01-18T01:50:51.000000Z&quot;,&quot;updated_at&quot;:&quot;2020-01-18T01:50:51.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:319}},{&quot;id&quot;:5251,&quot;name&quot;:&quot;saidnahum&quot;,&quot;slug&quot;:&quot;saidnahum&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/70162272?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-10-01T03:59:37.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-01T03:59:37.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:5251}},{&quot;id&quot;:6396,&quot;name&quot;:&quot;Yannick-PAKOU&quot;,&quot;slug&quotquot;:&quot;yannick-pakou&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/61798464?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2022-01-05T12:05:34.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-01-05T12:05:34.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:6396}},{&quot;id&quot;:3007,&quot;name&quot;:&quot;Juanjosexdd&quot;,&quot;slug&quot;:&quot;juanjosexdd&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/42101847?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-04-09T00:48:42.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-04-09T00:48:42.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:3007}},{&quot;id&quot;:5430,&quot;name&quot;:&quot;Kastholm&quot;,&quot;slug&quot;:&quot;kastholm&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/79057947?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2021-10-14T18:06:16.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-10-14T18:06:16.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:5430}},{&quot;id&quot;:6593,&quot;name&quot;:&quot;enucem&quot;,&quot;slug&quot;:&quot;enucem&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/2001287?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2022-01-21T00:22:19.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-01-21T00:22:19.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:6593}},{&quot;id&quot;:6639,&quot;name&quot;:&quot;4n70w4&quot;,&quot;slug&quot;:&quot;4n70w4&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/38257723?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2022-01-24T09:30:58.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-01-24T09:30:58.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:6639}},{&quot;id&quot;:6641,&quot;name&quot;:&quot;fhlarif&quot;,&quot;slug&quot;:&quot;fhlarif&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/avatars.githubusercontent.com\/u\/52021217?v=4&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2022-01-24T09:51:23.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-01-24T09:51:23.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:6641}},{&quot;id&quot;:6695,&quot;name&quot;:&quot;Arijul Islam&quot;,&quot;slug&quot;:&quot;arijul-islam&quot;,&quot;bio&quot;:null,&quot;avatar&quot;:&quot;https:\/\/www.gravatar.com\/avatar\/da91634e524611ff5f75e818755e9b92&quot;,&quot;header&quot;:null,&quot;created_at&quot;:&quot;2022-01-27T19:24:22.000000Z&quot;,&quot;updated_at&quot;:&quot;2022-01-27T19:24:22.000000Z&quot;,&quot;pivot&quot;:{&quot;component_id&quot;:829,&quot;user_id&quot;:6695}}]}" :edit="false">
                                    <a v-cloak href="/component/blog-page/landing" class="flex items-center px-4 py-2 space-x-3 text-gray-600 transition-colors duration-200 transform border rounded-lg dark:text-gray-200 dark:border-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8V4m0 0h4M3 4l4 4m8 0V4m0 0h-4m4 0l-4 4m-8 4v4m0 0h4m-4 0l4-4m8 4l-4-4m4 4v-4m0 4h-4" />
                        </svg>

                        <span class="hidden md:inline">Full screen Preview</span>
                    </a>
                
                <form v-cloak action="/component/blog-page/download" method="post">
                    <input type="hidden" name="_token" value="tVfOEng6KRCW6NJX45mHMPcqkREl7r6bHerypJUE">                    <button type="submit" class="flex items-center px-4 py-2 space-x-3 text-gray-600 transition-colors duration-200 transform border rounded-lg focus:border-teal-500 focus:ring focus:ring-primary focus:ring-opacity-40 dark:text-gray-200 dark:border-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>

                        <span class="hidden md:inline">Download</span>
                    </button>
                </form>
            </component-preview>

                    </div>

        <div class="flex flex-col mt-6 space-y-8 md:flex-row md:space-y-0 md:justify-between md:items-center">
            <div>
                                    <div class="flex items-center space-x-4">
                        <a href="/u/khatabwedaa" class="flex-shrink-0 w-12 h-12 overflow-hidden rounded-full ">
                            <img class="object-cover w-full h-full" src="/storage/avatars/SD7Vpu7J4gebI9ijAacRX4wPGI2omR3a6UGaLm2F.jpg" alt="khatabwedaa">
                        </a>

                        <div>
                            <div class="flex items-center space-x-2">
                                <a class="text-xl font-medium text-gray-800 dark:text-gray-200 hover:underline" href="/u/khatabwedaa">khatabwedaa</a>
                                                                        <span class="text-base font-medium text-primary">Owner</span>
                                                            </div>

                            <span class="text-sm text-gray-500 dark:text-gray-400">52 components</</span>

                            
                                                            <a href="http://twitter.com/khatabwedaa" class="flex items-center mt-1 space-x-2 text-gray-500 dark:text-gray-400 hover:underline">
                                    <span>Profile On</span>

                                    <svg class="w-4 h-4 fill-current text-twitter" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 612" xml:space="preserve"><g><path d="M612,116.258c-22.525,9.981-46.694,16.75-72.088,19.772c25.929-15.527,45.777-40.155,55.184-69.411 c-24.322,14.379-51.169,24.82-79.775,30.48c-22.907-24.437-55.49-39.658-91.63-39.658c-69.334,0-125.551,56.217-125.551,125.513 c0,9.828,1.109,19.427,3.251,28.606C197.065,206.32,104.556,156.337,42.641,80.386c-10.823,18.51-16.98,40.078-16.98,63.101 c0,43.559,22.181,81.993,55.835,104.479c-20.575-0.688-39.926-6.348-56.867-15.756v1.568c0,60.806,43.291,111.554,100.693,123.104 c-10.517,2.83-21.607,4.398-33.08,4.398c-8.107,0-15.947-0.803-23.634-2.333c15.985,49.907,62.336,86.199,117.253,87.194 c-42.947,33.654-97.099,53.655-155.916,53.655c-10.134,0-20.116-0.612-29.944-1.721c55.567,35.681,121.536,56.485,192.438,56.485 c230.948,0,357.188-191.291,357.188-357.188l-0.421-16.253C573.872,163.526,595.211,141.422,612,116.258z"></path></g></svg>
                                </a>
                                                    </div>
                    </div>
                            </div>

            <div>
                <h4 class="text-lg text-gray-600 dark:text-gray-300">Community Rate</h4>

                <component-score
                    :votes="29"
                    :score="4.7"
                    url="https://tailwindcomponents.com/component/blog-page/votes"
                ></component-score>
            </div>
        </div>
    </section>

    <section class="container px-4 py-10 mx-auto">
        <h3 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Related components</h3>

        <div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
            <div>
    <a href="/component/checkbox" class="relative block overflow-hidden bg-gray-100 rounded-lg shadow aspect-w-16 aspect-h-10 dark:bg-gray-800">
                    <img class="w-full h-full object-cover" alt="tailwind Checkbox" loading="" src="https://tailwindcomponents.com/storage/1718/conversions/temp10047-thumb.jpg" alt="temp10047">
                
                    <span class="block w-8 h-8 mt-4 ml-4 overflow-hidden bg-white border-2 border-white rounded-full ">
                                    <img src="/storage/avatars/SD7Vpu7J4gebI9ijAacRX4wPGI2omR3a6UGaLm2F.jpg" class="object-cover w-8 h-8 rounded-full " alt="khatabwedaa">
                            </span>
            </a> 
    
    <div class="flex items-center justify-between mt-4">
        <div class="flex items-center space-x-4">
                        
            <div class="flex flex-col space-y-1">
                <a href="/component/checkbox" class="font-semibold text-gray-800 dark:text-gray-200 sm:text-lg dark:hover:text-primary hover:text-primary hover:underline">Checkbox</a> 

                                    <p class="text-sm text-gray-600 dark:text-gray-400">Premium component by khatabwedaa</p>
                            </div>
        </div>

        <div class="flex items-center space-x-2 text-gray-400">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                </svg>

                <span class="text-sm font-medium">3.0</span>
            </div>
            
            <div class="flex items-center space-x-2 ">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                </svg>
                
                <span class="text-sm font-medium">15</span>
            </div>
        </div>

    </div>
</div>
<div>
    <a href="/component/application-header-with-clip-path" class="relative block overflow-hidden bg-gray-100 rounded-lg shadow aspect-w-16 aspect-h-10 dark:bg-gray-800">
                    <img class="w-full h-full object-cover" alt="tailwind Application header with clip path" loading="" src="https://tailwindcomponents.com/storage/968/conversions/temp42180-thumb.jpg" alt="temp42180">
                
                    <span class="block w-8 h-8 mt-4 ml-4 overflow-hidden bg-white border-2 border-white rounded-full ">
                                    <img src="/storage/avatars/SD7Vpu7J4gebI9ijAacRX4wPGI2omR3a6UGaLm2F.jpg" class="object-cover w-8 h-8 rounded-full " alt="khatabwedaa">
                            </span>
            </a> 
    
    <div class="flex items-center justify-between mt-4">
        <div class="flex items-center space-x-4">
                        
            <div class="flex flex-col space-y-1">
                <a href="/component/application-header-with-clip-path" class="font-semibold text-gray-800 dark:text-gray-200 sm:text-lg dark:hover:text-primary hover:text-primary hover:underline">Application header with clip path</a> 

                                    <p class="text-sm text-gray-600 dark:text-gray-400">Premium component by khatabwedaa</p>
                            </div>
        </div>

        <div class="flex items-center space-x-2 text-gray-400">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                </svg>

                <span class="text-sm font-medium">1.2</span>
            </div>
            
            <div class="flex items-center space-x-2 ">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                </svg>
                
                <span class="text-sm font-medium">18</span>
            </div>
        </div>

    </div>
</div>
<div>
    <a href="/component/login-and-registration-with-image" class="relative block overflow-hidden bg-gray-100 rounded-lg shadow aspect-w-16 aspect-h-10 dark:bg-gray-800">
                    <img class="w-full h-full object-cover" alt="tailwind Login and registration with image" loading="" src="https://tailwindcomponents.com/storage/3794/conversions/temp86335-thumb.jpg" alt="temp86335">
                
                    <span class="block w-8 h-8 mt-4 ml-4 overflow-hidden bg-white border-2 border-white rounded-full ">
                                    <img src="/storage/avatars/SD7Vpu7J4gebI9ijAacRX4wPGI2omR3a6UGaLm2F.jpg" class="object-cover w-8 h-8 rounded-full " alt="khatabwedaa">
                            </span>
            </a> 
    
    <div class="flex items-center justify-between mt-4">
        <div class="flex items-center space-x-4">
                        
            <div class="flex flex-col space-y-1">
                <a href="/component/login-and-registration-with-image" class="font-semibold text-gray-800 dark:text-gray-200 sm:text-lg dark:hover:text-primary hover:text-primary hover:underline">Login and registration with image</a> 

                                    <p class="text-sm text-gray-600 dark:text-gray-400">Premium component by khatabwedaa</p>
                            </div>
        </div>

        <div class="flex items-center space-x-2 text-gray-400">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                </svg>

                <span class="text-sm font-medium">1.2</span>
            </div>
            
            <div class="flex items-center space-x-2 ">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                </svg>
                
                <span class="text-sm font-medium">15</span>
            </div>
        </div>

    </div>
</div>
<div>
    <a href="/component/school-themed-landing-page" class="relative block overflow-hidden bg-gray-100 rounded-lg shadow aspect-w-16 aspect-h-10 dark:bg-gray-800">
                    <img class="w-full h-full object-cover" alt="tailwind School themed landing page" loading="" src="https://tailwindcomponents.com/storage/1316/conversions/temp79232-thumb.jpg" alt="temp79232">
                
                    <span class="block w-8 h-8 mt-4 ml-4 overflow-hidden bg-white border-2 border-white rounded-full ">
                                    <img src="/svg/freepik-icon.svg" class="w-5 h-5" alt="">
                            </span>
            </a> 
    
    <div class="flex items-center justify-between mt-4">
        <div class="flex items-center space-x-4">
                        
            <div class="flex flex-col space-y-1">
                <a href="/component/school-themed-landing-page" class="font-semibold text-gray-800 dark:text-gray-200 sm:text-lg dark:hover:text-primary hover:text-primary hover:underline">School themed landing page</a> 

                                    <p class="text-sm text-gray-600 dark:text-gray-400">Premium component by TailwindComponents</p>
                            </div>
        </div>

        <div class="flex items-center space-x-2 text-gray-400">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                </svg>

                <span class="text-sm font-medium">3.0</span>
            </div>
            
            <div class="flex items-center space-x-2 ">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                </svg>
                
                <span class="text-sm font-medium">5</span>
            </div>
        </div>

    </div>
</div>
<div>
    <a href="/component/business-page" class="relative block overflow-hidden bg-gray-100 rounded-lg shadow aspect-w-16 aspect-h-10 dark:bg-gray-800">
                    <img class="w-full h-full object-cover" alt="tailwind Business page" loading="" src="https://tailwindcomponents.com/storage/1309/conversions/temp45117-thumb.jpg" alt="temp45117">
                
                    <span class="block w-8 h-8 mt-4 ml-4 overflow-hidden bg-white border-2 border-white rounded-full ">
                                    <img src="/svg/freepik-icon.svg" class="w-5 h-5" alt="">
                            </span>
            </a> 
    
    <div class="flex items-center justify-between mt-4">
        <div class="flex items-center space-x-4">
                        
            <div class="flex flex-col space-y-1">
                <a href="/component/business-page" class="font-semibold text-gray-800 dark:text-gray-200 sm:text-lg dark:hover:text-primary hover:text-primary hover:underline">Business page</a> 

                                    <p class="text-sm text-gray-600 dark:text-gray-400">Premium component by TailwindComponents</p>
                            </div>
        </div>

        <div class="flex items-center space-x-2 text-gray-400">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                </svg>

                <span class="text-sm font-medium">3.0</span>
            </div>
            
            <div class="flex items-center space-x-2 ">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                </svg>
                
                <span class="text-sm font-medium">14</span>
            </div>
        </div>

    </div>
</div>
<div>
    <a href="/component/nature-landing-page" class="relative block overflow-hidden bg-gray-100 rounded-lg shadow aspect-w-16 aspect-h-10 dark:bg-gray-800">
                    <img class="w-full h-full object-cover" alt="tailwind Nature landing page" loading="" src="https://tailwindcomponents.com/storage/1310/conversions/temp46130-thumb.jpg" alt="temp46130">
                
                    <span class="block w-8 h-8 mt-4 ml-4 overflow-hidden bg-white border-2 border-white rounded-full ">
                                    <img src="/svg/freepik-icon.svg" class="w-5 h-5" alt="">
                            </span>
            </a> 
    
    <div class="flex items-center justify-between mt-4">
        <div class="flex items-center space-x-4">
                        
            <div class="flex flex-col space-y-1">
                <a href="/component/nature-landing-page" class="font-semibold text-gray-800 dark:text-gray-200 sm:text-lg dark:hover:text-primary hover:text-primary hover:underline">Nature landing page</a> 

                                    <p class="text-sm text-gray-600 dark:text-gray-400">Premium component by TailwindComponents</p>
                            </div>
        </div>

        <div class="flex items-center space-x-2 text-gray-400">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                </svg>

                <span class="text-sm font-medium">3.0</span>
            </div>
            
            <div class="flex items-center space-x-2 ">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                </svg>
                
                <span class="text-sm font-medium">6</span>
            </div>
        </div>

    </div>
</div>
        </div>

        <div class="flex justify-center mt-10">
            <a href="/components" class="px-4 py-2 mt-2 text-gray-600 transition-colors duration-200 transform border rounded-lg dark:text-gray-200 dark:border-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                See more components
            </a>
        </div>
    </section>
        </main>

        <div class="bg-gray-100 dark:bg-gray-800">
    <div class="container flex flex-col items-center px-4 py-6 mx-auto space-y-6 lg:space-y-0 lg:flex-row lg:justify-between">
        <div class="w-48 text-gray-700 dark:text-gray-200">
            <div class="flex items-center">
    <svg class="h-7 w-7 -mt-2 flex-shrink-0" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 27"><path d="M22.487.658s5.03 13.072-1.822 22.171C16.476 28.39 9.84 27.26 5.484 25.68c1.513-3.391 3.441-6.067 5.784-8.03 1.176.623 3.186.792 6.03.51-2.535-.221-4.284-.654-5.246-1.3l.125.08c2.122-1.546 4.556-2.556 7.303-3.029-3.16-.285-6.026.315-8.598 1.804-.577-.742-1.157-1.748-1.74-3.018.07 1.534.339 2.734.809 3.6-2.64 1.797-4.953 4.58-6.94 8.351a7.583 7.583 0 01-.188-.088c-.802-.358-1.328-1.037-1.755-2.036C-1.9 13.366 4.645 8.273 11.123 7.989 23.046 7.465 22.487.658 22.487.658z" fill="#0ED3CF"/></svg>
    <p class="text-xl ml-2">tailwind<strong>components</strong></p>
</div>        </div>

        <p class="text-sm text-center text-gray-500 dark:text-gray-300">&copy; 2022 Highscore Studio. Component copyrights belongs to their authors.</p>

        <div class="flex items-center space-x-6">
            <a href="/privacy" class="text-sm text-gray-500 dark:text-gray-300 hover:underline">Privacy</a>
            <a href="/legal" class="text-sm text-gray-500 dark:text-gray-300 hover:underline">Legal</a>
            <a href="/cookies" class="text-sm text-gray-500 dark:text-gray-300 hover:underline">Cookies</a>

            <a href="https://twitter.com/TwComponents" target="_blink" class="text-gray-500 dark:text-gray-300">
                <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.995 6.68799C20.8914 6.15208 21.5622 5.30823 21.882 4.31399C21.0397 4.81379 20.118 5.16587 19.157 5.35499C17.8246 3.94552 15.7135 3.60251 14.0034 4.51764C12.2933 5.43277 11.4075 7.37948 11.841 9.26999C8.39062 9.09676 5.17598 7.4669 2.99702 4.78599C1.85986 6.74741 2.44097 9.25477 4.32502 10.516C3.64373 10.4941 2.97754 10.3096 2.38202 9.97799C2.38202 9.99599 2.38202 10.014 2.38202 10.032C2.38241 12.0751 3.82239 13.8351 5.82502 14.24C5.19308 14.4119 4.53022 14.4372 3.88702 14.314C4.45022 16.0613 6.06057 17.2583 7.89602 17.294C6.37585 18.4871 4.49849 19.1342 2.56602 19.131C2.22349 19.1315 1.88123 19.1118 1.54102 19.072C3.50341 20.333 5.78739 21.0023 8.12002 21C11.3653 21.0223 14.484 19.7429 16.7787 17.448C19.0734 15.1531 20.3526 12.0342 20.33 8.78899C20.33 8.60299 20.3257 8.41799 20.317 8.23399C21.1575 7.62659 21.8828 6.87414 22.459 6.01199C21.676 6.35905 20.8455 6.58691 19.995 6.68799Z"></path>
                </svg>
            </a>
            
            <a href="https://github.com/tailwindcomponents" target="_blink" class="text-gray-500 dark:text-gray-300">
                <svg viewBox="0 0 30 30" class="w-6 h-6 fill-current">
                    <path d="M15 1.875C7.75195 1.875 1.875 7.9043 1.875 15.334C1.875 21.2812 5.63672 26.3203 10.8516 28.1016C10.9247 28.1175 10.9994 28.1253 11.0742 28.125C11.5605 28.125 11.748 27.7676 11.748 27.457C11.748 27.1348 11.7363 26.291 11.7305 25.166C11.2963 25.2678 10.8522 25.3209 10.4062 25.3242C7.88086 25.3242 7.30664 23.3613 7.30664 23.3613C6.70898 21.8086 5.84766 21.3926 5.84766 21.3926C4.70508 20.5898 5.8418 20.5664 5.92969 20.5664H5.93555C7.25391 20.6836 7.94531 21.9609 7.94531 21.9609C8.60156 23.1094 9.48047 23.4316 10.2656 23.4316C10.7848 23.4213 11.2959 23.3015 11.7656 23.0801C11.8828 22.2129 12.2227 21.6211 12.5977 21.2812C9.68555 20.9414 6.62109 19.7871 6.62109 14.6309C6.62109 13.1602 7.13086 11.959 7.96875 11.0215C7.83398 10.6816 7.38281 9.31055 8.09766 7.45898C8.19354 7.43604 8.29209 7.42619 8.39062 7.42969C8.86523 7.42969 9.9375 7.61133 11.707 8.8418C13.8572 8.24022 16.1311 8.24022 18.2812 8.8418C20.0508 7.61133 21.123 7.42969 21.5977 7.42969C21.6962 7.42619 21.7947 7.43604 21.8906 7.45898C22.6055 9.31055 22.1543 10.6816 22.0195 11.0215C22.8574 11.9648 23.3672 13.166 23.3672 14.6309C23.3672 19.7988 20.2969 20.9355 17.373 21.2695C17.8418 21.6855 18.2637 22.5059 18.2637 23.7598C18.2637 25.5586 18.2461 27.0117 18.2461 27.4512C18.2461 27.7676 18.4277 28.125 18.9141 28.125C18.9928 28.1253 19.0713 28.1175 19.1484 28.1016C24.3691 26.3203 28.125 21.2754 28.125 15.334C28.125 7.9043 22.248 1.875 15 1.875Z"></path>
                </svg>
            </a>
        </div>
    </div>
</div>
    </div>

        <script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "Article",
		"datePublished": "2020-12-25 14:17:46",
		"dateModified": "2022-02-23 07:30:36",
		"url": "https://tailwindcomponents.com/component/blog-page",
		"author": {
			"@type": "Person",
			"name": "khatabwedaa",
			"image": {
				"@type": "ImageObject",
				"url": "/storage/avatars/SD7Vpu7J4gebI9ijAacRX4wPGI2omR3a6UGaLm2F.jpg",
				"width": "200",
				"height": "200"
			}
		},
		"publisher": {
			"@type": "Organization",
			"name": "TailwindComponents",
			"logo": {
				"@type": "ImageObject",
				"url": "https://tailwindcomponents.com/images/logo.png",
				"width": "200",
				"height": "100"
			}
		},
		"mainEntityOfPage": "https://tailwindcomponents.com/component/blog-page#component",
		"headline": "Blog Page",
		            "image": "https://tailwindcomponents.com/storage/5939/conversions/temp89063-ogimage.jpg",
		        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.7",
			"reviewCount": "29"
		}
	}
	</script>
    <!-- Load the following script before </head>. You only have to load this script once even if you have multiple ads on the same page. E.g. Flex Bar + FancyBar on the homepage. -->
<script type="text/javascript" src="//m.servedby-buysellads.com/monetization.js"></script>
<script>

    function checkAds() {
        const ad = document.querySelector('#_custom_');

        if (!ad) {
            return;
        }


        Array.from(ad.parentNode.querySelectorAll('.hide-with-banner')).forEach(el => el.parentNode.removeChild(el));
        target.removeAttribute('href');

        return true;
    }
    const target = document.querySelector('.custom-slant');
    const adObserver = new MutationObserver((mutations) => {
        if (checkAds()) {
            adObserver.disconnect();
        }
    })

    adObserver.observe(target, { attributes: true, childList: true, characterData: true, subtree: true })

    const interval = setInterval(() => {
        if (checkAds()) {
            clearInterval(interval);
        }
    }, 16)
</script>

<!-- Load this function before end of </body>. Make sure to disable async for the script. -->
<script>

    if (window.innerWidth >= 640) {

        (function() {
          if (typeof _bsa !== 'undefined' && _bsa) {
            _bsa.init('custom', 'CESD62JI', 'placement:tailwindcomponentscom',
            {
              target: '.custom-slant',
              template: `
        <a href="##link##" class="native-banner" style="background-color: ##backgroundColor##; color: ##textColor##;">
          <div class="native-sponsor-container">
            <div class="native-sponsor">
              <div class="native-label">Sponsor</div>
              <div class="native-company">##company##</div>
            </div>
          </div>
          <div class="native-main">
            <img class="native-logo" src="##logo##">
            <div class="native-text">
              <div class="native-tagline">##tagline##</div>
              <div class="native-description">##description##</div>
              <div class="native-cta" style="background-color: ##ctaBackgroundColor##; color: ##ctaTextColor##">##callToAction##</div>
            </div>
          </div>
        </a>
            `
                }
              );
          }
        })();
    }
</script>
<style>
    .custom-slant .native-banner {
  display: flex;
  max-width: 728px;
  flex-direction: column;
  overflow: hidden;
  padding: 18px;
  border: 1px solid #edf2f7;
  border-radius: 0.5rem;
  background-color: #fff;
  text-decoration: none;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;

  align-items: left;
}

.custom-slant .native-sponsor-container {
  overflow: hidden;
  border-top-left-radius: 4px;
}

.custom-slant .native-sponsor {
  display: inline-flex;
  margin-bottom: 20px;
  padding: 0 10px;
  background-image: linear-gradient(135deg, #6154F8cc, #6154F8);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: .5px;
  font-size: 12px;
  transform: skewX(-22deg);
  transform-origin: top left;
  pointer-events: none;

  align-items: center;
}

.custom-slant .native-sponsor:after {
  position: absolute;
  top: 4px;
  right: 5px;
  width: 3px;
  height: calc(100% - 8px);
  background-color: #fff;
  content: "";
}

.custom-slant .native-sponsor > div {
  padding: 8px 10px;
  transform: skewX(22deg);
}

.custom-slant .native-company {
  border-left: 2px solid #fff;
}

.custom-slant .native-main {
  display: flex;
}

.custom-slant .native-logo {
  display: block;
  box-sizing: border-box;
  margin-right: 20px;
  padding: 20px 30px;
  width: 180px;
  height: 100%;
  border-radius: 8px;
}

.custom-slant .native-text {
  display: flex;
  flex-direction: column;
  line-height: 1.4;

  align-items: flex-start;
}

.custom-slant .native-tagline {
  font-weight: 600;
  font-size: 20px;
}

.custom-slant .native-description {
  margin-bottom: 6px;
  font-size: 16px;
}

.custom-slant .native-cta {
  display: flex;
  padding: 8px 14px;
  border-radius: 4px;
  text-transform: uppercase;
  letter-spacing: .4px;
  font-weight: 600;
  font-size: 12px;
}
</style>
    <script src="//cdn.carbonads.com/carbon.js?serve=CE7DEK7J&placement=tailwindcomponentscom" id="_carbonads_js"></script>
<style>
    #carbonads {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu,
        Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    #carbonads {
        display: flex;
        position: fixed;
        bottom: 60px;
        right: 30px;
        z-index:50;
        max-width: 330px;
        background-color: hsl(0, 0%, 98%);
        box-shadow: 0 1px 4px 1px hsla(0, 0%, 0%, .1);
    }

    #carbonads a {
        color: inherit;
        text-decoration: none;
    }

    #carbonads a:hover {
        color: inherit;
    }

    #carbonads span {
        position: relative;
        display: block;
        overflow: hidden;
    }

    #carbonads .carbon-wrap {
        display: flex;
    }

    .carbon-img {
        display: block;
        margin: 0;
        line-height: 1;
    }

    .carbon-img img {
        display: block;
    }

    .carbon-text {
        font-size: 13px;
        padding: 10px;
        line-height: 1.5;
        text-align: left;
    }

    .carbon-poweredby {
        display: block;
        padding: 8px 10px;
        background: repeating-linear-gradient(-45deg, transparent, transparent 5px, hsla(0, 0%, 0%, .025) 5px, hsla(0, 0%, 0%, .025) 10px) hsla(203, 11%, 95%, .4);
        text-align: center;
        text-transform: uppercase;
        letter-spacing: .5px;
        font-weight: 600;
        font-size: 9px;
        line-height: 1;
    }

</style>

            <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110182129-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-110182129-1');
        </script>
    </body>
</html>



</x-app-layout>