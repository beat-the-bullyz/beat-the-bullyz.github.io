<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
	include 'connection.php';
	$stories = "";
	$getAllStories = "SELECT story FROM anti_bullyz_story";
	$result = $conn->query($getAllStories);
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$stories = $stories . " " . $row["story"];
		}
	} else {
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Anti Bullyzens Code</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="http://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet" />
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
	<!--[if IE 6]>
	<link href="default_ie6.css" rel="stylesheet" type="text/css" />
	<![endif]-->
</head>
<body>
	<div id="wrapper">
		<div id="header-wrapper">
			<div id="header" class="container">
				<div id="logo">
					<h1><a href="#">BREAK THE BULLIES</a></h1>
					<p>ADDRESS REDRESS PROTECT</p>
				</div>
			</div>
		</div>
		<div id="menu-wrapper">
			<div id="menu" class="container">
				<ul>
					<li class="current_page_item tablinks" onclick="showTab(event, 'home')"><a href="#">Home</a></li>
					<li class="tablinks" onclick="showTab(event, 'blog')"><a href="#">Blog</a></li>
					<li class="tablinks" onclick="showTab(event, 'stories')"><a href="#">Stories</a></li>
					<li class="tablinks" onclick="showTab(event, 'gallery')"><a href="#">Gallery</a></li>
				</ul>
			</div>
		</div>
	</div>

	<form method="post" action="addStory.php">
		<div id="home" class="tabcontent">
			<div id="page" class="container">
				<div id="wordContainer"></div>
			</div>
	
			<div class="container">
				<textarea id="story" name="story" class="form-control" rows="3" placeholder="#DoTell Your story"></textarea>
				<div class="buttonWrapper">
					<!-- <button type="submit" id="submitStroy" onclick="submitStory()" class="btn btn-primary active">Let others know!</button> -->
					<input id="submitStroy" type="submit" class="btn btn-primary active" />
				</div>
			</div>
		</div>
	</form>

	<div id="blog" class="tabcontent" style="display: none">
		<div class="container">
			<h2>
				Welcome to the AntiBullyzens blog!
			</h2>
			<p id="blogText">
				Bullying is not new, but cyber bullying sure is. It may or may not be an offence which often continues until it gets reported. The bullied person/child is an unfortunate victim of someone’s fun whereas it as an alarm to remind us of the reality as to where do we lack, call it legislation or our law enforcement and even our individual approach towards the rights of a person.
				<br/>
				Cyber Bullying as ordinarily and conventionally understood means from slight to unsubtle or complex form of psychological violence/ harassment of a person through internet communication technologies, in most cases keeping the perpetrator anonymous and masked. The bully may be around us and one may remain clueless.  For example, a close friend may abuse you using cell phones, emails, texts, derogatory images, WhatsApp, Facebook and etc. and much more. It is a potentially malicious act capable of distorting the mind-set of the bullied and loss of reputation. Cyber Bullying could be anything right from online defamation, revenge, leaking out personal information and threatening to do or not to do something, sexual remarks, rumours etc. Such acts of Cyber Bullying take away various rooted fundamental rights of a person/ child as empowered and enshrined in the Constitution of India and The Convention on Rights of Child. The aftermath of cyberbullying is anxiety, low self-esteem, and emotional, mental and physical harm, lack of focus, feeling of insecurity and in most cases social isolation. It may also lead to grave repercussions such as suicide. Cyber Bullying violations Human Rights as covered under Universal Declaration of Human Rights, 1948. The Indian Penal Code 1860, along with the Information Technology Act, 2000 provides for certain punishments along with imprisonment and fine, yet a direct legislation is an impediment as the internet has deeply touched our lives.
				<br/>
				Anti Bully-Zens Code is an initiative and a step to gather and unite together to fight this menace which has made numerous lives miserable. We are here to help you fight Cyber Bullying and make the internet better. We suggest and recommend, awareness of parents and children, awareness in schools, child assessment techniques, to aware the bullied on the basis of their rights, proper adherence to laws and conventions, smart education. We also have some tips for the young minds that do report such incidents to someone you trust right from parents to school and police, do not remove evidence, stop responding, do not forward the wrong content and in the end never favour the bad. At last, we stand together to swear in a chorus- UNITED WE STAND, DIVIDED WE FALL.
			</p>
		</div>
	</div>

	<div id="stories" class="tabcontent" style="display: none"></div>

	<div id="gallery" class="tabcontent" style="display: none"></div>

	<div id="contact" class="tabcontent" style="display: none"></div>

	<div style="background: #0F0F0F">
		<div id="footer" class="container">
			<div style="text-align: left; float: left;">
				<p style="text-align: left">Visitors</p>
				<a href="http://www.reliablecounter.com" target="_blank"><img src="http://www.reliablecounter.com/count.php?page=1955837&digit=style/plain/6/&reloads=0" alt="" title="" border="0"></a><br /><a href="http://projectorlive.com/comparison/benq-ht2050-vs-benq-ht3050-vs-epson-2040 " target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;">here</a>
			</div>
	
			<div style="text-align: right; float: right;">
				<p style="text-align: Right">Follow Us</p>
				<a href="https://www.facebook.com/AntiBullyzens/?hc_ref=ARSnggpbG8FQ4d49Y27waD95lCUGXpmpBvg6Zd7_qaO2mjlllxWjsc_d4l82BXVGT0o" target="_blank"><i class="fab fa-facebook"></i></a>&emsp;
				<a href="https://www.instagram.com/antibullyzens/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>&emsp;
				<a href="https://antibullyzensblog.wordpress.com/" target="_blank"><i class="fab fa-wordpress"></i></a>
			</div>
		</div>
	</div>
	

	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/wordcloud.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script>
		window.onload = createChart;

		function createChart() {
			var blogText = document.getElementById("blogText").innerText.toLowerCase();
			var storytext = <?php echo(json_encode($stories)); ?>;
			var consolidatedText = blogText + " " + storytext;

			if(consolidatedText !== null) {
				var lines = consolidatedText.split(/[,\. ]+/g),
					data = Highcharts.reduce(lines, function (arr, word) {
						var obj = Highcharts.find(arr, function (obj) {
							return obj.name === word;
						});
						if (obj) {
							obj.weight += 1;
						} else {
							obj = {
								name: word,
								weight: 1
							};
							if(obj.name.length > 3) {
								arr.push(obj);
							}
						}
						return arr;
					}, []);

				Highcharts.chart('wordContainer', {
					series: [{
						type: 'wordcloud',
						data: data,
						name: 'Occurrences'
					}],
					title: {
						text: ''
					}
				});
			}
			document.getElementById("story").value = '';
		}

		function showTab(evt, tabName) {
			var i, tabcontent, tablinks;

			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}

    		tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace("current_page_item", "");
			}

			document.getElementById(tabName).style.display = "block";
			evt.currentTarget.className += " current_page_item";
		}
	</script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</body>
</html>