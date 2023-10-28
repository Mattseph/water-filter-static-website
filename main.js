//typing effect
function typeEffect() {
    const text = " Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum  \nA dolor sit amet!";
    const element = document.getElementById('typed-text');
    let i = 0;
  
    function type() {
      if (i < text.length) {
        element.innerHTML += text.charAt(i);
        i++;
        setTimeout(type, 100); 
      } else {
        setTimeout(resetText, 1000); 
      }
    }
  
    function resetText() {
      element.innerHTML = '';
      i = 0;
      type(); 
    }
  
    type();
  }
  
  window.onload = function() {
    typeEffect();
  };

var menuItems=document.getElementById("MenuItems");
            
MenuItems.style.maxHeight="0px";
function menutoggle(){
    if(MenuItems.style.maxHeight == "0px"){
        MenuItems.style.maxHeight="200px";
    }
    else{
         MenuItems.style.maxHeight="0px";
    }
}
