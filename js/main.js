$(function(){
    var albumUrl = new URL(window.location.href);
    var albumId= albumUrl.searchParams.get("id");

    var user_href = $('#taikhoan').attr('href'); 
    var userUrl = new URL(user_href);
    var userId=userUrl.searchParams.get("id");

    var base_url = $('#taikhoan').attr('base-url');

    var url_album_is_in_wishlist =   base_url + '/controllers/xuly.php?task=check_album_in_wishlist&album='+albumId+'&user='+userId;
    $.ajax({
        async: false,
        url: url_album_is_in_wishlist,
        type: "POST",
        success: function(data){
            if(data != 0){
                $('#wishlist').removeClass('uncheck').addClass('check');
            }
        }
    })




    $('#wishlist').click(function(){
        var url =   base_url + '/controllers/xuly.php?task=upd_album_wishlist&album='+albumId+'&user='+userId+'&check=';
        if($(this).hasClass('check')){
           $(this).removeClass('check').addClass('uncheck');
           url += 'uncheck';
        }else{
            $(this).removeClass('uncheck').addClass('check');
            url += 'check';
        }
        
        $.ajax({
            async: false,
            url: url,
            type: "POST",
            success: function(data){
                console.log("SUCCESS");
            }
        })

    });
})