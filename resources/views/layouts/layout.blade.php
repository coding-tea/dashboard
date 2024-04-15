
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> @yield('title') </title>
  @include('includes.css')
</head>
<body class="font-poppins antialiased bg-gray-100">
  <div class="flex flex-col min-h-screen">
    <header class="flex items-center justify-between p-4 border-b border-gray-200">
      <a href="#" class="text-2xl font-bold text-gray-800">Osamah</a>
      <div class="flex items-center gap-4">
        <div class="relative">
          <input type="text" placeholder="Search" class="w-48 rounded-full border border-gray-300 px-4 py-2 focus:outline-none focus:border-blue-500">
          <button type="submit"><i class="fa fa-search absolute right-2 top-1/2 -translate-y-1/2 text-gray-400"></i></button>
        </div>
        <a href="#" class="flex items-center gap-2 rounded-full bg-blue-500 px-4 py-2 text-white">
          <i class="fa fa-shopping-cart"></i>
          <span>0</span>
        </a>
        <div class="dropdown relative">
          <button class="flex items-center gap-2 rounded-full bg-gray-200 px-4 py-2 text-gray-600">
            <i class="fa fa-user"></i>
            Osamah
          </button>
          <ul class="dropdown-content absolute hidden text-gray-600 bg-white border border-gray-200 rounded-md shadow-md w-44">
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Profile</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Sign out</a></li>
          </ul>
        </div>
      </div>
    </header>
    <main class="flex flex-1">
        @yield('content')
    </main>
  </div>

  @include('includes.script')
</body>
</html>
