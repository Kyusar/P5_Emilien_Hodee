/* Popup de connexion */

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

  /* Double check password */

  function validation(f) {
    if (f.pass1.value == '' || f.pass2.value == '') {
      alert('Tous les champs ne sont pas remplis');
      f.pass1.focus();
      return false;
      }
    else if (f.pass1.value != f.pass2.value) {
      alert('Ce ne sont pas les mêmes mots de passe!');
      f.pass1.focus();
      return false;
      }
    else if (f.pass1.value == f.pass2.value) {
      return true;
      }
    else {
      f.pass1.focus();
      return false;
      }
    }