$('#post-button').click(() => {

	$('#validate-text').text('');

	if($('#post-text').val().length == 0)
	{
		$('#validate-text').text('There is no post');	
	}
	else if($('#username').val().length == 0)
	{
		$('$validate-text').text('No username was given');
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
					$('#validate-text').text("User doesn't exist!");
				}
			}
		};

		xmlhttp.open("POST", "create-post.php", true);
		xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xmlhttp.send("post-text=" + $('#post-text').val() + "&username=" + $('#username').val());
	}
});
