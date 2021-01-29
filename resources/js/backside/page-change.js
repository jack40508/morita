var general = new Array();
var reserve = new Array();
var limit = new Array();

for(var i=1; i<=cntPage; i++){
    general[i] = document.getElementById('date_general'+i);
    reserve[i] = document.getElementById('date_reserve'+i);
    limit[i] = document.getElementById('date_limit'+i);

    let dateStart = document.getElementById('dateStart'+i);
    let dateEnd = document.getElementById('dateEnd'+i);

    general[i].onclick = function() {
        dateStart.disabled = true;
        dateStart.required = false;
        dateEnd.disabled = true;
        dateEnd.required = false;
    };

    reserve[i].onclick = function() {
        dateStart.disabled = false;
        dateStart.required = true;
        dateEnd.disabled = true;
        dateEnd.required = false;
    };

    limit[i].onclick = function() {
        dateStart.disabled = false;
        dateStart.required = true;
        dateEnd.disabled = false;
        dateEnd.required = true;
    };
}
