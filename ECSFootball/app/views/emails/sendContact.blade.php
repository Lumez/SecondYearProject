<?!--This is a blade template that goes in email message to site administrator-->
<?php
//get the first name
$firstname = Input::get('firstname');
$surname = Input::get ('last_name');
$email = Input::get ('email');
$subject = Input::get ('subject');
$message = Input::get ('message');
$userIpAddress = Request::getClientIp();
?> 

<h1>We been contacted by {{ $firstname }} {{ $surname }} </h1>

<p>
First name: <?php echo ($firstname); ?> <br/>
Last name: <?php echo($surname);?> <br/>
Email address: <?php echo ($email);?> <br/>
Subject: <?php echo ($subject); ?> <br/>
Message: <?php echo ($message);?> <br/>
User IP address: <?php echo($userIpAddress);?> <br/>

</p>
