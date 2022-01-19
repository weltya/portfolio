$(document).ready(function(){
    $('.field-input').focus(function(){
        $(this).parent().addClass('is-focused has-label');
    });

    // à la perte du focus
    $('.field-input').blur(function(){
        $parent = $(this).parent();
        if($(this).val() == ''){
            $parent.removeClass('has-label');
        }
        $parent.removeClass('is-focused');
    });

    // si un champs est rempli on rajoute directement la class has-label
    $('.field-input').each(function(){
        if($(this).val() != ''){
            $(this).parent().addClass('has-label');
        }
    });


$('#regForm').submit(function(){
    var name = $('#name').val();
    var email = $('#email').val();
    var subject = $('#subject').val();
    var message = $('#message').val();
    
    var result = true;

    if(name == ""){
        $('#name').parent().addClass('is-focused error');
        result = false;
    }
    if(email == ""){
        $('#email').parent().addClass('is-focused error');
        result = false;
    }
    if(message == ""){
        $('#message').parent().addClass('is-focused error');
        result = false;
    }
    if(sujet == ""){
        $('#subject').parent().addClass('is-focused error');
        result = false;
    }

    return result
})



$('#name').keyup(function(){
    if($('#name').val() == ""){
        $('#name').parent().addClass('is-focused error');
    }else{
        $('#name').parent().removeClass('error');
    }
});
$('#subject').keyup(function(){
    if($('#subject').val() == ""){
        $('#subject').parent().addClass('is-focused error');
    }else{
        $('#subject').parent().removeClass('error');
    }
});
$('#email').keyup(function(){
    if($('#email').val() == ""){
        $('#email').parent().addClass('is-focused error');
    }else{
        $('#email').parent().removeClass('error');
    }
});
$('#message').keyup(function(){
    if($('#message').val() == ""){
        $('#message').parent().addClass('is-focused error');
    }else{
        $('#message').parent().removeClass('error');
    }
});



});