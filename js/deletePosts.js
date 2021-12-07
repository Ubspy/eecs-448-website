$(document).ready(() => {
	let xmlhttp = new XMLHttpRequest();

	xmlhttp.onload = () => {
		if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			console.log(xmlhttp.responseText);
			$('#postFill').html(xmlhttp.responseText);
		}
	}

	xmlhttp.open("GET", "get-posts.php", true);
	xmlhttp.send();

	$('#delete-button').click(() => {
		console.log('TEST');

		let sendStr = "";
		let currentCount = 0;
		
		$('#deleteForm').find('input').each((i, value) => {
		    if($(value).prop('checked'))
		    {
			    sendStr += "post-" + currentCount + "=" + $(value).prop('name') + "&";
			    currentCount += 1;
		    }
		});

		console.log($('#deleteForm'));
		
		let xmlhttp = new XMLHttpRequest();

		xmlhttp.onload = () => {
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{
				console.log(xmlhttp.responseText);
				window.location.reload();
			}
		}

		xmlhttp.open("POST", "delete-posts.php", true);
		xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xmlhttp.send(sendStr);
	});
});
