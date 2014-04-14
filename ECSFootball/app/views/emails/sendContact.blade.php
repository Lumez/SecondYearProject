<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Contact Form Message</h2>		
		<p>From: {{ $data['first_name'] }} {{ $data['last_name'] }}</p>
		<p>Email: {{ $data['email'] }}</p>
		<p>IP Address: {{ $data['clientIP'] }}</p>
		<br />
		<p>Subject: {{ $data['subject'] }}</p>
		<p>Message: {{ $data['message'] }}</p>
	</body>
</html>