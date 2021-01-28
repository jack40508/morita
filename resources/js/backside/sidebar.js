var location = window.location.href.toString();

if(location.search("news") != -1){
    document.getElementById('collapseNews').classList.add("show");
}else if(location.search("product") != -1){
    document.getElementById('collapseProduct').classList.add("show");
}