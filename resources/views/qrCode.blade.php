<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="visible-print text-center">
		<form action="/storeQR" method="POST">
			@csrf
			<input type="text" name="url" placeholder="add url">
			<button>submit</button>
		</form>
	    <img src="/storage/images/tester.png" alt="">
	</div>
</body>
</html>