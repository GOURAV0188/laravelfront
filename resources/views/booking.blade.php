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
    
                                               
    @include('index2')
                                
    

    <div  class="">

        <div class="grid     lg:grid-cols-2 md:grid-cols-1  mt-0      mx-auto bg-white rounded-xl overflow-hidden shadow-md ">                                                                                                                                                                
                       
            <div class=" flex items-center justify-center   h-auto">
            
            <img src="{{url('images/a10.jpg')}}"  class="h-auto    max-w-lg" alt="">                            
        
        
        
        </div>
        
        
        
        
                 <div class="bg-white   p-32     w-auto h-fit       md:my-auto">
        
          <h1  class="text-xl font-bold"> Retrieve     Booking </h1>
        
        
          <p>Enter #Itinerary Number and registered email</p>
        
        
          #ITINRARY    Number
                
        
        
          <br>
          <form action=""  >
        
                         <input type="text"  placeholder="Itinerary name "   class="border-2 p-2 text-center  w-full" >
             
                
        <br> <br>
                             <label for="">    Email</label>  <br>
        
        
                               <input type="email"        placeholder="Email"   class="border-2  p-2  text-center w-full">
               
                               
                                <button  class="bg-orange-400 hover:bg-orange-500 text-white mt-20 w-full font-bold py-2 px-4 border border-blue-700 rounded">  View Booking </button>
                        </form>
               
                    </div>
        </div>
        

    </div>
@include('footer')

    </body>
</html>