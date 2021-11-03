function openNav() {
    if ($(window).width() < 500) {
    document.getElementById("mySidenav").style.width = "100%";
    } else if ($(window).width() > 500) {
        document.getElementById("mySidenav").style.width = "50%";
    }
}  

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}