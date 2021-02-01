Array.from(document.getElementsByClassName('a-news-page')).forEach(function(linkNewsPage) {

    linkNewsPage.onclick = function() {
        var page_id = parseInt(this.id.replace(/[^0-9]/ig,""));

        if(search == null){
            $.ajax({
                type: "get",
                url: "/news/page/" + page_id,
                data: "",
                cache: false,
                success: function(data){
                  $('#news-area').html(data);
                }
            });
        }else{
            $.ajax({
                type: "get",
                url: "/news/page/" + search + "/" + key + "/" + page_id,
                data: "",
                cache: false,
                success: function(data){
                  $('#news-area').html(data);
                }
            });
        }

    }

});

