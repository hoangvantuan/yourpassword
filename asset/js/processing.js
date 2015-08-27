/*Sigup*/
$('.signup').submit(function() {
    /*Delete error*/
    $('.error_signup').html('');

    var username = $('#username').val();
    var password = $('#password').val();

    /* Send data to controller procesing*/
    $.ajax({
        url: 'controllers/signup/process.php',
        type: 'post',
        dataType: 'text',
        data: {
            username: username,
            password: password
        },
        success: function(result) {
            $('.error_signup').html(result);
        }
    })

    return false;
});



/*Sigin*/
$('.signin').submit(function() {
    /*Delete error*/
    $('.error_signin').html('');

    var username = $('#username').val();
    var password = $('#password').val();

    /* Send data to controller procesing*/
    $.ajax({
        url: 'controllers/signin/process.php',
        type: 'post',
        dataType: 'text',
        data: {
            username: username,
            password: password
        },
        success: function(result) {
            if (result == 1)
                window.location = 'index.php';
            else
                $('.error_signin').html(result);
        }
    })

    return false;
});

/*Add Password*/
$('.gen').submit(function() {
    /*Delete error*/

    var description = $('#inputDescription').val();
    var password = generator();
    /* Send data to controller procesing*/
    $.ajax({
        url: 'controllers/home/generator.php',
        type: 'post',
        dataType: 'text',
        data: {
            description: description,
            password: password
        },
        success: function(result) {
            $('tbody').append(result);
            $('#inputDescription').val('');
        }
    })

    return false;
});


/*Delete password*/
function deletePassword(id, obj) {
        var parent = obj.parentElement.parentElement;
        $('delete').html('');

        $.ajax({
            url: 'controllers/home/delete.php',
            type: 'post',
            dataType: 'text',
            data: {
                id: id
            },
            success: function(result) {
                parent.remove();
                $('.delete').html(result);
            }
        })
    }
    /*Genertor password*/
function generator() {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()";

    for (var i = 0; i < 20; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}