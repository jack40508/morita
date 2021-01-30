var conseptDivText2 = document.getElementById('conseptDivText2');
var imgConsept1 = document.getElementById('imgConsept1');

if(window.matchMedia("(min-width: 768px)").matches){
    conseptDivText2.style.height = $(window).height()*0.1+imgConsept1.offsetHeight+'px';
}