<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body>

<div class="flex   justify-center">

    <div class="flex justify-center h-screen">
        <div x-data="{ dropdownOpen: true }" class="relative my-32">
          <button
            @click="dropdownOpen = !dropdownOpen"
            class="relative z-10 block rounded-md p-2  
            bg-blue-600
             text-gray-200  px-6 text-sm py-3 overflow-hidden 
             focus:outline-none focus:border-white"
          >
            Dropdown
            <svg
              class="h-5 w-5 text-gray-800"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 
                10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"
              />
            </svg>
          </button>
  
          <div
            x-show="dropdownOpen"
            @click="dropdownOpen = false"
            class="fixed inset-0 h-full w-full z-10"
          ></div>
  
          <div
            x-show="dropdownOpen"
            class="absolute right-0 mt-2 py-2  bg-white rounded-md shadow-xl z-20"
          >
            <a
              href="#"
              class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white"
            >
              your profile
            </a>
            <a
              href="#"
              class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white"
            >
              Your projects
            </a>
            <a
              href="#"
              class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white"
            >
              Help
            </a>
            <a
              href="#"
              class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white"
            >
              Settings
            </a>
            <a
              href="#"
              class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white"
            >
              Sign Out
            </a>
          </div>
        </div>
      </div>



      <div class="flex justify-center h-screen">
        <div x-data="{ dropdownOpen: true }" class="relative my-32">
          <button
            @click="dropdownOpen = !dropdownOpen"
            class="relative z-10 block rounded-md p-2  
            bg-blue-600
             text-gray-200  px-6 text-sm py-3 overflow-hidden 
             focus:outline-none focus:border-white"
          >
            Dropdown
            <svg
              class="h-5 w-5 text-gray-800"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 
                10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"
              />
            </svg>
          </button>
  
          <div
            x-show="dropdownOpen"
            @click="dropdownOpen = false"
            class="fixed inset-0 h-full w-full z-10"
          ></div>
  
          <div
            x-show="dropdownOpen"
            class="absolute right-0 mt-2 py-2  bg-white rounded-md shadow-xl z-20"
          >
            <a
              href="#"
              class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white"
            >
              your profile
            </a>
            <a
              href="#"
              class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white"
            >
              Your projects
            </a>
            <a
              href="#"
              class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white"
            >
              Help
            </a>
            <a
              href="#"
              class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white"
            >
              Settings
            </a>
            <a
              href="#"
              class="block px-4 py-2 text-sm capitalize text-gray-800 hover:bg-indigo-500 hover:text-white"
            >
              Sign Out
            </a>
          </div>
        </div>
      </div>




</div>


<script  src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"  defer >


</script>

    </body>
</html>