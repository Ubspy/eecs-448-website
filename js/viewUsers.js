$(document).ready(() => {
	let xmlhttp = new XMLHttpRequest();

	xmlhttp.onload = () => {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			$('#toFill').html(xmlhttp.responseText);
			console.log(xmlhttp.responseText);
		}
	}

	xmlhttp.open("GET", "view-users.php", true);
	xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xmlhttp.send();
});
