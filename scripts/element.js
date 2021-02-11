
document.addEventListener("DOMContentLoaded", ResponsiveMenu())
document.addEventListener("DOMContentLoaded", Active())

function ResponsiveMenu(){
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

}

function Active(){
   var url = window.location.pathname;
   var index = document.querySelector("#logo");
   var cadastro = document.querySelector("#cadastro");
   var span = document.createElement("spam");
   span.classList.add("active")
   
   if(url == "/aulaphp/index.php"){
      index.appendChild(span);
   }
   if(url == "/aulaphp/cadastrar-noticia.php"){
      cadastro.appendChild(span);
   }

}