<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   

    <!-- Add this script to the bottom of your HTML, after the Alpine.js library -->

    
    <title>Document</title>

    {{-- <style>
      @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,900;1,700&family=Martian+Mono:wght@200&family=Noto+Sans:wght@300&family=Nunito+Sans:ital,wght@0,400;1,300&family=Roboto:ital,wght@1,300&display=swap');
    </style> --}}

</head>
<body  class="">

<nav  class="bg-orange-500 top-0  left-0  text-white  w-full  shadow">



  <div   class="container  m-auto   flex md:flex-row      items-center   text-white"  >

<p  class="pl-32  block   py-4 pr-5">

  <i class="fa-solid fa-phone"></i>

  +918948439992 
</p>

<p class="flex ">
   |<i class="fa-solid fa-envelope" ></i>

  
  info@mycartbox.com



</p>



<ul class="hidden  md:flex items-center  pr-10 text-base  pl-96   justify-around font-semibold  cursor-pointer">


<li  class="hover:bg-orange-600    py-4 px-6 ">

  <a href="">


    <i class="fa-brands fa-facebook-f fa-lg"></i>

  </a>
  
  </li>
  
<li  class="hover:bg-orange-600    py-4 px-6 ">


    <a href="">


      <i class="fa-brands fa-twitter fa-lg"></i>

    </a>
  </li>
  <li  class="hover:bg-orange-600    py-4 px-6 ">



    <a href="">



      <i class="fa-brands fa-instagram fa-lg"></i>
    </a>
  </li>
  <li  class="hover:bg-orange-600    py-4 px-6 ">



    <a href="">


      <i class="fa-sharp fa-solid fa-envelope fa-lg"></i>
    </a>
  </li>
  <li  class="hover:bg-orange-600    py-4 px-6 ">


    <a href="">



      <i class="fa-brands fa-whatsapp fa-lg"></i>
    </a>
  </li>





</ul>



<button  class="block  md:hidden py-3 px-4 mx-2  rounded  focus:outline-none  hover:bg-gray-200">
<div  class="w-5 h-1 bg-gray-600 mb-1"></div>  
<div  class="w-5 h-1 bg-gray-600 mb-1"></div>  

<div  class="w-5 h-1 bg-gray-600 mb-1"></div>  


<div  class="absolute top-0 -right-full h-screen  w-8/12   bg-white   border  opacity-0
group-focus:right-0 group-focus:opacity-100  transition-all  duration-300">

<ul  class="flex flex-col items-center w-full text-base cursor-pointer  pt-10    ">


<li  class="hover:bg-gray-200  py-4 px-6 w-full ">


  <a href="">


    <i class="fa-brands fa-facebook-f fa-lg"></i>
      
  </a>


</li>
<li  class="hover:bg-gray-200  py-4 px-6 w-full ">




</li>
<li  class="hover:bg-gray-200  py-4 px-6 w-full ">

<a href="">

  <i class="fa-brands fa-twitter fa-lg"></i>

</a>

</li>
<li  class="hover:bg-gray-200  py-4 px-6 w-full ">


  <a href="">



    <i class="fa-brands fa-instagram fa-lg"></i>

  </a>
</li>
<li  class="hover:bg-gray-200  py-4 px-6 w-full ">



  <a href="">
    <i class="fa-sharp fa-solid fa-envelope fa-lg"></i>




  </a>
</li>



<li><a href="">
  

  <i class="fa-brands fa-whatsapp fa-lg"></i>


</a></li>
</ul>


</div>


</button>




</nav>



<div class="grid  lg:grid-cols-1   md:grid-cols-3  mx-auto   p-5 gap-3">

  <div class="flex">



    <i class="fa-solid fa-cart-shopping fa-2xl" style="color: #020c1d;"></i>
   
    <h1      class="text-xl    font-extrabold">My cartBox</h1>
 
<ul  class="flex  mx-72">

   <li  class="p-3  hover:underline">
      <a href="{{url('/')}}">
    
      home
      
    </a>
    </li>
  <li  class="p-3   hover:underline">
    <a href="{{url('/contact')}}">

      Contact  us 

    </a>
  </li>
  <li  class="p-3   hover:underline">

    <a href="{{url('/booking')}}">

      My  booking

    </a>
  </li>
  <li  class="p-3  hover:underline">

<a href="{{url('/visa')}}">
  Visa 


</a>
  </li>

   <li  class="p-3  hover:underline">
   
    <a href="{{url('/webcheck')}}">

     Web  check

</a>
  </li>
 </ul>
 

 <button class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">
  
  <a href="{{url('login')}}">

  customer  Login


  </a>
  
 </button>
  </div>


     







</div>









</body>

</html>