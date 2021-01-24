document.getElementById('search_name').value = search_name;

for(i=0; i<check_productkategories.length; i++){
    document.getElementById('check_productkategories' + check_productkategories[i]).checked = true;
}

for(i=0; i<check_status.length; i++){
    document.getElementById('check_status' + check_status[i]).checked = true;
}