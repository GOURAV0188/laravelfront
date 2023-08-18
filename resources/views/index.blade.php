<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <title>Document</title>
</head>
<body>
@include('index2')





 <div class="w-full h-screen bg-center bg-cover  mb-32"  style="background-image:url('images/a6.jpg')">

<h1 class="text-center   py-48  text-white  text-6xl ">Find Next Place To Visit</h1>
  {{-- <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio, fugit explicabo. Enim, quibusdam recusandae? Voluptas, perferendis tempore ab sint assumenda minus accusantium non quis praesentium. Quia culpa dolor voluptate ratione!</p> --}}

 <p  class="text-center text-lg text-white">Discover amzaing places at exclusive deals</p>



 
  <div  class="absolute   insert-0 ">





  @include('index5')
</div>

</div>
  


<div class="max-w-[1320px]  mx-auto  ">
  {{-- <img src="https://abengines.com/wp-content/themes/adivaha_main/images/visa/way_c1.png" alt=""> --}}
  
      </div>
  
  
      <div class="max-w-[1320px] mx-auto p-auto grid lg:grid-cols-3 md:grid-cols-1  gap-4 px-20px ">
  
  
  <div  class="text-center  shadow-lg rounded ">
  
      <div  class="overflow-hidden  text-center">
  
          <img src="https://travel.mycartbox.com/images/tvicon1.1.png"  class="
  
          hover:scale-125  duration-1000   bg-orange-400
   rounded-3xl        mx-auto
          " alt="">
          
  
</div>
  
  
  
   <h3  class="py-10 text-xl ">700+ DESTINATIONS</h3>
  <p>Our expert team handpicked all destinations in this site</p>
  </div>
  
  
  
  
  <div  class="text-center  shadow-lg rounded">
  
      <div  class="overflow-hidden  text-center">
  
          <img src="https://travel.mycartbox.com/images/tvicon2.1.png"  class="
  
          hover:scale-125  duration-1000  rounded-3xl    bg-orange-400
          mx-auto
          " alt="">
          
  
      </div>
  
  
  
   <h3  class="py-10 text-xl">BEST PRICE GUARANTEE</h3>

   
    <p>Price match within 48 hours of order confirmation</p>
  </div>
  
  
  
  <div  class="text-center  shadow-lg rounded">
  
      <div  class="overflow-hidden  text-center">
  
          <img src="https://travel.mycartbox.com/images/tvicon3.png"  class="
  
          hover:scale-125  duration-1000  rounded-3xl   bg-orange-500
          mx-auto
          " alt="">
          
  
      </div>
  
  
  
   <h3  class="py-10 text-xl">TOP NOTCH SUPPORT</h3>
  <p>We are here to help before during and even after your trip</p>
  </div>
  
  
  

      </div>


















<div class="container  py-72 bg-slate-200">
  <h1  class="text-center   text-4xl  font-semibold">Popular Destinations</h1>


           {{-- <hr> --}}

 <br><br>

 <p  class="text-center    text-orange-500">Top   destination in the  world Best   places  in 2020  21  selected  destinations  have  just   competed      for the
     <br>

            prestigious  title   of Best Destination  2021

    </p>



 <div>



    

    <div class="w-[1200px]  bg-white    text-black      mx-auto    grid     lg:grid-cols-2">
           <div class="  w-full   hover:bg-slate-400  h-96   mb-10    border-2">

              

 <h1>   Agra  </h1>

   <h2>India</h2>
   <p>  view   all   Hotels</p>

           </div>
 <div class="w-full   h-80 border-2  p-32     mx-10">
        </div>
</div>
</div>
<div class="w-[1200px]  bg-white    text-black    mt-11  mx-auto    grid     lg:grid-cols-3">
<div class="  bg-slate-600 text-center     border- ">
</div>
<div class="  bg-slate-600   text-center     border-3 ">


</div>

<div class="  bg-slate-600   text-center     border-3 ">


</div>


</div>




</div>
</div>

@include('footer')



</body>
</html>