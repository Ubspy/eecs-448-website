function validatePassword()
{
    let origPassword = $('#password').val();

    console.log(origPassword);
}

$('#validate-button').click(() =>
{
    let origPassword = $('#password').val();
    let rePassword = $('#repeat-password').val();

    let validateText = $('#validate-text');

    // Check if password meets required length
    if(origPassword.length < 8)
    {
        validateText.text('Password is not long enough, must be at least 8 characters');
        validateText.css('color', 'red');
    }
    // Check if passwords are not the same
    else if(!(origPassword === rePassword))
    {
        validateText.text('Passwords do not match');
        validateText.css('color', 'red');
    }
    else
    {
        validateText.text('Password validated');
        validateText.css('color', 'green');
    }
});
