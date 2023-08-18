<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
    <script src="https://cdn.tailwindcss.com"></script>

<link rel="stylesheet" href="{{url('js/style.js')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body  class="  items-center bg-gradient-to-br">

    <!-- The wrapper of tabs -->
    <div class="drop-shadow-lg   opacity-80 ">
        <!-- Tab Buttons -->    
        <div id="tab-buttons" class="flex  bg-blue-600">
            <a href="javascript:void(0)" onclick="changeTab(event, 0)"
                class="inline-block px-8 py-3 bg-white text-blue-600">
                
                
                
                <i class="fa-solid fa-bed fa-lg"></i> bed
            </a>

                <a href="javascript:void(0)" onclick="changeTab(event, 1)" class="inline-block px-8 py-3 text-white">
                
                    <i class="fa-solid fa-plane-circle-check fa-lg"></i>Flights
                </a>
            <a href="javascript:void(0)" onclick="changeTab(event, 2)" class="inline-block px-8 py-3 text-white">
            
            
                <i class="fa-sharp fa-solid fa-bus fa-lg"></i>Bus(india)
            </a>


            <a href="javascript:void(0)" onclick="changeTab(event, 3)" class="inline-block px-8 py-3 text-white">
            
            
                <i class="fa-solid fa-earth-americas fa-lg"></i>Tour
            </a>



        </div>

        <!-- Tab Panels -->
        <div id="tab-panels" class="bg-white px-8 py-6        ">
            <div  class="grid-cols-4   gap-2   ">
  <div  class="flex">
      <p>where  are you travelling</p>


        <input type="text"  placeholder="where  are you travelling"       class="border-4     bg-slate-300">
  </div>



  <div  class="flex">


     <p> Travels Date</p>


     <input type="date"    >
  </div>


    <div  class="flex">

        <p>Travelers</p>


        <input type="text"  placeholder="1 Room(s) 2 Guest(S)"  class="border-4   bg-slate-300  text-white ">

    </div>


    <div>

         <input type="submit"  value="search"  class="text-white   bg-slate-900  ">
    </div>

                
            </div>

            <div class="hidden">
  <div  class="  flex    grid-cols-6  gap-4">


            <input type="radio"  value="oneway"   name="trip">One way

            <input type="radio"  value="road trip"   name="trip">road trip

       
flying from:
  <input type="text"  placeholder=" delhi,india"  class="border-4   bg-slate-300">
        <div>



  <div  class="flex">

    flying to:
    <input type="text"  placeholder="arrival city   or airport"  class="border-4  bg-slate-500">

  </div>

    <div  class="flex">

        Depart
         <input type="date"  class="border-4   bg-slate-400">
    </div>




        </div>


  </div>

            </div>

            <div class="hidden">
    

                <div  class="  grid-cols-4  gap-1">



                        <div  class="flex">


                            from :

 <br>                            <input type="text" placeholder="delhi">
                        </div>

                          <div  class=" flex">
  To:
  <br>
                              <input type="text"   placeholder="Destination"  class="border-4   bg-slate-300">

                            </div>
   <div   class=" flex">

    Depart 
       <input type="date"  class="border-4    bg-slate-300  text-white">
   </div>
    <div  class="flex">
  <br>


  <input type="submit"   value="Search"   class="border-4   bg-slate-500">
  
</div>      

</div>
       
            </div>
            <div class="hidden">



  
                <div  class="grid-cols-4  gap-3">


                    <div>
                        <p>where  are you travelling</p>
                  
                  
                          <input type="text"  placeholder="where  are you travelling"       class="border-4     bg-slate-300">
                    </div>
                  
                  
                  
                    <div>
                  
                  
                       <p> Travels Date</p>
                  
                  
                       <input type="date"    >
                    </div>
                  
                  
                      <div>
                  
                          <p>Travelers</p>
                  
                  
                          <input type="text"  placeholder="1 Room(s) 2 Guest(S)"  class="border-4   bg-slate-300  text-white ">
                  
                      </div>
                  
                  
                      <div>
                  
                           <input type="submit"  value="search"  class="text-white   bg-slate-900  ">
                      </div>
                  
                                  
                  



                </div>





                     </div>
            
        </div>

    </div>

    <!-- Javascript code -->
    <script>
        function changeTab(event, index) {
            var tabButtons = document.getElementById('tab-buttons').children;
            var tabPanels = document.getElementById('tab-panels').children;

            // Remove the active utility classes from all tabs (bg-white, text-blue-600)
            // And hide all tab content (with the "hidden" utility)
            for (var i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove('text-blue-600');
                tabButtons[i].classList.remove('bg-white');
                tabButtons[i].classList.add('text-white');
                tabPanels[i].classList.add('hidden');
       
                
            }

            // Add the active utility classes to the currently active tab (bg-white, text-blue-600)
            // And show the current tab content (remove the "hidden" utility)
            tabButtons[index].classList.remove('text-white');
            tabButtons[index].classList.add('text-blue-600');
            tabButtons[index].classList.add('bg-white');
            tabPanels[index].classList.remove('hidden');
        }
    </script>








</body>
</html>