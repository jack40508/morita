Array.from(document.getElementsByClassName('a-news-page')).forEach(function(linkNewsPage) {

    linkNewsPage.onclick = function() {
        var page_id = parseInt(this.id.replace(/[^0-9]/ig,""));
        //console.log(page_id);

        $.ajax({
            type: "get",
            url: "/news/page/" + page_id,
            data: "",
            cache: false,
            success: function(data){
              $('#news-area').html(data);
            }
        });
    }

});

