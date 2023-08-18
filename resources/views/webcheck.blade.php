<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    @include('index2')
    <div class="w-full    h-96   mb-40 bg-no-repeat  bg-center   bg-cover"  style="background-image: url('images/a15.jpg')">
    
      <div class="">

  <h3  class="text-5xl  font-bold   text-black text-center  p-5">Web Check-In</h3>


 <p  class="p-5 text-center   text-black  text-lg  ">Check-In on the web & get your boarding pass instantly!</p>

<div  class=" flex  border-black-500  border-8   mx-auto w-fit border-orange-600">



    <select id="countries" class="bg-gray-50 border  lg:p-7  lg:w-96  border-gray-300    text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="">select  Airline </option>
           <option selected>Choose a country</option>
          <option value="US">United States</option>
          <option value="CA">Canada</option>
          <option value="FR">France</option>
          <option value="DE">Germany</option>
        </select>
        

        <button  class="bg-black hover:bg-slate-800       text-white font-bold py-2 px-4 borde rounded">PROCEED</button>
       
       
</div>



<div  class="mx-auto  border-5   p-7 mt-5   rounded-lg  bg-orange-400  text-center  text-white  w-fit">
     <p  class="text-xl     font-bold   "> You will be    redirected    to your   airline's  page   for Web Check-in   on  clicking Proceed </p>


</div>
    {{-- <div  class="text-center   border-solid border-2 bg-orange-400  border-orange-400  mt-60 w-fit m-44"> --}}



        {{-- <h3>You will be redirected  to your  airline's page  for Web Check-in  on   clicking  Proceed</h3> --}}
    {{-- </div> --}}

  </div>
    
    </div>
@include('footer')
</body>
</html>