//typing effect
function typeEffect() {
    const text = "Give your Workout \nA New Style!";
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
  