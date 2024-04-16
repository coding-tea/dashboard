<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('includes.css')
    <style>
        /* Add your custom styles here */
    </style>
</head>

<body class="font-poppins antialiased bg-gray-100">

    <nav class="sticky top-0 z-50 bg-white border-b border-gray-200 text-gray-800 w-full">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button id="sidebarToggle" aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="#" class="flex ms-2 md:me-24">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="Logo" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap text-gray-800">dashboard</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-100 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    User Name
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    user.name@email.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 "
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
            <div class="space-y-2 font-medium flex flex-col h-full">
                <a href="#" class="flex items-center gap-4 p-4 border-b border-gray-200">
                    <i class="fa fa-home text-2xl text-blue-500"></i>
                    <span>Dashboard</span>
                </a>
                <div class="flex flex-col gap-4 p-4">
                    <h3 class="font-bold text-gray-600">Shop</h3>
                    <a href="#"
                        class="flex items-center gap-4 rounded-md px-4 py-2 text-gray-600 hover:bg-gray-100">
                        <i class="fa fa-caret-right text-gray-400"></i>
                        <span>Products</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-4 rounded-md px-4 py-2 text-gray-600 hover:bg-gray-100">
                        <i class="fa fa-caret-right text-gray-400"></i>
                        <span>Orders</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-4 rounded-md px-4 py-2 text-gray-600 hover:bg-gray-100">
                        <i class="fa fa-caret-right text-gray-400"></i>
                        <span>Customers</span>
                    </a>
                </div>
                <div class="flex flex-col gap-4 p-4">
                    <h3 class="font-bold text-gray-600">Blog</h3>
                    <a href="#"
                        class="flex items-center gap-4 rounded-md px-4 py-2 text-gray-600 hover:bg-gray-100">
                        <i class="fa fa-caret-right text-gray-400"></i>
                        <span>Posts</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-4 rounded-md px-4 py-2 text-gray-600 hover:bg-gray-100">
                        <i class="fa fa-caret-right text-gray-400"></i>
                        <span>Categories</span>
                    </a>
                    <a href="#"
                        class="flex items-center gap-4 rounded-md px-4 py-2 text-gray-600 hover:bg-gray-100">
                        <i class="fa fa-caret-right text-gray-400"></i>
                        <span>Authors</span>
                    </a>
                </div>
                <div class="flex flex-col gap-4 p-4">
                    <h3 class="font-bold text-gray-600">Links</h3>
                </div>
            </div>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <section class="flex-1 p-4 mt-5">
            @yield('content')
        </section>
    </div>

    @include('includes.script')

    <script>
        // JavaScript function to toggle sidebar visibility
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            var sidebar = document.getElementById('logo-sidebar');
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>

</html>
