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
<body  class="min-h-screen  flex items-center   bg-gradient-to-br    from-purple-200 to-indigo-400">


































<div class="flex flex-wrap" id="tabs-id">
  <div class="w-full   flex "   style="background-color: 222D3B;" >
    <ul class="flex mb-0 list-none flex-wrap pt-3 pb-4 flex-row">
      <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-white bg-pink-600" onclick="changeAtiveTab(event,'tab-profile')">
         {{-- test start  --}}
            <div class="md:flex ">
            <div   id="tab-setting"> <i class="fa-sharp fa-solid fa-bed fa-lg"></i></div>
            <div>Hotel</div>
         </div>
         {{-- test end  --}}
        </a>
      </li>
      <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white" onclick="changeAtiveTab(event,'tab-settings')">
            
            {{-- test start  --}}
            <div class="md:flex">
                <div  id="flight"><i class="fa-sharp fa-solid fa-plane-circle-check fa-lg"></i> </div>
                <div>Flights</div>
             </div>
             {{-- test end  --}}
      
            </a>
      </li>
   
      <li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white" onclick="changeAtiveTab(event,'tab-options')">
          
          {{-- test start  --}}
          <div class="md:flex ">
            <div> <i class="fa-solid fa-bus fa-lg"></i></div>
            <div>Bus</div>
         </div>
         {{-- test end  --}} 
        </a>
      </li>
<li class="-mb-px mr-2 last:mr-0 flex-auto text-center">
        <a class="text-xs font-bold uppercase px-5 py-3 shadow-lg rounded block leading-normal text-pink-600 bg-white" onclick="changeAtiveTab(event,'tab-phone')">
            
             
            {{-- test start  --}}
            <div class="md:flex ">
                <div> <i class="fa-solid fa-earth-americas fa-lg"></i></div>
                <div>Tour</div>
             </div>
             {{-- test end  --}} 
        </a>
      </li>

    </ul>
  </div>
    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
      <div class="px-4 py-5 flex-auto">
        <div class="tab-content tab-space">
          <div class="block  m-5 " id="tab-profile">
          

                {{-- main div  --}}
                <div class="grid md:grid-cols-4 gap-2">
                    <div class="flex">
                        <div><i class="fa-duotone fa-location-dot fa-lg"></i></div>
                        <div><input type="text"   class="border-4  border-slate-900  p-2"  placeholder="where are you travling "></div>
                    </div>


                    <div class="flex">
                        <div><i class="fa-duotone fa-location-dot fa-lg"></i></div>
                        <div><input type="datetime-local"    class="border-4 p-2   border-slate-900"></div>
                    </div>
                    <div class="flex">
                        <div><i class="fa-duotone fa-location-dot fa-lg"></i></div>
                        <div><input type="text" placeholder="1Rooms(s) 2 Guest(s)"  class="border-4      border-slate-900  p-2"></div>
                    </div>
                    <div class="flex">
                        <div><i class="fa-duotone fa-location-dot fa-lg"></i></div>
                        <div><input type="submit"   value="search"  class="border-4   border-slate-900    bg-black  text-white  p-2"></div>
                    </div>

                </div>



                {{-- main div end  --}}

                {{-- main-div-second  --}}

<div class="hidden" id="tab-settings">
          


            <div class="flex">
<div>
  <input type="radio"   name="mode"  value="one way ">
</div>


<div>


   hello 
</div>


          </div>
          <div class="hidden " id="flight">



            <div  class=" flex  grid-col-4  gap-5">


<div  class="border-4  border-slate-600  ">
    From: <br>

<input type="text"  class="border-4  border-slate-900"  placeholder="delhi">


</div>

<div  class="">

      To:

      <br>
       <input type="text"  class="border-4  border-slate-900  ">
</div>

<div>

Depart 
 <br>
  <input  class="border-4   border-slate-900 " type="date" >

</div>




<div>

 <br>
   
    <input type="submit"  value="Search"  class="text-white bg-slate-900  border-4   border-slate-900">

</div>
            </div>
          </div>


 <div class="hidden" id="tab-phone">
          <div class="grid-cols-4   flex   gap-4 ">
            
        
          <div>



             i want  to go to   <br>
               <input type="text"  class="border-4  border-slate-900">
          </div>
           <div>



            Travel  Dates 
             <br>

             <input type="date"  class="border-4   border-slate-900">
           </div>


             <div>

                Travelers  <br>
                  <input type="text" placeholder="1 Guest(s)"  class="border-4    border-slate-900">

             </div>


              <div>
  <br>
                 <input type="submit"  value="Search"    class="border-4   border-slate-900">
              </div>
        </div>    
        
        
        </div>


        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function changeAtiveTab(event,tabID){
    let element = event.target;
    while(element.nodeName !== "A"){
      element = element.parentNode;
    }
    ulElement = element.parentNode.parentNode;
    aElements = ulElement.querySelectorAll("li > a");
    tabContents = document.getElementById("tabs-id").querySelectorAll(".tab-content > div");
    for(let i = 0 ; i < aElements.length; i++){
      aElements[i].classList.remove("text-white");
      aElements[i].classList.remove("bg-pink-600");
      aElements[i].classList.add("text-pink-600");
      aElements[i].classList.add("bg-white");
      tabContents[i].classList.add("hidden");
      tabContents[i].classList.remove("block");
    }
    element.classList.remove("text-pink-600");
    element.classList.remove("bg-white");
    element.classList.add("text-white");
    element.classList.add("bg-pink-600");
    document.getElementById(tabID).classList.remove("hidden");
    document.getElementById(tabID).classList.add("block");
  }
</script>



</body>
</html>