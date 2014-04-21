@extends('layouts.base')

@section('title', 'Home')

@section('head')

{{ HTML::style('css/home.style.css') }}

@stop

@section('body')

<div class="padded-content">
	<div class="row">
		<div class="col-md-8">
			<h1 class="center">Privacy Policy</h1>
			<p>This Privacy Policy governs the manner in which Electronics and Computer Science Society collects, uses, maintains and discloses information collected from users (each, a "User") of the http://bdixon.co.uk/ website ("Site"). This privacy policy applies to the Site and all products and services offered by Electronics and Computer Science Society.</p>
			<br />

			<h4><strong>Personal identification information</strong></h4>
			<p>We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, register on the site, subscribe to the newsletter, and in connection with other activities, services, features or resources we make available on our Site. Users may be asked for, as appropriate, name, email address. Users may, however, visit our Site anonymously. We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.</p>
			<br />

			<h4><strong>Non-personal identification information</strong></h4>
			<p>We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about Users means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.</p>	
			<br />

			<h4><strong>Web browser cookies</strong></h4>
			<p>Our Site may use "cookies" to enhance User experience. User's web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.</p>
			<br />

			<h4><strong>How we use collected information</strong></h4>
			<p>Electronics and Computer Science Society may collect and use Users personal information for the following purposes:</p>
			<em><strong>- To personalize user experience</strong></em>
			<p>We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.</p>
			<em><strong>- To send periodic emails</strong></em>
			<p>We may use the email address to respond to their inquiries, questions, and/or other requests. If User decides to opt-in to our mailing list, they will receive emails that may include company news, updates, related product or service information, etc. If at any time the User would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email or User may contact us via our Site.</p>
			<br />

			<h4><strong>How we protect your information</strong></h4>
			<p>We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.</p>
			<br />

			<h4><strong>Sharing your personal information</strong></h4>
			<p>We do not sell, trade, or rent Users personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates and advertisers for the purposes outlined above.</p>
			<br />

			<h4><strong>Third party websites</strong></h4>
			<p>Users may find advertising or other content on our Site that link to the sites and services of our partners, suppliers, advertisers, sponsors, licensors and other third parties. We do not control the content or links that appear on these sites and are not responsible for the practices employed by websites linked to or from our Site. In addition, these sites or services, including their content and links, may be constantly changing. These sites and services may have their own privacy policies and customer service policies. Browsing and interaction on any other website, including websites which have a link to our Site, is subject to that website's own terms and policies.</p>
			<br />

			<h4><strong>Changes to this privacy policy</strong></h4>
			<p>Electronics and Computer Science Society has the discretion to update this privacy policy at any time. When we do, we will post a notification on the main page of our Site, revise the updated date at the bottom of this page and send you an email. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.</p>
			<br />

			<h4><strong>Your acceptance of these terms</strong></h4>
			<p>By using this Site, you signify your acceptance of this policy. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes.</p>
			<br />
			
			<h4><strong>Contacting us</strong></h4>
			<p>If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us at:
			<br />Electronics and Computer Science Society
			<br />University Road, Southampton, UK, SO17 1BJ
			<br />023 8059 5200</p>

			<p>This document was last updated on April 21, 2014</p>


		</div>
		<div class="col-md-4 center vert-divider">
			@include('partials.sidebar')
		</div>
	</div>
</div>

@stop