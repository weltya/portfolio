$(document).ready(function(e){
    $('.btn').on('mouseenter', function(e){
        x = e.pageX - $(this).offset().left;
        y = e.pageY - $(this).offset().top;
        $(this).find('span').css({top:y, left:x})
    })
    $('.btn').on('mouseout', function(e){
        x = e.pageX - $(this).offset().left;
        y = e.pageY - $(this).offset().top;
        $(this).find('span').css({top:y, left:x})
    })

    var typed = new Typed(".typing", {
        strings: ["Etudiant", "Passionné", "Curieux", "Motivé"],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });

})