<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <style>
    .show {
      opacity: 1; /* When the show class is added, opacity becomes 1 */
    }
  </style>
<div>
  <nav class="bg-white dark:bg-gray-800  shadow ">
      <div class="px-8 mx-auto max-w-7xl">
          <div class="flex items-center justify-between h-16">
              <div class=" flex items-center">
                  <a class="flex-shrink-0" href="/">
                      <img class="w-12 h-12" src="{{ asset('images/tiki.png') }}" alt="Workflow"/>
                  </a>
                  <div class="hidden md:block">
                      <div class="flex items-baseline ml-10 space-x-4">
                          <a class="text-gray-900 dark:text-white hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium" href="/#">
                              Home
                          </a>
                          <a class="text-gray-300   hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium" href="/#">
                              Gallery
                          </a>
                          <a class="text-gray-300  hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium" href="/#">
                              Content
                          </a>
                          <a class="text-gray-300  hover:text-gray-800 dark:hover:text-white px-3 py-2 rounded-md text-sm font-medium" href="/#">
                              Contact
                          </a>
                      </div>
                  </div>
              </div>
              <div class="block">
                  <div class="flex items-center ml-4 md:ml-6">
                      <div class="relative ml-3">
                          <div class="relative inline-block text-left">
                              <div>
                                  <button type="button" onclick="fadeInCard()" class="  flex items-center justify-center w-full rounded-md  px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-50 hover:bg-gray-50 dark:hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-gray-500" id="options-menu">
                                      <svg width="20" fill="currentColor" height="20" class="text-gray-800" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1523 1339q-22-155-87.5-257.5t-184.5-118.5q-67 74-159.5 115.5t-195.5 41.5-195.5-41.5-159.5-115.5q-119 16-184.5 118.5t-87.5 257.5q106 150 271 237.5t356 87.5 356-87.5 271-237.5zm-243-699q0-159-112.5-271.5t-271.5-112.5-271.5 112.5-112.5 271.5 112.5 271.5 271.5 112.5 271.5-112.5 112.5-271.5zm512 256q0 182-71 347.5t-190.5 286-285.5 191.5-349 71q-182 0-348-71t-286-191-191-286-71-348 71-348 191-286 286-191 348-71 348 71 286 191 191 286 71 348z">
                                          </path>
                                      </svg>
                                  </button>
                              </div>
                              <div id="myCard" class="absolute cardi opacity-0 right-0 w-56 mt-2 origin-top-right bg-white rounded-md shadow-lg dark:bg-gray-800 ring-1 ring-black ring-opacity-5">
                                  <div class="py-1 " role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
                                      <a href="#" class="block block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white dark:hover:bg-gray-600" role="menuitem">
                                          <span class="flex flex-col">
                                              <span>
                                                  Settings
                                              </span>
                                          </span>
                                      </a>
                                      <a href="#" class="block block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white dark:hover:bg-gray-600" role="menuitem">
                                          <span class="flex flex-col">
                                              <span>
                                                  Account
                                              </span>
                                          </span>
                                      </a>
                                      <a href="#" class="block block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-100 dark:hover:text-white dark:hover:bg-gray-600" role="menuitem">
                                          <span class="flex flex-col">
                                              <span>
                                                  Logout
                                              </span>
                                          </span>
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="flex -mr-2 md:hidden">
                  <button class="text-gray-800 dark:text-white hover:text-gray-300 inline-flex items-center justify-center p-2 rounded-md focus:outline-none">
                      <svg width="20" height="20" fill="currentColor" class="w-8 h-8" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z">
                          </path>
                      </svg>
                  </button>
              </div>
          </div>
      </div>
      <div class="md:hidden">
          <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
              <a class="text-gray-300 dark:text-white hover:text-gray-800 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium" href="/#">
                  Home
              </a>
              <a class="text-gray-800 block px-3 py-2 rounded-md text-base font-medium" href="/#">
                  Gallery
              </a>
              <a class="text-gray-300 hover:text-gray-800 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium" href="/#">
                  Content
              </a>
              <a class="text-gray-300 hover:text-gray-800 dark:hover:text-white block px-3 py-2 rounded-md text-base font-medium" href="/#">
                  Contact
              </a>
          </div>
      </div>
  </nav>
</div>
{{-- // header --}}
    <div class="min-h-screen py-40" style="background-image: linear-gradient(115deg, #170936, #6c7a80)">
        <div class="container mx-auto">
          <div class="flex flex-col w-10/12 mx-auto overflow-hidden bg-white shadow-lg lg:flex-row lg:w-8/12 rounded-xl">
            <div class="flex flex-col items-center justify-center w-full p-12 bg-center bg-no-repeat bg-cover lg:w-1/2" style="background-image: url('images/bus.png');">
              <h1 class="mb-3 text-3xl text-white">Welcome</h1>
              <div>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean suspendisse aliquam varius rutrum purus maecenas ac <a href="#" class="font-semibold text-purple-500">Learn more</a></p>
              </div>
            </div>
            <div class="w-full px-12 py-16 lg:w-1/2">
              <h2  class="mb-4 text-3xl text-center text-orange-900 font-black">Tiki Travel</h2>
              
              <form action="#" method="POST">
                @csrf
                <div class="mt-5">
                  <input type="text" placeholder="Full Name" name="name" class="w-full px-2 py-1 border  outline-none">
                </div>
                <label for="">Destination </label>
                <div class="flex flex-row">
                <select class="roudnded border p-2 w-full"  name="location" id="">
                  @foreach ($data as $dat)
                  <option value="{{ $dat->location }}">{{ $dat->location   }}</option>
                  @endforeach
              </select>
            </div>
              <div class="grid grid-cols-2 gap-4">
                
                <select class="roudnded mt-2 border p-2"  name="shift" id="">
                  @foreach ($data as $dat)
                  <option value="{{ $dat->shift }}">{{ $dat->shift   }}</option>
                  @endforeach
              </select>
              <input type="date" name="date" class=" h-[80%] px-2 mt-2 border outline-none">
              </div>

                <div class="mt-5 grid grid-cols-2 gap-4">
                  <input type="text" name="total_seat" placeholder="Total Seat" class="w-full px-2 py-1 border  outline-none">
                  <input type="text" name="available_seat" placeholder="Available Seat" class="w-full px-2 py-1 border  outline-none">
                </div>

                <label for="">Price : 1200 tk ( per seat)</label>
                <div class="mt-2">
                 
                  <input type="text" name="price" placeholder="Total Price" class="w-full px-2 py-1 border  outline-none">
                </div>

                <div class="mt-5 grid grid-cols-2 gap-4">
                  <input type="text" name="phone_number" placeholder="Bkash Number" class="w-full px-2 py-1 border  outline-none">
                  <input type="text" name="transaction_id" placeholder="Transaction ID" class="w-full px-2 py-1 border  outline-none">
                </div>

                <div class="mt-5">
                  <input type="checkbox" class="border ">
                  <span>
                    I accept the <a href="#" class="font-semibold text-purple-500">Terms of Use</a> &  <a href="#" class="font-semibold text-purple-500">Privacy Policy</a> 
                  </span>
                </div>
                <div class="mt-5">
                  <button type="submit" class="w-full py-3 font-bold text-center text-white bg-orange-500">Book Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <script>
       function fadeInCard() {
      var cardi = document.getElementById('myCard');
      cardi.classList.toggle('show');
       }
      </script>
</body>
</html>