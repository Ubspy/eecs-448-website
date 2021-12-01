$(document).ready(() =>
{
    resizeImages(); 
});

window.onresize = () => 
{
    resizeImages();
};

function resizeImages()
{
    let height = $('#Richard-1').height();
    let width = $('#Richard-1').width();
    $('#Richard-2').css({'width': width, 'height': height});
    $('#Richard-3').css({'width': width, 'height': height});
    $('#Richard-4').css({'width': width, 'height': height});
}

function validateForm()
{
    $('#validate-text').text('');

    // Adapted from: https://stackoverflow.com/questions/39356826/how-to-check-if-it-a-text-input-has-a-valid-email-format-in-reactjs
    let re = /^[ ]*([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})[ ]*$/i; 

    // Check for username pattern
    if(!re.test($('#username').val()))
    {
       $('#validate-text').text('Username is not a valid email address!');
    }
    // Check for blank password
    else if($('#password').val().length == 0)
    {
        $('#validate-text').text('Please provide a password!');
    }
    // Submit form if valid
    else
    {
        $('#orderForm').submit();
    }
};
