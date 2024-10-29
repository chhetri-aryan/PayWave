<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

  <div class="navbar bg-base-300 px-4 md:px-8">
    <div class="flex-1">
      <a class="btn btn-ghost text-xl">PayWave 🌊</a>
    </div>
    <div class="flex-none">
      <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar online">
          <div class="w-10 rounded-full">
            <img
              alt="Profile image"
              src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
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
          <li><a>Logout</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="diff aspect-[16/3]">
    <div class="diff-item-1">
        <div class="bg-info grid place-content-center text-9xl font-black">
            PayWave 🌊
        </div>
    </div>
    <div class="diff-item-2">
        
        <div id="time" class="bg-primary text-primary-content grid place-content-center text-9xl font-black">DAISY</div>


    </div>
    <div class="diff-resizer"></div>
</div>

  <script>
    function updateTime() {
      const now = new Date();
      const timeString = now.toLocaleTimeString();
      document.getElementById('time').textContent = timeString;
    }
    setInterval(updateTime, 1000);
    updateTime();
  </script>

  <div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-12 justify-items-center">

      <a class="card card-compact w-full max-w-xs shadow-xl bg-neutral-800 cursor-pointer"
      href="">
        <figure>
          <img src="{{url('images/add.png')}}" class="rounded-lg h-44 w-full object-cover" alt="Add Employee" />
        </figure>
        <div class="card-body">
          <h2 class="card-title">Add Employee</h2>
          <p>Quickly onboard new employees.</p>
        </div>
      </a>

      <a class="card card-compact w-full max-w-xs shadow-xl bg-neutral-800"
      href="">
        <figure>
          <img src="{{url('images/emp.png')}}" class="rounded-lg h-44 w-full object-cover" alt="Employees" />
        </figure>
        <div class="card-body">
          <h2 class="card-title">Manage Employees</h2>
          <p>View and manage employee details.</p>
          
        </div>
      </a>

      <a class="card card-compact w-full max-w-xs shadow-xl bg-neutral-800"
      href="">
        <figure>
          <img src="{{url('images/pay.png')}}" class="rounded-lg h-44 w-full object-cover" alt="Payment History" />
        </figure>
        <div class="card-body">
          <h2 class="card-title">Payment History</h2>
          <p>Access past payment records.</p>
         
        </div>
      </a>

      <a class="card card-compact w-full max-w-xs shadow-xl bg-neutral-800"
      href="fds">
        <figure>
          <img src="{{url('images/graph.png')}}" class="rounded-lg h-44 w-full object-cover" alt="Shoes" />
        </figure>
        <div class="card-body">
          <h2 class="card-title">Analytics</h2>
          <p>Visualize trends with interactive graphs.</p>
          
        </div>
      </a>
    </div>
  </div>


</body>
</html>
