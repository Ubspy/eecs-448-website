$('#signup-button').click(() => {
	$('#validate-text').text('');	

	if($('#username').val().length == 0)
	{
		$('#validate-text').text('No user was given');	
	}
	else
	{
		let xmlhttp = new XMLHttpRequest();

		xmlhttp.onload = () => {
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				console.log(xmlhttp.responseText);
				if(xmlhttp.responseText == "true")
				{
					window.location.reload();
				}
				else
				{
					$('#validate-text').text("User already exists!");
				}
			}
		};

		xmlhttp.open("POST", "create-user.php", true);
		xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xmlhttp.send("username=" + $('#username').val());
	}
});
