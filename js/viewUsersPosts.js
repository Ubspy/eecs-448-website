$(document).ready(() => {
	let xmlhttp = new XMLHttpRequest();

	xmlhttp.onload = () => {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			console.log(xmlhttp.responseText);
			$('#userFill').html(xmlhttp.responseText);
			console.log($('#userFill'));
		}
	}

	xmlhttp.open("GET", "get-users.php", true);
	xmlhttp.send();

	$('#get-button').click(() => {
		console.log('TEST');

		let xmlhttp = new XMLHttpRequest();

		xmlhttp.onload = () => {
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				console.log(xmlhttp.responseText);
				$('#toFill').html(xmlhttp.responseText);
			}
		}

		xmlhttp.open("POST", "view-users-posts.php", true);
		xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xmlhttp.send("user=" + $('#userFill').val());
	});
});
