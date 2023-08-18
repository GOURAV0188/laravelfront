import './asssets/css/app.css';

let    tabs =  document.querySelectorAll(".tab");


let  indicator   =  document.querySelector(".indicator");



 let panels =   document.querySelectorAll(".tab-panel");



indicator.style.width = tabs[0].getBoundingClientRect().with +'px';

indicator.style.left = tabs[0].getBoundingClientRect().left  -  tabs[0].parentElement.getBoundingClientRect().left + 'px'





tabs.forEach(tab  =>  {


    tab.addEventListener("click",()=>{


          let tabTarget = tab.getAttribute("aria-controls")
indicator.style.width = tabs[0].getBoundingClientRect().with + 'px';

indicator.style.left = tabs[0].getBoundingClientRect().left  - tab.parentElement.getBoundingClientRect().left + 'px'




panels.forEach(panel   => {

     let  panelId = panel.getArrtribute("id")
     if(tabTarget ===  panelId){


        panel.class.remove("invisible","opacity-100")
        panel.classList.add("visible","opacity-100")




     }else{

        // panel.classList.remove("invisible","opacity-100")
panel.classList.add("invisible","opacity-0")



     }


})



    })
  })