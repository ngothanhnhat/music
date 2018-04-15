$( function() { 
    
    $(".delete-baihat").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
      
        var idx = href.indexOf("=");
        var len = href.length;
        var id = href.slice(idx+1, len);
        var tenbh = $("#baihat_"+ id).text();
        console.log(tenbh);
    if (confirm("Bạn có muốn xóa bài hát " +tenbh+ " không!")) {
      console.log(href);
      window.location.href = href;
    } 
    });


});

$( function() { 
    
    $(".delete-casi").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
      
        var idx = href.indexOf("=");
        var len = href.length;
        var id = href.slice(idx+1, len);
        var TenCaSi = $("#casi_"+ id).text();
        console.log(TenCaSi);
    if (confirm("Bạn có muốn xóa ca si " +TenCaSi+ " không!")) {
      console.log(href);
      window.location.href = href;
    } 
    
    });

});

$( function() { 
    
    $(".delete-chude").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
      
        var idx = href.indexOf("=");
        var len = href.length;
        var id = href.slice(idx+1, len);
        var TenChuDe = $("#chude_"+ id).text();
        console.log(TenChuDe);
    if (confirm("Bạn có muốn xóa chủ đề " +TenChuDe+ " không!")) {
      console.log(href);
      window.location.href = href;
    } 
    
    });

});


$( function() { 
    
    $(".delete-theloai").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
      
        var idx = href.indexOf("=");
        var len = href.length;
        var id = href.slice(idx+1, len);
        var TenTheLoai = $("#theloai_"+ id).text();
        console.log(TenTheLoai);
    if (confirm("Bạn có muốn xóa thể loại " +TenTheLoai+ " không!")) {
      console.log(href);
      window.location.href = href;
    } 
    
    });

});

$( function() { 
    
    $(".delete-playlist").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
      
        var idx = href.indexOf("=");
        var len = href.length;
        var id = href.slice(idx+1, len);
        var TenPlayList = $("#playlist_"+ id).text();
        console.log(TenPlayList);
    if (confirm("Bạn có muốn xóa playlist " +TenPlayList+ " không?")) {
      console.log(href);
      window.location.href = href;
    } 
    
    });

});



$( function() { 
    
    $(".delete-user").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
      
        var idx = href.indexOf("=");
        var len = href.length;
        var id = href.slice(idx+1, len);
        var UserName = $("#user_"+ id).text();
        console.log(UserName);
    if (confirm("Bạn có muốn xóa user " +UserName+ " không?")) {
      console.log(href);
      window.location.href = href;
    } 
    
    });

});


$( function() { 
    
    $(".delete-album").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
      
        var idx = href.indexOf("=");
        var len = href.length;
        var id = href.slice(idx+1, len);
        var TenAlbum = $("#album_"+ id).text();
        console.log(TenAlbum);
    if (confirm("Bạn có muốn xóa album " +TenAlbum+ " không?")) {
      console.log(href);
      window.location.href = href;
    } 
    
    });

});

$( function() { 
    
    $(".delete-video").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
      
        var idx = href.indexOf("=");
        var len = href.length;
        var id = href.slice(idx+1, len);
        var TenVideo = $("#video_"+ id).text();
        console.log(TenVideo);
    if (confirm("Bạn có muốn xóa album " +TenVideo+ " không?")) {
      console.log(href);
      window.location.href = href;
    } 
    
    });

});





