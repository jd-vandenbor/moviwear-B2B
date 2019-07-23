<?php 
if(isset($_POST['submit'])){
    $to = "nurturewatchintern1@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<html>
<title>Moviwear</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">

<head>
	<script type="text/javascript" src="./js/instafeed.min.js"></script>
	<script type="text/javascript" src="./js/custom.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
<script type="text/javascript" src="./js/instafeed.min.js"></script>
<script type="text/javascript" src="./js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<div class="bg-image" style="height: 60vh;"></div>

<div class="new" style="width: 100vw">
</div>

<div class="w3-center w3-margin-top bg-text" id="customanimate">
	<div class="container" style="margin: 10vh">
		<h1 style="font-size: 4em">Moviwear</h1>

	</div>
</div>






<!-- Main Pequeno Guardian -->
<div class="w3-container" style="background-color: white" id="main">
	<div class="row2">
		<div class="w3-row-padding w3-center w3-margin-top" style="background-color: white; ">
			<div class="w3-half">
				<div class="w3-container" style="min-height:460px;width: 100%; margin-top:15%;">
					<img src="https://cdnl.tblsft.com/sites/default/files/blog/picture15.png" style="width: 100%">
				</div>
			</div>
			<div class="w3-half" style="text-align: left;">
				<div class="w3-container" style="min-height:460px;">
					<h2 style="color: black; text-align: left;font-size:60px;font-weight:bold;margin-top:12%;">The Platform</h2>
					<p style="text-align: left; color: #777;">Our platform is an all encompassing solution for monitoring end users through our devices and back end framework. We will give you access to a dashboard that measures vitals, tracks location, and provides voice contact for all those that your company cares for. Work with us to set up a third party monitoring solution or have staff monitor your users internally. Whatever your needs we can work with you to provide a monitoring solution. Whatever it takes to ensure the safety of those you care for, we believe in taking the steps necessary to providing that solution.</p>
					<hr>
					<b>How it works:</b>
					<p style="text-align: left; color: #777;">End users wear either the Nurture Watch or Peque&ntilde;o Guardi&aacute;n. These devices monitor the users and sending their information back to our backend framework. From there two levels of precaution exist. First is the people monitoring the users. A person watching the vitals dashboard or receiving alerts from the system can act when emergencies take place. The second level gives the user control allowing them to send distress calls to love ones or care providers programmed into the device. Those are communicated by alert notifications and voice calls. These two levels allow us to ensure that the end users WILL get actionable responses from any emergency with 24/7 availability.</p>
					<p style="text-align: left; color: #1899f5; font-weight: bold;"><a style="text-align: left; color: #1899f5; font-weight: bold;text-decoration: none;" href="https://www.nurturewatch.com/products/pequeno-guardian">Buy now ></a></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END	-->

<hr>

<h1 style=" font-size: 3em; margin: 0px; padding-bottom: 5px; text-align: center; transform: translate(0%, 50px);">Our Products</h1>
<hr style="margin-top: 0px; margin-left: 40vw; margin-right: 40vw; margin-bottom: 100px; border: solid 1px; border-color: #AAA; transform: translate(0%, 50px);">
<div class="w3-container">
	<div class="row2">
		<div class="w3-row-padding w3-center w3-margin-top" style="margin-bottom: 60px">
			<div class="w3-third">
				<div class="w3-container" style="width: 100%">
					<img style="height: 300px;padding-bottom:20px;" src="nw.jpg">
					<h2 style="font-weight:bold;padding-bottom:15px;">NurtureWatch</h2>
					<p style="text-align:left; color: #777;">The NurtureWatch comes equipped with a variety of services that include heart rate monitoring, pill reminders, distress calls, and geofencing. All of these services can be setup directly from the app to ensure your loved ones are safe and always taken care of. The NurtureWatch comes with the following items:</p>
					<ul style="text-align: left; color: #777;">
					  <li>The NurtureWatch</li>
					  <li>Basic charging cable</li>
					  <li>One year of service</li>
					</ul>
				</div>
			</div>

			<div class="w3-third">
				<div class="w3-container" style="width: 100%">
					<img style="height: 300px;padding-bottom:20px;" src="pequeno.jpg">
					<h2 style="font-weight:bold;padding-bottom:15px;">Peque&ntilde;o Guardi&aacute;n</h2>
					<p style="text-align:left; color: #777;">The Peque&ntilde;o Guardi&aacute;n ensures the safety of the wearer with its SOS button feature. At anytime the user may press the button and initiate a distress call to one of the preprogrammed phone numbers. The Peque&ntilde;o Guardi&aacute;n comes with the following items:</p>
					<ul style="text-align: left; color: #777;">
					  <li>Peque&ntilde;o Guardi&aacute;n SOS button</li>
					  <li>Basic charging station and cable</li>
					  <li>One year of service</li>
					  <li>Pendant (lanyard), and belt clip</li>
					</ul>
				</div>
			</div>

			<div class="w3-third">
				<div class="w3-container" style="width: 100%">
					<img style="height: 300px;padding-bottom:20px;" src="4gbig.png">
					<h2 style="font-weight:bold;padding-bottom:15px;">NurtureWatch 2</h2>
					<p style="text-align:left; color: #777;">The NurtureWatch 2 is the updated 4G version of the NurtureWatch that comes equipped with longer battery life and a new charging station. More details coming soon!</p>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Our Platform -->
<div style="width: 100%; background-color: #1899f5; margin bottom: 0px; color: white; text-align: center;">
	<h2 style="font-size: 3em; margin: 0px; padding: 15px"> Benefits </h2>
</div>

<!-- Is moviwear right for you -->
<div class="" style="margin-top: 40px;">
	<div class="" style="">
		<div class="w3-container" style="text-align: center;">
			<!-- <h2 style="color: black; text-align: left; "></h2> -->
			<h1 style=" font-size: 3em; margin: 0px; padding: 15px">What can Moviwear do for you?</h1>
			<img src="">
			<p style="padding-left: 20vw; padding-right: 20vw; color: #777;">Moviwear gives you a platform to reduce costs and increase the value of your services by giving you the tools to monitor and ensure the safety of your clients. If you have at risk people in your care, or would benifit from preventing and increasing the response time of emergencies then make the move to using our tech forward solutions. </p>
		</div>
	</div>
</div>
<!-- END	-->




<!-- Industries -->
<div ></div>
<h2 style="text-align: center; padding-bottom: 35px">Are you in...</h2>
<div class="w3-container" style="width: 100%; text-align: center; padding-left: 10vw; padding-right: 10vw; padding-bottom: 100px;">
	<div class="w3-third" onclick="PSW()">
	  <div class="w3-container" style="min-height:150px">
	  	<h3 style="color: black; font-weight: bold;">PSW Agency</h3>
	  	<img  class="industry-img" src="https://www.williscollege.com/wp-content/uploads/2018/09/PSW-courses-1.jpg" style="width: 23vw">
	  </div>
	</div>

	<div class="w3-third" onclick="Retirement()">
	  <div class="w3-container" style="min-height:150px">
	  	<h3 style="color: black; font-weight: bold;">Retirement Care</h3>
	  	<img class="industry-img" src="http://bayfieldmanorltc.com/@assets/uploads/gallery/large.240.jpg" style="width: 23vw">
	  </div>
	</div>

	<div class="w3-third" onclick="Insurance()">
	  <div class="w3-container" style="min-height:150px">
	  	<h3 style="color: black; font-weight: bold;">Insurance provider</h3>
	  	<img class="industry-img" src="https://cdn.versadial.com/wp-content/uploads/2015/06/business-call-recording-liability-insurance.jpg" style="width: 23vw">
	  </div>
	</div>

</div>

<script type="text/javascript">

function PSW() {
	var industry = document.getElementById("custom") ;
	industry.innerHTML = "<!-- PSW Section--><div class=\"w3-container w3-animate-left\" style=\" width: 100%; padding-left: 20vw; padding-right: 20vw;padding-bottom: 100px;\"><div class=\"\" onclick=\"newrow()\"><div class=\"w3-container industry-img\" style=\"background-color: #CCC; min-height:150px; padding: 2vw;\"><h3 style=\"color: black; font-weight: bold;\">PSW Agency</h4><p  class=\"\" style=\"\">With the Moviwear platform you can easily reduce the costs of care and increase the value of your service to your clients. Cost reduction is important here and depending how you set up your service, this could be a major reduction. You can essentially provide your clients with 24/7 care without the need for a PSW agent to be constantly there. Moviwear will take care of the monitoring and allow your agents to take care of the physical needs, potentially allowing them to spread their time between more clients.</p><p><b>Reduce your costs by:</b></p><ul><li>requiring less time spent physically next to clients</li><li>reducing overhead on monitoring the location of clients</li><li>reudcing the costs of liability by preventing incidents</li></ul></p><p><b>Increase the value of your service with:</b></p><ul><li>providing 24/7 care to your clients</li><li>giving your clients more peace of mind due to increased care</li><li>offering a premium service that other PSW agencies don't offer</li></ul></div></div></div>\";"
}

function Retirement() {
	var industry = document.getElementById("custom") ;
	industry.innerHTML = "<!-- PSW Section--><div class=\"w3-container w3-animate-left\" style=\" width: 100%; padding-left: 20vw; padding-right: 20vw;padding-bottom: 100px;\"><div class=\"\" onclick=\"newrow()\"><div class=\"w3-container industry-img\" style=\"background-color: #CCC; min-height:150px; padding: 2vw;\"><h3 style=\"color: black; font-weight: bold;\">Retierment Care</h4><p  class=\"\" style=\"\">Moviwear gives you the platform you need to reduce your costs and increase the value of your service to residents. The benifit of cost reduction is apparent, but they increased care you provide is priceless. Not only will it give you a premium service your competitors can't provide, but this may save a life, and will give peace of mind to a group of people who deserve it the most.</p><p><b>Reduce your costs by:</b></p><ul><li>requiring less room checks for residents</li><li>reducing overhead on monitoring patients loactions</li><li>reudcing the costs of liability by preventing incidents</li></ul></p><p><b>Increase the value of your service with:</b></p><ul><li>improving your care with increased security for your residents</li><li>provide a premium service that other homes don't offer</li><li>provide more peace of mind to your residents, soemthing extremly valuable to residents</li></ul></div></div></div>\";"
}

function Insurance() {
	var industry = document.getElementById("custom") ;
	industry.innerHTML = "<!-- PSW Section--><div class=\"w3-container w3-animate-left\" style=\" width: 100%; padding-left: 20vw; padding-right: 20vw;padding-bottom: 100px;\"><div class=\"\" onclick=\"newrow()\"><div class=\"w3-container industry-img\" style=\"background-color: #CCC; min-height:150px; padding: 2vw;\"><h3 style=\"color: black; font-weight: bold;\">Insurance Provider</h4><p  class=\"\" style=\"\">If you’re an insurance company that deals with at risk people, this product just makes sense. With our platform having a faster response time means less accidents taking place, or escalating to a unfortunate, and costly, outcome.</p><p><b>Reduce your costs by:</b></p><ul><li>preventing or reducing the impact of critical emergencies, therefore saving your company from big payouts</li><p></ul><b>Increase the value of your service by:</b><ul><li>providing an extra level of care through premium insurance packages</li><li>offering peace of mind beyond finances</li></ul></div></div></div>\";"
}

</script>

<!-- end of industries -->



<div id="custom">
</div>


<!-- Contact us -->
<div style="width: 100%; background-color: #1899f5; margin bottom: 0px; color: white; text-align: center;">
	<h2 style="font-size: 3em; margin-bottom: 50px; padding: 15px"> Contact Us </h2>
</div>

<div class="w3-container" style="padding-left: 15vw; padding-right: 15vw; margin-bottom: 50px">
	<p>Send us your name and email as well as any questions you have for us. Let us know what it is you need to for your company, and how moviwear can work with you to help create those solutions with our platform. You can also send us any inquires for partnerships, or if you would rather contact us in a different way, all of our contact information is at the bottom of the page <a>here.</a></p>
	<form method="post">
		<div class="w3-half" >
			<p>Email:</p>
			<input class="form2" type="text" name="email" style="width: 85%">
		</div>
		<div class="w3-half">
			<p>Name</p>
			<input class="form2" type="text" name="name" style="width: 85%">
		</div>
  			<textarea class="form1" placeholder="Some text..." name="message"></textarea>
  			<input type="submit" name="submit" value="Submit">
	</form>
</div>

<!-- Meet Our CEO -->
<div class="w3-container" style="padding-left: 5vw;">
	<div class="row2" style="">
		<div class="w3-row-padding w3-center w3-margin-top " style="margin-bottom: 60px">
			<div class="w3-half" style="padding-left:10vw;">
				<div class="w3-container">
					<h2 class="heading" style="color: black; text-align: left; margin-bottom: 0px; margin-top: 80px ">Meet Our CEO</h2>
					<p style="text-align: left; color: black; font-size:30px; color: #444">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
					<p style="text-align: left; color: #777;">Jacob Moshinsky, 2019</p>
				</div>
			</div>

			<div class="w3-half" style="padding-left:6vw;">
				<div class="w3-container">
					<img src="ceo.jpg" alt="portrait of ceo" style="border-radius: 250px; border: 0.5px solid black">
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Contact us -->
<div style="width: 100%; background-color: #1899f5; margin bottom: 0px; color: white; text-align: center;">
	<h2 style="font-size: 3em; margin-bottom: 50px; padding: 15px"> Partners and Articles </h2>
</div>

<!-- Cerna Section -->
<div class="w3-container" style="padding-left: 5vw;">
	<div class="row2" style="">
		<div class="w3-row-padding w3-center w3-margin-top " style="margin-bottom: 20px">
			<div class="w3-half" style="padding-left:6vw;">
				<div class="w3-container">
					<img src="cerna.jpg" alt="cerna logo" style="padding:20px;">
				</div>
			</div>
			<div class="w3-half" style="padding-left:10vw;padding-top:50px;">
				<div class="w3-container">
					<p style="font-size:30px;text-align:left;">Why Does Cerna Choose Us?</p>
					<ul style="margin:0;padding:0;text-align:left;">
						<li style="padding-bottom:5px;font-size:18px;">Generates New Revenue Streams</li>
						<li style="padding-bottom:5px;font-size:18px;">Extensive Corporate Wellness</li>
						<li style="padding-bottom:5px;font-size:18px;">Extensive Aging in Place and Child Tracking Technologies</li>
						<li style="padding-bottom:5px;font-size:18px;">Advanced APIs and Technology Support</li>
						<li style="padding-bottom:5px;font-size:18px;">OEM Products</li>
						<li style="padding-bottom:5px;font-size:18px;">Easy to Join Partner Program</li>
						<li style="padding-bottom:5px;font-size:18px;">Resources to Help You Our Partner</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- article links -->
<div style="padding-left:12vw; padding-right:12vw; margin-bottom: 40px; margin-top: 100px;">
	<hr style="width: 35%; float: left; border: solid 1px; border-color: black;"><h3 style="transform: translate(0%, -.5em); float: left; padding-left: 10%; ">Article links</h3><hr style="border: solid 1px; border-color: black; width: 35%; float: right;">

	<div style="float: none; display: inline-block;">
		<a href=""><img  class="article-image" src=".\articleImages\1.PNG"></a>
		<a href=""><img class="article-image" src=".\articleImages\2.PNG"></a>
		<a href="https://ksby.com/healthy-living/2019/03/01/new-technology-aims-to-aid-seniors"><img class="article-image" src=".\articleImages\3.PNG"></a>
		<a href="https://www.myhighplains.com/news/tech-news/tech-talker-senior-support/1819878592"><img class="article-image" src=".\articleImages\4.PNG"></a>
		<a href=""><img class="article-image" src=".\articleImages\5.PNG"></a>
		<a href="https://www.texomashomepage.com/news/tech-news/tech-talker-senior-support/"><img class="article-image" src=".\articleImages\6.PNG"></a>
		<a href="https://www.wdtn.com/news/u-s-world/technology-to-support-senior-independence/"><img class="article-image" src=".\articleImages\7.PNG"></a>
		<a href="http://moneyradio1510.com/program-business-for-breakfast.php"><img class="article-image" src=".\articleImages\8.PNG"></a>
		<a href=""><img class="article-image" src=".\articleImages\9.PNG"></a>
		<a href="https://www.aarp.org/caregiving/home-care/info-2018/wearable-technology-is-changing-wellness.html"><img class="article-image" src=".\articleImages\10.PNG"></a>
		<a href="https://cheddar.com/media/nurturewatch-helps-users-keep-independence-with-sensors-alerts"><img class="article-image" src=".\articleImages\11.PNG"></a>
		<a href="https://finance.yahoo.com/news/nurturewatch-selects-sierra-wireless-iot-200000648.html"><img class="article-image" src=".\articleImages\12.PNG"></a>
		<a href="https://www.everythingzoomer.com/lifestyle/2018/12/19/zoomer-friendly-watch/"><img class="article-image" src=".\articleImages\13.PNG"></a>
		<a href="https://www.pressreader.com/usa/imperial-valley-press/20181218/281797105096349"><img class="article-image" src=".\articleImages\14.PNG"></a>
		<a href="https://gritdaily.com/jacob-moshinsky-nurturewatch/"><img class="article-image" src=".\articleImages\15.PNG"></a>
		<a href="https://the-gadgeteer.com/2018/12/14/2018-gift-guide-senior-gift-ideas/"><img class="article-image" src=".\articleImages\16.PNG"></a>
		<a href="https://sofun.today/2018/12/14/2018-gift-guide-senior-gift-ideas/"><img class="article-image" src=".\articleImages\17.PNG"></a>
		<a href="https://www.youareunltd.com/2018/10/30/wearable-health-technology-set-to-take-off-as-apple-joins-the-fray/"><img class="article-image" src=".\articleImages\18.PNG"></a>
		<a href=""><img class="article-image" src=".\articleImages\19.PNG"></a>
	</div>
</div>


<hr>

<!-- Instagram Feed -->
<div class="container" style="margin-bottom:60px;">
	<h2 style="text-align:center;font-size:40px;margin-bottom:60px;margin-top:30px;">Follow Us On Instagram!</h2>
	<div id="instafeed" class="row" style="margin:auto;margin-bottom:80px;">
	</div>
</div>

<!-- LinkedIn Section -->
<center style="padding-bottom:50px;"><iframe src="https://www.linkedin.com/embed/feed/update/urn:li:share:6556943043042381824" allowfullscreen="" title="Embedded post" width="450" height="450" frameborder="0"></iframe></center>

<!-- Contact Footer -->
<div class="w3-row" style="background-color:black;padding-top:30px;">
	<div class="w3-row-padding w3-center w3-margin-top " style="margin-bottom: 10px">
		<div class="w3-third" style="color:white;text-align: left; padding-left:8vw;">
			<div class="w3-container">
				<h3 style="margin-bottom:20px;">QUICK LINKS</h3>
				<p><a href="#main" style="text-decoration: none;color:white;">Home</a></p>
				<p><a href="https://www.nurturewatch.com/collections/all" style="text-decoration: none;color:white;">Catalog</a></p>
				<p><a href="../pequenofaq.pdf" style="text-decoration: none;color:white;">FAQ</a></p>
			</div>
		</div>
		<div class="w3-third"  style="color:white;text-align:left;">
			<div class="w3-container">
				<h3 style="margin-bottom:20px;">HELP</h3>
				<p>Contact Us At sales@nurturewatch.com</p>
				<p>Privacy Policy</p>
				<p>End User License Agreement</p>
			</div>
		</div>
		<div class="w3-third">
			<div class="w3-container" style="margin-left:2vw;">
				<h3 style="color:white;text-align:left;margin-bottom:20px;">CONNECT WITH US</h3>
				<p style="text-align:left;"><a href="https://www.facebook.com/MoviWear/" style="text-decoration: none;color:white;">Facebook</a></p>
				<p style="text-align:left;"><a href="https://www.twitter.com/moviwear" style="text-decoration: none;color:white;">Twitter</a></p>
				<p style="text-align:left;"><a href="https://www.instagram.com/moviwear" style="text-decoration: none;color:white;">Instagram</a></p>
				<p style="text-align:left;"><a href="https://www.linkedin.com/company/moviwear/" style="text-decoration: none;color:white;">LinkedIn</a></p>
			</div>
		</div>
	</div>
</div>

<div class="w3-container" style="padding-left: 5vw; background-color:black;">
	<div class="row2">
		<hr style="color:white;margin-left:4vw;margin-right:4vw;">
		<div class="w3-row-padding w3-center w3-margin-top ">
			<p style="color:white;margin-left:4vw;">&copy; 2019 MoviWear</p>
		</div>
	</div>
</div>
</body>

<style>



</style>
</html>
