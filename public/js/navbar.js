var num = 250;

$(window).bind('scroll', function () {
    if ($(window).scrollTop() > num) {
        $('#navbar').addClass('sticky');
    } else {
        $('#navbar').removeClass('sticky');
    }
});


const sections = document.querySelectorAll("section[id]");

window.addEventListener("scroll", navHighlighter);

function navHighlighter() {
  
  let scrollY = window.pageYOffset;
  
  sections.forEach(current => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 200;
    sectionId = current.getAttribute("id");
    
    if (
      scrollY > sectionTop &&
      scrollY <= sectionTop + sectionHeight
    ){
      document.querySelector("ul li a[href*=" + sectionId + "]").classList.add("active");
    } else {
      document.querySelector("ul li a[href*=" + sectionId + "]").classList.remove("active");
    }
  });
}