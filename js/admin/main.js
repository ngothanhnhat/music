$( function() { 
    
    $(".delete-baihat").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
        var parsedUrl = new URL(href);
        var id = parsedUrl.searchParams.get("id");
        var tenbh = $("#baihat_"+ id).text();
    if (confirm("Bạn có muốn xóa bài hát " +tenbh+ " không!")) {
      window.location.href = href;
    } 
    });


    
    $(".delete-casi").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
        var parsedUrl = new URL(href);
        var id = parsedUrl.searchParams.get("id");
        var TenCaSi = $("#casi_"+ id).text();
    if (confirm("Bạn có muốn xóa ca si " +TenCaSi+ " không!")) {
      window.location.href = href;
    } 
    
    });
    
    $(".delete-chude").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
        var parsedUrl = new URL(href);
        var id = parsedUrl.searchParams.get("id");
        var TenChuDe = $("#chude_"+ id).text();
    if (confirm("Bạn có muốn xóa chủ đề " +TenChuDe+ " không!")) {
      window.location.href = href;
    } 
    
    });
    
    $(".delete-theloai").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
        var parsedUrl = new URL(href);
        var id = parsedUrl.searchParams.get("id");
        var TenTheLoai = $("#theloai_"+ id).text();
    if (confirm("Bạn có muốn xóa thể loại " +TenTheLoai+ " không!")) {
      window.location.href = href;
    } 
    
    });
    $(".delete-playlist").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
        var parsedUrl = new URL(href);
        var id = parsedUrl.searchParams.get("id");
        var TenPlayList = $("#playlist_"+ id).text();
    if (confirm("Bạn có muốn xóa playlist " +TenPlayList+ " không?")) {
      window.location.href = href;
    } 
    
    });
    
    $(".delete-user").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
        var parsedUrl = new URL(href);
        var id = parsedUrl.searchParams.get("id");
        var UserName = $("#user_"+ id).text();
    if (confirm("Bạn có muốn xóa user " +UserName+ " không?")) {
      window.location.href = href;
    } 
    
    });

    $(".delete-playlist").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
        var parsedUrl = new URL(href);
        var id = parsedUrl.searchParams.get("id");
        var TenPlaylist = $("#playlist_"+ id).text();
    if (confirm("Bạn có muốn xóa playlist " +TenPlaylist+ " không?")) {
      window.location.href = href;
    } 
    
    });


    $(".delete-video").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href'); 
        var parsedUrl = new URL(href);
        var id = parsedUrl.searchParams.get("id");
        var TenVideo = $("#video_"+ id).text();
    if (confirm("Bạn có muốn xóa video " +TenVideo+ " không?")) {
      window.location.href = href;
    } 
    
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
        
          reader.onload = function(e) {
            $('#image_preview').attr('src', e.target.result);
          }
        
          reader.readAsDataURL(input.files[0]);
        }
    }
        
    $("#hinh").change(function() {
        readURL(this);
    });

});

