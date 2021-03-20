


function openForm() {
    document.getElementById("popupForm").style.display="block";
    var divs = document.querySelectorAll("body > div:not(.popupForm)");
    document.getElementsByTagName("+divs+").style.opacity='0.5';
  }
  
  function closeForm() {
    document.getElementById("popupForm").style.display="none";
    document.getElementsByTagName("body > div:not(.popupForm)").style.opacity='1';
    /* document.body.style.opacity="1"; */
  }
