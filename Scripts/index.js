function halls() {
    var halls = document.querySelectorAll(".halls");
  
    for (var i = 0; i < halls.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = halls[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        halls[i].classList.add("active");
      } else {
        halls[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", halls);


  function aboutmain() {
    var aboutmain = document.querySelectorAll(".aboutmain");
  
    for (var i = 0; i < aboutmain.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = aboutmain[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        aboutmain[i].classList.add("active");
      } else {
        aboutmain[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", aboutmain);