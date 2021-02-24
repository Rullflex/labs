$(document).ready(function() {
    $('#doNotClick').click(function() {
        var xhr = $.get("http://api.giphy.com/v1/gifs/random?tag=cat&api_key=4bQGntJ6K9hACaOmTOxPABMk9bbt3RMy&limit=1");
        xhr.done(function(data) { 
            console.log("success got data", data); 
            $('#hidden-gif').css('display', 'flex');
            let src = data.data.images.fixed_height.url;
            $('#gif-img').attr('src', src)
        });
        
    });
    $('#hidden-gif').click(function() {
        $('#hidden-gif').css('display', 'none');
    });

});