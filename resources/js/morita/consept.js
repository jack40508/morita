var conseptDivText2 = document.getElementById('conseptDivText2');
var conseptText2 = document.getElementById('consept-text-2');
var imgConsept1 = document.getElementById('imgConsept1');

if(window.matchMedia("(min-width: 768px)").matches){
    conseptDivText2.style.height = $(window).height()*0.1+imgConsept1.offsetHeight+'px';
    conseptDivText2.style.backgroundColor = 'color';
    conseptText2.style.position = 'absolute';
    conseptText2.style.right = 0;
    conseptText2.style.bottom = 0;
}
