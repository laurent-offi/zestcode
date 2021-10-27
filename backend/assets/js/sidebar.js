function openSidebar() {
    document.querySelector(".responsive-sidebar").style.display = "none";
    document.querySelector(".responsive-close").style.display = "flex";
    if ($(window).width() < 500) {
        document.getElementById("sidebar").style.width = "100%";
    } else if ($(window).width() > 500) {
        document.getElementById("sidebar").style.width = "50%";
    }
}  

function closeSidebar() {
    document.querySelector(".responsive-sidebar").style.display = "flex";
    document.querySelector(".responsive-close").style.display = "none";
    document.getElementById("sidebar").style.width = "0";
}
