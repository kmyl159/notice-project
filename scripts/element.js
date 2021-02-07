
   var responsiveContainer = document.querySelector(".responsive-container")
   var nav = document.querySelector(".nav")  
   var checkBox =  document.querySelector(".responsive")
   
   checkBox.addEventListener('click',()=>{   
      responsiveContainer.classList.toggle("none");
      nav.classList.toggle("none");
   })
   
   window.addEventListener('resize',()=>{
      if(window.innerWidth > 500){
         responsiveContainer.classList.remove("none")
         nav.classList.remove("none");
      }
   })


 
