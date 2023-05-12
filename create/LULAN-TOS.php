<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">

	<!-- PARA RESPONSIVE -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- TITLE -->
	<title>Terms of Service | Lulan</title>
	
	<!-- FAVICON -->
	<link href="https://administrative.lulan-tnvs.com/assets/images/mainlogo.png" rel="icon" type="image/x-icon"/>

	<!-- BAWAL MA RIGHT CLICK -->
	<script>document.addEventListener('contextmenu', event => event.preventDefault());</script>

	<!-- BAWAL MA SELECT LAHAT -->
	<script>
		// Get all elements on the page
		const elements = document.getElementsByTagName('*');
		
		// Loop through each element and disable selection
		for (let i = 0; i < elements.length; i++) {
			elements[i].style.userSelect = 'none';
		}
	</script>

	<!-- INTERNAL CSS (tinatamad ako)-->
    <style>
		* {
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			cursor: progress;
		}
        body
        {
			background-color: /*#212E52,*/ #161f38;
            color: #FFFFFF;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
			font-size: larger;
        }
		/*NINAKAW NA CODE GALING W3SCHOOLS*/
		#myBtn {
			display: none;
			position: fixed;
			bottom: 20px;
			right: 30px;
			z-index: 99;
			font-size: 18px;
			border: none;
			outline: none;
			background-color: #3F599E;
			color: white;
			cursor: pointer;
			padding: 15px;
			border-radius: 4px;
		}
		#myBtn:hover {
			background-color: #26355E;
		}
    </style>
</head>
	
<body>
	<!-- NINAKAW NA CODE GALING W3SCHOOLS -->
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

	<table>
		  <tr>
			  <td>
				  <img src="https://administrative.lulan-tnvs.com/assets/images/mainlogo.png" alt="ewan ko ba" width="75px" height="75px">
			  </td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td>
				<h1>Lulan | Terms of Service</h1>
			</td>
		</tr>
	</table>
	
	<h4>Effective until: May 2023</h4>
	
	<h2>Our Service</h2>
	<p>This application is a platform for users to access and use the services provided by us. By accessing and using our services, you agree to be bound by these terms.</p>
	
	<h2>User Account Registration</h2>
	<p>You must register for an account in order to access and use our services. You must provide accurate and complete information, and you are solely responsible for the security of your account.</p>
	
	<h2>Your Responsibilities</h2>
	<p>You are solely responsible for your use of our services. You will not use our services for any illegal purposes or in any manner that could damage, disable, overburden, or impair our services.</p>

	<h2>Payment Terms</h2>
	<p>If you use any of our paid services, you agree to pay the applicable fees. We may modify the fees for any of our services at any time.</p>
	
	<h2>Termination of Services</h2>
	<p>We may terminate your access to our services at any time, with or without cause, and without notice.</p>

	<h2>Privacy Policy</h2>
	<p>We respect your privacy and are committed to protecting it. We have a Privacy Policy, which is incorporated into these terms and governs our collection and use of your information.</p>

	<h2>Disclaimer of Warranty</h2>
	<p>Our services are provided “as is” and “as available” without warranty of any kind. We do not guarantee that our services will be uninterrupted, secure, or error-free.</p>

	<h2>Limitation of Liability</h2>
	<p>We are not liable for any damages resulting from your use of our services. This includes any direct, indirect, consequential, special, and punitive damages.</p>

	<h2>Changes to These Terms</h2>
	<p>We may modify these terms at any time. You should review these terms periodically to stay informed of any changes.</p>

	<h2>Governing Law</h2>
	<p>These terms are governed by the laws of the state of [state], without regard to its conflict of law provisions.</p>

	<h2>Dispute Resolution</h2>
	<p>Any disputes arising out of or related to these terms will be resolved through binding arbitration, to be conducted in [city], [state].</p>

	<!-- NINAKAW NA CODE GALING W3SCHOOLS -->
	<script>
		// Get the button
		let mybutton = document.getElementById("myBtn");
		
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};
		
		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		  } else {
			mybutton.style.display = "none";
		  }
		}
		
		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}
	</script>	
</body>
</html>