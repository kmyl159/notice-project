
document.addEventListener("DOMContentLoaded", ResponsiveMenu())
document.addEventListener("DOMContentLoaded", Active())
document.addEventListener("DOMContentLoaded", BtnRender())


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
   span.classList.add("active");
   
   if(url == "/noticiaphp/index.php"){
      index.appendChild(span);
   }
   if(url == "/noticiaphp/cadastrar-noticia.php"){
      cadastro.appendChild(span);
   }

}

function BtnRender(){
   var url = window.location.pathname;
   var btn = document.createElement('input');
   var form = document.querySelector('.formulario-box');

   if(url == "/noticiaphp/box.php"){
      btn.name = "editar";
      btn.value = "editar";
      btn.type = "submit";
      form.firstElementChild.innerHTML = "EDITAR NOTICIA"
      form.appendChild(btn);
   }
   if(url == "/noticiaphp/cadastrar-noticia.php"){
      btn.name = "cadastrar";
      btn.value = "cadastrar";
      btn.type = "submit";
      form.firstElementChild.innerHTML = "CADASTRAR NOTICIA"
      form.appendChild(btn)
   }

}