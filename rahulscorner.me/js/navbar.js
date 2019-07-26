/* 
JavaScript source code
Author: Rahul Eswar
Title: Navigation Bar Scripts
Description: This script function will change the navbar background from transparent to opaque, as well as the
text color as the user scrolls
*/

window.onscroll = function () { navSizer(); scrollNavHide() };
window.onresize = function () { navSizer() };

//This function will only perform action if screen size is greater than 900px
function navSizer() {

    if ($(window).width() > 900) {
        if (window.scrollY >= 170) {
            document.getElementById("navigation-bar-full").style.padding = "2rem 0";
            document.getElementById("navigation-bar-full").style.paddingBottom = "0.5rem";
            document.getElementById("navigation-bar-full").style.background = "#000000";
        }
        else {
            document.getElementById("navigation-bar-full").style.padding = "3.2rem 0";
            document.getElementById("navigation-bar-full").style.background = "transparent";
        }
    }
    else {
        document.getElementById("navigation-bar-full").style.padding = "10px 0";
        document.getElementById("navigation-bar-full").style.background = "#000000";
    }

    const sideBarWidth = document.getElementById("nav-links").style.width;

    if ((sideBarWidth == "0px") || (sideBarWidth == "100%")) {
        document.getElementById("nav-links").style.width = "";
    }
}

//Function to open collapsable side menu for medium and small screens
function toggleSideNav() {

    var navItems = document.getElementsByClassName("nav-item");

    if ((document.getElementById("nav-links").style.width == "0px") || (document.getElementById("nav-links").style.width == "")) {
        document.getElementById("nav-links").style.width = "100%";
    }
    else if (document.getElementById("nav-links").style.width == "100%") {
        document.getElementById("nav-links").style.width = "0px";
    }

    /*Timeout on this function so that burger icon changes only after nav-items rolled out
     * This was made necessary by the soft keyboard on mobile devices
     * When the slide out navigation bar fails to load, the burger icon will remain as it should*/
    setTimeout(function () {
        if (document.getElementById("nav-links").style.width == "0px") {
            document.getElementById("burger").classList.remove("burgerChange");

            for (i = 0; i < navItems.length; i++) {
                navItems[i].style.animation = "";
            }
        }
        else if (document.getElementById("nav-links").style.width == "100%") {
            document.getElementById("burger").classList.add("burgerChange");

            for (i = 0; i < navItems.length; i++) {
                navItems[i].style.animation = "navItemsAppear 250ms forwards " + (i / 7) + "s";
            }
        }
    }, 250);
}

//This function hides the overlay navigation menu if the user scrolls while overlay is open
function scrollNavHide() {
    console.log("function called");

    if (document.getElementById("burger").classList.contains("burgerChange")) {

        document.getElementById("burger").classList.remove("burgerChange");

        var navItems = document.getElementsByClassName("nav-item");

        for (i = 0; i < navItems.length; i++) {
            navItems[i].style.animation = "";
        }
    }
}