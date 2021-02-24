
$(window).scroll(function() {
    var st = $(this).scrollTop();
    $("main").css({
        "background-position" : "10vw " + (-300 + st/1.5) + "px"
        
    });
});

$('#d2703').append("<i class='fas fa-circle'></i>");
$('#d2703').children("i").attr("data-toggle", "tooltip");
$('#d2703').children("i").attr("data-trigger", "hover");
$('#d2703').children("i").attr('title', 'Новое сообщение для студентов');
$('#d0304').append("<i class='fas fa-circle'></i>");
$('#d0304').children("i").attr("data-toggle", "tooltip");
$('#d0304').children("i").attr("data-trigger", "hover");
$('#d0304').children("i").attr('title', 'Новое сообщение для студентов');
$('#d0904').append("<i class='fas fa-circle'></i>");
$('#d0904').children("i").attr("data-toggle", "tooltip");
$('#d0904').children("i").attr("data-trigger", "hover");
$('#d0904').children("i").attr('title', 'Новое сообщение для студентов');
$('#d1504').append("<i class='fas fa-circle'></i>");
$('#d1504').children("i").attr("data-toggle", "tooltip");
$('#d1504').children("i").attr("data-trigger", "hover");
$('#d1504').children("i").attr('title', 'Новое сообщение для студентов');
$('#d2104').append("<i class='fas fa-circle'></i>");
$('#d2104').children("i").attr("data-toggle", "tooltip");
$('#d2104').children("i").attr("data-trigger", "hover");
$('#d2104').children("i").attr('title', 'Новое сообщение для студентов');
$('#d2404').append("<i class='fas fa-circle'></i>");
$('#d2404').children("i").attr("data-toggle", "tooltip");
$('#d2404').children("i").attr("data-trigger", "hover");
$('#d2404').children("i").attr('title', 'Новое сообщение для студентов');
$('#d0105').append("<i class='fas fa-circle'></i>");
$('#d0105').children("i").attr("data-toggle", "tooltip");
$('#d0105').children("i").attr("data-trigger", "hover");
$('#d0105').children("i").attr('title', 'Новое сообщение для студентов');
$('#d0605').append("<i class='fas fa-circle'></i>");
$('#d0605').children("i").attr("data-toggle", "tooltip");
$('#d0605').children("i").attr("data-trigger", "hover");
$('#d0605').children("i").attr('title', 'Новое сообщение для студентов');
$('#d2005').append("<i class='fas fa-circle'></i>");
$('#d2005').children("i").attr("data-toggle", "tooltip");
$('#d2005').children("i").attr("data-trigger", "hover");
$('#d2005').children("i").attr('title', 'Новое сообщение для студентов');
$('#d2205').append("<i class='fas fa-circle'></i>");
$('#d2205').children("i").attr("data-toggle", "tooltip");
$('#d2205').children("i").attr("data-trigger", "hover");
$('#d2205').children("i").attr('title', 'Новое сообщение для студентов');
$('#d0106').append("<i class='fas fa-circle'></i>");
$('#d0106').children("i").attr("data-toggle", "tooltip");
$('#d0106').children("i").attr("data-trigger", "hover");
$('#d0106').children("i").attr('title', 'Новое сообщение для студентов');
$('#d0306').append("<i class='fas fa-circle'></i>");
$('#d0306').children("i").attr("data-toggle", "tooltip");
$('#d0306').children("i").attr("data-trigger", "hover");
$('#d0306').children("i").attr('title', 'Новое сообщение для студентов');



$('.box').click(function(){
    if ($(window).width() > 768) {
        let path = 'assets/timetable/4/';
        path = path + $(this).attr('data-src');
        $('#calendar-pop-iframe').attr('src', path);
    } else {
        if ($(this).hasClass('active')) {
            let path = 'assets/timetable/4/';
            path = path + $(this).attr('data-src');
            $('#calendar-pop-iframe').attr('src', path);
            $(this).removeClass("active");
        } else {
            $('.box').removeClass("active");
            $(this).addClass("active");
        }
    }

});
$('.pl').click(function(event) {
    if ($(window).width() < 768) {
        if ($(this).hasClass('active')) {
            var pl=$(this).attr('href').replace('#','');
            var v=$(this).data('vid');
            popupOpen(pl,v);
        }
    } 

    
return false;
});

