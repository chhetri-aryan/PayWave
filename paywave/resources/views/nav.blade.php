<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PayWave</title>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="navbar bg-base-300 px-4 md:px-8">
        <div class="flex-1">
          <a href="/" class="btn btn-ghost text-xl">PayWave 🌊</a>
        </div>
        <div class="flex-none">
          <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar online">
              <div class="w-10 rounded-full">
                <img
                  alt="Profile image"
                  src="https://cdn-icons-png.flaticon.com/512/9203/9203764.png" />
              </div>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content cardcolor rounded-box z-10 mt-3 w-52 p-2 shadow bg-black">
              <li>
                <a class="justify-between">
                  Profile
                  <span class="badge">New</span>
                </a>
              </li>
              <li><a>Settings</a></li>
              <form action="{{ route('logout') }}" method="POST">
                  <li>
                    @csrf
                    <button type="submit">Logout</button>
                  </li>
              </form>
            
            </ul>
          </div>
        </div>
      </div>
    
    <div>
        @yield('content')
    </div>

</body>
</html>