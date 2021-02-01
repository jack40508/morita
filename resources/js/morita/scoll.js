var elements = document.getElementsByClassName("animate_fade-in");


/*scoll*/
$(window).scroll(function(){

    var windows_bottom = $(window).scrollTop()+$(window).height();
    var window_top = $(window).scrollTop();

    for (var i = 0; i < elements.length; i++) {

        //if(up to dwon or down to up)
        if(windows_bottom > $(window).height()+elements[i].offsetTop && window_top < $(window).height()+elements[i].offsetTop+elements[i].offsetHeight){
            elements[i].style.opacity="1";
            elements[i].style.animation="fadeIn 1s";
        }else{
            elements[i].style.opacity="0";
            elements[i].style.animation="";
        }
    }
})


//elements[i].offsetTop+elements[i].offsetHeight