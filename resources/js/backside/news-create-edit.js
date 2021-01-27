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