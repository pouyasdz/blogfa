 const element = document.querySelector("main");
 function disableScrolling() { 
    setTimeout(function() { 
      element.style.overflow = 'hidden'; 
    }, 1000); 
} 
  
function enableScrolling() { 
    element.style.overflow = ''; 
} 