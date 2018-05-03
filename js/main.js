var url = new URL(window.location.href);

$(function(){

    var option= url.searchParams.get("option");

    var user_href = $('#taikhoan').attr('href');
    var userUrl = new URL(user_href);
    var userId=userUrl.searchParams.get("id");

    if( (option =='nghe1bh' || option=='playvideo' || option=='nghe_playlist') && userId != null ) {
        var ref_id;

        if(option == 'nghe_playlist') {
            ref_id = url.searchParams.get("plId");//Playlist Id from url
        }else{
            ref_id = url.searchParams.get("id");//Playlist Id from url
        }
        console.log(ref_id);


        var base_url = $('#taikhoan').attr('base-url');

        var url_playlist_is_in_wishlist = base_url + '/controllers/xuly.php?task=check_in_wishlist&option=' + option + '&ref_id=' + ref_id + '&user=' + userId;
        $.ajax({
            async: false,
            url: url_playlist_is_in_wishlist,
            type: "POST",
            success: function (data) {
                console.log(data);

                if (data.trim() != '0') {
                    $('#wishlist').removeClass('uncheck').addClass('check');
                }
            }
        });
    }




    $('#wishlist').click(function(){
        if( (option =='nghe1bh' || option=='playvideo' || option=='nghe_playlist') && userId != null ) {
            var ref_id;

            if (option == 'nghe_playlist') {
                ref_id = url.searchParams.get("plId");//Playlist Id from url
            } else {
                ref_id = url.searchParams.get("id");//Playlist Id from url
            }
            var base_url = $('#taikhoan').attr('base-url');

            var url_server = base_url + '/controllers/xuly.php?task=upd_wishlist&option=' + option + '&ref_id=' + ref_id + '&user=' + userId + '&check=';
            if ($(this).hasClass('check')) {
                $(this).removeClass('check').addClass('uncheck');
                url_server += 'uncheck';
            } else {
                $(this).removeClass('uncheck').addClass('check');
                url_server += 'check';
            }

            $.ajax({
                async: false,
                url: url_server,
                type: "POST",
                success: function (data) {
                    console.log(data);
                    console.log("SUCCESS");
                }
            })
        }

    });
})