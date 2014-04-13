<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Latest News from ECSS Football</h2>
		<hr />
		<h3>{{ $articleAsArray['title'] }}</h3>		
		<p>{{ $articleAsArray['description'] }}</p>
		<p>{{ date('d F Y',strtotime($articleAsArray['display_date'])); }}</p>
		<hr />
		<p>For other news, current fixures and latest results, head over to the <a href="http://bdixon.co.uk">ECSS Football Website</a></p>
		<p>To stop reciving these emails, <a href="http://bdixon.co.uk/unsubscribe/{{ $shortId }}">Unsubscribe</a></p>
	</body>
</html>