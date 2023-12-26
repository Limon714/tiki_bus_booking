<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <title>{{ $title ?? 'Tiki Bus Travel' }}</title>
        @livewireStyles
    </head>
    <body>
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bx-bus'></i>
              <span class="logo_name">Tiki Travel</span>
            </div>
              <ul class="nav-links">
                <li>
                  <a wire:navigate href="{{ route('dashboard') }}">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="links_name">Dashboard</span>
                  </a>
                </li>
                <li>
                  <a wire:navigate href="#">
                    <i class='bx bx-map' ></i>
                    <span class="links_name">Location</span>
                  </a>
                </li>

                
                <li>
                  <a  wire:navigate href="#">
                    <i class='bx bx-handicap'></i>
                    <span class="links_name">Seat</span>
                  </a>
                </li>


                <li>
                  <a wire:navigate href="#">
                    <i class='bx bx-list-ul' ></i>
                    <span class="links_name">Order History</span>
                  </a>
                </li>
                <li class="log_out">
                  <a href="#">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                  </a>
                </li>
              </ul>
          </div>
          <section class="home-section">
            <nav>
              <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
              </div>
              <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search' ></i>
              </div>
              <div class="profile-details">
                <img src="{{ asset('images/limon.png') }}" alt="">
                <span class="admin_name">Limon Islam</span>
                
              </div>
            </nav>
            <div class="home-content">
                <main class="p-8">
                    <form action="" method="POST" class="grid grid-rows-3 p-3 gap-4 ml-64 w-[40%]">
                        @csrf
                        <input type="text" class="p-4 rounded outline-none" name="location" value="{{ $info->location }}" placeholder="Update your Destination">
                        <input type="text" class="p-4 rounded outline-none" name="shift" value="{{ $info->shift }}" placeholder="Update your Shift">
                        <button type="submit" class="bg-green-600 rounded font-bold text-white tracking-wide">Update</button>
                    </form>
                </main>
        </div>
          </section>
       
          @livewireScripts
        <script>
            let sidebar = document.querySelector(".sidebar");
         let sidebarBtn = document.querySelector(".sidebarBtn");
         sidebarBtn.onclick = function() {
           sidebar.classList.toggle("active");
           if(sidebar.classList.contains("active")){
           sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
         }else
           sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
         }
          </script>
         <script src="https://cdn.tailwindcss.com"></script>
    </body>
</html>



