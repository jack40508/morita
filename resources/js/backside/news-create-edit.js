const { forEach } = require("lodash");

var checkNewtag = document.getElementById('check_newtag');
var checkUploaddatetime = document.getElementById('check_uploaddatetime');

//Chek newtag other
checkNewtag.onclick = function() {
    var textNewtag = document.getElementById('text_newtag');

    if (checkNewtag.checked == true){
        textNewtag.disabled = false;
        textNewtag.required = true;
    } else {
        textNewtag.disabled = true;
        textNewtag.required = false;
    }
};

//Check uploadtime
checkUploaddatetime.onclick = function() {
    var datetimeuploaddatetime = document.getElementById('datetime-uploaddatetime');

    if (checkUploaddatetime.checked == true){
        datetimeuploaddatetime.disabled = false;
        datetimeuploaddatetime.required = true;
    } else {
        datetimeuploaddatetime.disabled = true;
        datetimeuploaddatetime.required = false;
    }
};

//Selete delete news img
newsimageIDs.forEach( function(newsimageIDs) {

    var btnNewsOriginalImg = document.getElementById('btnNewsOriginalImg' + newsimageIDs);
    btnNewsOriginalImg.onclick = function() {
        var divNewsOriginalImg = document.getElementById('divNewsOriginalImg' + newsimageIDs);
        var newsOriginalImg = document.getElementById('newsOriginalImg' + newsimageIDs);

        if(divNewsOriginalImg.style.opacity == 1 || divNewsOriginalImg.style.opacity == ""){
            divNewsOriginalImg.style.opacity = 0.5;
            newsOriginalImg.value = -1;
        }else{
            divNewsOriginalImg.style.opacity = 1;
            newsOriginalImg.value = newsimageIDs;
        }

    };
});

//Set tag default
checkedNewstags.forEach( function(checkedNewstag){

    var checkNewstag = document.getElementById('checkNewstag' + checkedNewstag);
    checkNewstag.checked = true;
});