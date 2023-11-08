//typing effect
function typeEffect() {
    const text = " Welcome to the hub of water purity and innovation. Discover the \n difference – experience a world where water isn't just a necessity; it's a source of well-being.";
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

//js for toggle menu
var menuItems = document.getElementById("MenuItems")
MenuItems.style.maxHeight = "0px";

function menutoggle() {
    if (MenuItems.style.maxHeight == "0px") {
        MenuItems.style.maxHeight = "200px";
    } else {
        MenuItems.style.maxHeight = "0px";
    }
}


//s for product gallery
var productImg = document.getElementById("productImg");
var smallImg = document.getElementsByClassName("small-img");
    
smallImg[0].onclick = function() {
    productImg.src = smallImg[0].src;
}
smallImg[1].onclick = function() {
    productImg.src = smallImg[1].src;
}
smallImg[2].onclick = function() {
    productImg.src = smallImg[2].src;
}
smallImg[3].onclick = function() {
    productImg.src = smallImg[3].src;
}

        