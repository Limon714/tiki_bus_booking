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
                  <a wire:navigate href="{{ route('location') }}">
                    <i class='bx bx-map' ></i>
                    <span class="links_name">Location</span>
                  </a>
                </li>

                
                <li>
                  <a  wire:navigate href="{{ route('seat') }}">
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
                <main class="p-8 w-full ">
   
                    <table class="border w-full">
                        
                        <tr class="p-4">
                            <th class="p-4">ID NO</th>
                            <th>Name</th>
                            <th>Mobile Number</th>
                            <th>Payment</th>
                            <th>Location</th>
                            <th>Shift</th>
                            <th style="text-align:center">Action</th>
                
                        </tr>
                        @foreach ($data as $dat)
                        <tr class="text-center bg-gray-300 border">
                            <td class="p-4">{{ $dat->id }}</td>
                            <td class="p-4">{{ $dat->name }}</td>
                            <td>{{ $dat->phone_number }}</td>
                            <td>{{ $dat->price }}</td>
                            <td>{{ $dat->location }}</td>
                            <td>{{ $dat->shift }}</td>
                            <td style="text-align:center">
                                <a wire:navigate class="bg-green-500 rounded p-2" href="{{ route('edit',$dat->id ) }}"> Edit</a>
                                <a wire:navigate class="bg-red-900 rounded p-2 text-white" href="{{ route('delete',$dat->id ) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
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




