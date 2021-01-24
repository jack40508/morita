var btnAddSizeprice = document.getElementById('btn-add-sizeprice');
var limitCheck = document.getElementById('limit-check');

//Add Size Price
btnAddSizeprice.onclick = function() {

    sizeprice_id++;

    var newDivSizeprice = document.createElement('div');
    newDivSizeprice.className = "form-group row";
    newDivSizeprice.id = "div-sizeprice" + sizeprice_id;

    // Add Element in newDivSizeprice
    var newInputSize = document.createElement('input');
    newInputSize.className = "form-control col-md-2 col-4 offset-md-2";
    newInputSize.name = "size[]";
    newInputSize.type= "text";
    newInputSize.required = true;


    var newInputPrice = document.createElement('input');
    newInputPrice.className = "form-control col-md-2 col-4 offset-md-1 offset-1";
    newInputPrice.name = "price[]";
    newInputPrice.type= "text";
    newInputPrice.required = true;

    var newBtnDeleteSizeprice = document.createElement('button');
    newBtnDeleteSizeprice.className = "btn btn-danger col-md-2 offset-1 col-2";
    newBtnDeleteSizeprice.type = "button";
    newBtnDeleteSizeprice.id = "btn-delete-sizeprice" + sizeprice_id;
    newBtnDeleteSizeprice.innerHTML = "削除";

    newBtnDeleteSizeprice.onclick = function(){
        var btn_id = parseInt(this.id.replace(/[^0-9]/ig,""));
        //console.log(btn_id);
        var deleteDivSizeprice = document.getElementById("div-sizeprice" + btn_id);

        var divSizeprice = document.getElementById("div-sizeprice");
        divSizeprice.removeChild(deleteDivSizeprice);
    }

    newDivSizeprice.appendChild(newInputSize);
    newDivSizeprice.appendChild(newInputPrice);
    newDivSizeprice.appendChild(newBtnDeleteSizeprice);

    // 要素を追加する「親要素」を指定する。
    var divSizeprice = document.getElementById("div-sizeprice");
    // 要素を追加する
    divSizeprice.appendChild(newDivSizeprice);
};

//Size price delete button
for(i=2; i<=sizeprice_id; i++){

    btnDeleteSizeprice = document.getElementById("btn-delete-sizeprice" + i);

    btnDeleteSizeprice.onclick = function(){
        var btn_id = parseInt(this.id.replace(/[^0-9]/ig,""));
        var deleteDivSizeprice = document.getElementById("div-sizeprice" + btn_id);
        
        var divSizeprice = document.getElementById("div-sizeprice");
        divSizeprice.removeChild(deleteDivSizeprice);
    }

}

//Chek limit date
limitCheck.onclick = function() {
    var dateStart = document.getElementById('date-start');
    var dateEnd = document.getElementById('date-end');

    if (limitCheck.checked == true){
        dateEnd.disabled = false;
        dateStart.required = true;
        dateEnd.required = true;
    } else {
        dateEnd.disabled = true;
        dateStart.required = false;
        dateEnd.required = false;
    }
};