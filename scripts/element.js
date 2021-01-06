
   var headerContainer = document.querySelector(".header-container")
   var navMenu = document.querySelector(".nav-menu")
   var checkBox =  document.getElementById("check")
   var label =  document.getElementById("label")
   var id = checkBox.id
  

   checkBox.addEventListener('click',()=>{   
      if(checkBox.id == "checked"){
         headerContainer.style.gridTemplateRows = '1fr'
         navMenu.style.display = 'none'
         checkBox.id = 'check' 
         label.setAttribute('for','check')
         return true 
      }
      if(checkBox.id=="check"){
         headerContainer.style.gridTemplateRows = '1fr 1fr'
         navMenu.style.display = 'flex'
         navMenu.style.flexDirection = 'column'
         checkBox.id = 'checked'
         label.setAttribute('for','checked')
         return true
      }
   })
   


 
