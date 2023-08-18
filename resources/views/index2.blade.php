<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jquery-3.6.4.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>


<nav  class="p-5     shadow  md:flex md:items-center bg-orange-400  md:justify-between ">



<div  class="   justify-between    items-center   ">



  <span  class="text-2xl font-[Poppins]    cursor-pointer">

<div   class="text-base        justify-between  text-white">
 <p  class="  inline-block   ">

  <i class="fa-solid fa-phone fa-lg"></i> 
  +918948439992
 </p>

 <p  class="inline-block">
|<i class="fa-sharp fa-solid fa-envelope"></i>
  info@mycartbox.com

 </p>
  
</div>


  </span>

<span  class="text-3xl cursor-pointer text-center  md:hidden   block">



  <ion-icon name="menu-outline"  onclick="Menu(this)"></ion-icon>



</span>
</div>




<div  class="">


<ul   class="md:flex       md:list-container  z-[1] md:z-auto  md:static  absolute bg-orange-400   p-56     text-white w-full  left-0   md:w-auto  md:py-0  py-4   md:pl-50  pl-7   md:opacity-100 opacity-0  top-[-400px]   transition-all ease-in duration-500 ">




    <li     class="mx-4   "><a href=""  class="text-xl  hover:text-cyan-500  duration-500"> 
      
      <i class="fa-brands fa-facebook-f fa-lg"></i>
    
    </a></li>
    <li class="mx-4 "><a href=""  class="text-xl  hover:text-cyan-500  duration-500"> 
      
      <i class="fa-brands fa-twitter fa-lg"></i>
  
    
    </a></li>
    <li  class="mx-4 "><a href=""  class="text-xl  hover:text-cyan-500  duration-500"> 
      
      <i class="fa-brands fa-instagram fa-lg"></i>
    
    </a></li>
    <li  class="mx-4"><a href=""  class="text-xl  hover:text-cyan-500  duration-500"> 
      
      <i class="fa-sharp fa-solid fa-envelope fa-lg"></i>
    
    
    
    </a></li>
    <li  class="mx-4  "><a href=""  class="text-xl  hover:text-cyan-500  duration-500"> 
      
      <i class="fa-brands fa-whatsapp fa-lg"></i>
    
    </a></li>
  
  
  
    <div>
  
  
  
  
    </div>
  
  </ul>
  
</div>
</nav>



<div  class="grid lg:grid-cols-3  w-full   h-fit  bg-white">





  <div  class="  flex text-bold items-center justify-center  ">


    <i class="fa-solid fa-cart-shopping  fa-xl">
    
    </i>
   <h1  class="text-bold">My Cart</h1>



  </div>


<div  class="   md:ml-0  md:m-1">



  <ul   class="flex  p-6   justify-between">


    <li ><a href="{{url('/')}}">home</a></li>
  |  
  
  <li><a href="{{url('/booking')}}">My Booking</a></li>
   | <li><a href="{{url('contact')}}">Contact Us</a></li>
    |<li><a href="{{url('/visa')}}">Visa </a></li>
    |<li><a href="{{url('/webcheck')}}">Web Check-In</a></li>

  </ul>
</div>

<div  class="flex items-center justify-center">



  <button  class="border-2   bg-orange-400   rounded-lg p-2 mt-5">
    
    <a href="{{url('/login')}}">
      Customer login

    </a>
   </button>
</div>


</div>

<script>




    function Menu(e){




  let list   =   document.querySelector('ul');


      e.name ===  'menu' ? (e.name ="close",list.classList.add('top-[80px]'),list.classList.add('opacity-100') ) :(e.name  = "menu",list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }


</script>





    </body>
</html>