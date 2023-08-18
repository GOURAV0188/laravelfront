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
   
    
@include('index2');


{{-- <div class="container"> --}}

    <div class="md:mt-40">



    </div>
    <div class="w-full   bg-cover    bg-center" style="background-image:url('images/a89.jpg')"><h1 class="text-6xl pt-96 pb-96   text-white  font-bold  flex items-center  justify-center  ">Contact  Us</h1></div>

          

<div  class="grid   lg:grid-cols-2     w-full  lg:mx-60   md:grid-cols-1  gap-2">


    <div class="max-w-md mx-auto bg-white   rounded-xl overflow-hidden shadow-md">
      <div class="p-6">
    

        <div class="bg-white[] text-black">

          <h1  class="text-4xl   font-sans   font-semibold  p-5">  Get In Touch/Contact Us:</h1>
      
      
          <p>
             Please fill the form on your right and get in touch with our support team will answer your questions
         </p>  
         
      
         <ol class="     ">
      <li  class="px-3  py-5  inline-block">
      
        <i class="fa-solid fa-map fa-2xl" style="color: #e19223;"></i>
       
      
        Company Address
      
        <br>
      
               1334 Fazil Nagar Lucknow Uttar Pradesh India
      
      </li>
      
      <li  class="mx-5    py-5"  >
      
      <i class="fa-solid fa-phone  fa-2xl "  style="color: #e19223;"> </i>
      
      
      Phone: 
         <br>+918948439992
      </li>
      
      
      
      <li  class="mx-4  py-5">
      
      
      
      <i class="fa-regular fa-envelope  fa-2xl"   style="color:#e19223;"></i>
      
      Email:  
      <br>info@mycartbox.com
      </li>
      
      </ol>
      
      
      
             
      
      
      
      
      
      
      
          </div>
      
      
      
      
        <div  class="bg-white[]">
                <h1  class="  text-4xl   font-sans   font-semibold  p-5"> Send      Us A   Message </h1>
              <form action="">
      
               <br><br>
          
          
      
               <div class="">
      
                  <input type="text"   class="px-5 py-3  w-full  bg-slate-100    
      
                  rounded-lg  border-2" placeholder="Full Name">
      
              </div>
          
                    <br><br>
      
                    <div>
                    <input type="text"  placeholder="phone"   class="   
                    px-5 py-3       w-full         bg-slate-100    rounded-lg  border-2" >
                 
                    </div>
      
      
      
      
      
                 
                  <br>
                   <br>
      
      
                 <div>
                     <input type="text" placeholder="email"   class="   
                     px-5 py-3  bg-slate-100  w-full    rounded-lg  border-2">
                 </div>
      
      
                  <br>  <br>
                
                   <div>
      
                    <textarea name="" id="" cols="30" rows="5"      class="     px-5 py-3
                     bg-slate-100    rounded-lg  border-2  w-full"  placeholder="Address"></textarea>
                  </div>
      
        
                    <br>
      
                  <div>
                     <button class="bg-orange-500   text-center  will-change-auto  text-white font-bold mt-4 px-4 py-2">
                          Submit 
                      </button>
                 
                 
                  </div>
      
                  
              </form>
      
      
        </div>
      
          </div>
      



      </div>
    </div>

      <br><br> <br>
  </div>
      @include('footer');









</body>
</html>