// MODAL 
const openModal = () => {
    document.getElementById("myModal").style.opacity = "1";
  }
  
  const closeModal = () => {
    document.getElementById("myModal").style.opacity = "0";
  }

  let mainNav = document.getElementById("js-menu");
  let navBarToggle = document.getElementById("js-navbar-toggle");
  
  navBarToggle.addEventListener("click", function() {
    mainNav.classList.toggle("block");
  });
  
/* CHANGE MODAL IMAGE
 $(document).ready(function(){
    $(".galleryImg").click(function() {
        $(".modalImg").attr('src', $(this).attr('src'));
    });  
});
*/