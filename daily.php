<?php include 'includes/config.php';?>

<?php

if(isset($_GET['day'])){ //show the selected day
    
    $day = $_GET['day'];
    
}else{ //show today
    
    $day = date('l');
    
}

//$day = "Sunday";

switch($day){
	case "Sunday":
		$backgroundColor = "#EF435E";
		$dayName = "Soulful Sunday";
		$songTitle = '"La-La (Means I Love You)" by The Delfonics';
		$video = "https://www.youtube-nocookie.com/embed/nHJPb08KI1E";
		$albumCover = "http://edison.seattlecentral.edu/~fivarr01/itc240/retro/images/delfonics.jpg";
		$albumTitle = "La La Means I Love You";
		$altTag = "La La Means I Love You";
		$info = 'The Delfonics are a pioneering Philadelphia soul singing group, popular in the late 1960s and early 1970s. Their most notable hits include "La-La (Means I Love You)", "Didn\'t I (Blow Your Mind This Time)", "Break Your Promise", "I\'m Sorry", and "Ready or Not Here I Come (Can\'t Hide from Love)". Their hit songs were all written by songwriter and producer Thom Bell and lead vocalist and founder William Hart. Their songs have been used extensively in film soundtracks, including Quentin Tarantino\'s 1997 movie Jackie Brown, in which "La-La (Means I Love You)" and "Didn\'t I Blow Your Mind" underscore the pivotal relationship between the characters played by Pam Grier and Robert Forster.<br> <i>(via Wikipedia)</i>';
		break;
	case "Monday":
		$backgroundColor = "#F79F99";
		$dayName = "Melancholy Monday";
		$songTitle = '"Amber" by 311';
		$video = "https://www.youtube-nocookie.com/embed/SUFSB2plwzM";
		$albumCover = "http://edison.seattlecentral.edu/~fivarr01/itc240/retro/images/311.jpg";
		$albumTitle = "From Chaos";
		$altTag = "From Chaos";
		$info = '311 (pronounced "three-eleven") is an American rock band from Omaha, Nebraska. The band was formed in 1988 by vocalist and guitarist Nick Hexum, lead guitarist Jim Watson (who would later be replaced by Tim Mahoney), bassist Aaron "P-Nut" Wills and drummer Chad Sexton. In 1992, Doug "SA" Martinez joined to sing and provide turntables for 311\'s later albums, rounding out the current line-up. The band\'s name originates from the police code for indecent exposure in Omaha, Nebraska, after the original guitarist for the band was arrested for streaking.<br> <i>(via Wikipedia)</i>';
		break;
	case "Tuesday":
		$backgroundColor = "#FDCFAF";
		$dayName = "Turn Up Tuesday";
		$songTitle = '"Krazy [ft. Lil\' Jon]" by Pitbull';
		$video = "https://www.youtube-nocookie.com/embed/S0vGsyprO54";
		$albumCover = "http://edison.seattlecentral.edu/~fivarr01/itc240/retro/images/pitbull.jpg";
		$albumTitle = "Rebelution";
		$altTag = "Rebelution";
		$info = 'Armando Christian Pérez, (born January 15, 1981) better known by his stage name Pitbull, is an American rapper. His first recorded mainstream performance was on a solo track from Lil Jon\'s 2002 album Kings of Crunk, which featured Pitbull rapping over Jon\'s production. In 2004, Pitbull released his debut album titled M.I.A.M.I. (backronym for Money Is A Major Issue), under TVT Records; the album included production from high-profile producers Lil Jon and Jim Jonsin. Pitbull later released his second album El Mariel, in 2006 and his third, The Boatlift, in 2007.[6] His fourth album, Rebelution (2009), included the hit single "I Know You Want Me (Calle Ocho)", which was his first internationally popular song, and ultimately peaked at number two on the Billboard Hot 100.<br> <i>(via Wikipedia)</i>';
		break;
	case "Wednesday":
		$backgroundColor = "#CED2AF";
		$dayName = "Wildstyle Wednesday";
		$songTitle = '"The Message" by Grandmaster Flash & The Furious Five';
		$video = "https://www.youtube-nocookie.com/embed/gYMkEMCHtJ4";
		$albumCover = "http://edison.seattlecentral.edu/~fivarr01/itc240/retro/images/gmf.jpg";
		$albumTitle = "The Message";
		$altTag = "The Message";
		$info = 'Grandmaster Flash and the Furious Five was an influential American hip hop group formed in the South Bronx of New York City in 1978. Composed of one DJ (Grandmaster Flash) and five rappers (Melle Mel, The Kidd Creole, Keith Cowboy, Mr. Ness/Scorpio, and Rahiem), the group\'s use of turntablism, break-beat deejaying, choreographed stage routines and lyricism was a significant force in the early development of hip-hop music.The group rose to fame in the early 1980s with their first successful funk single "Freedom" and later on with their magnum opus "The Message", which is often cited as among the most influential hip hop songs. However, in 1983, relations between Grandmaster Flash, Rahiem and The Kidd Creole became strained with SugarHill records, and half the group left to record on Elektra Records. A reunion was organized in 1987, and it released a new album. Afterward, the sextet disbanded permanently.<br> <i>(via Wikipedia)</i>';
		break;
	case "Thursday":
		$backgroundColor = "#86B2A3";
		$dayName = "Grunge Thursday";
		$songTitle = '"Jeremy" by Pearl Jam';
		$video = "https://www.youtube-nocookie.com/embed/MS91knuzoOA";
		$albumCover = "http://edison.seattlecentral.edu/~fivarr01/itc240/retro/images/pj.jpg";
		$albumTitle = "Ten";
		$altTag = "Ten";
		$info = 'Pearl Jam is an American rock band, formed in Seattle, Washington, in 1990. Since its inception, the band\'s line-up has comprised Eddie Vedder (lead vocals), Mike McCready (lead guitar), Stone Gossard (rhythm guitar) and Jeff Ament (bass). The band\'s fifth member is drummer Matt Cameron (also of Soundgarden), who has been with the band since 1998. Boom Gaspar (piano) has also been a session/touring member with the band since 2002. Drummers Dave Krusen, Matt Chamberlain, Dave Abbruzzese and Jack Irons are former members of the band.<br> <i>(via Wikipedia)</i>';
		break;
	case "Friday":
		$backgroundColor = "#4C88B6";
		$dayName = "Funky Friday";
		$songTitle = '"We Continue" by DāM-FunK';
		$video = "https://www.youtube-nocookie.com/embed/LEu_ARi0Fc8";
		$albumCover = "http://edison.seattlecentral.edu/~fivarr01/itc240/retro/images/df.jpg";
		$albumTitle = "Invite the Light";
		$altTag = "Invite the Light";
		$info = 'Damon Garrett Riddick (born June 15, 1971), better known by his stage name Dâm-Funk (often stylized as DāM-FunK), is an American modern-funk musician, vocalist and producer from Pasadena, California. In 2007, after years of struggling to begin a musical career and a brief apprenticeship under S.O.L.A.R. producer Leon Sylvers III, Dâm-Funk signed with the L.A.-based record label Stones Throw Records. DāM-FunK has shared the stage/performed with and/or played on the same bill with many great artists, just over the past few years: Todd Rundgren, Ariel Pink, Steve Arrington, DJ QUIK, Nite Jewel, INC (formerly: Teen INC.), Animal Collective, Panda Bear, Jody Watley, Mayer Hawthorne, PBW, Snoop Dogg, Warren G., MC Eiht, De La Soul, Madlib, Flying Lotus, The Gaslamp Killer, J.Rocc, James Pants, Moodymann, Ron Trent, Taz Arnold (of SA-RA), Soopafly, DAZ & Kurupt, Terrace Martin, Etta James, Erykah Badu, The Egyptian Lover, Juan Atkins, P-Funk All Stars, The Stone City Band, and Funk legend Junie Morrison (formerly of Ohio Players & P-Funk).<br> <i>(via Wikipedia)</i>';
		break;
	case "Saturday":
		$backgroundColor = "#ABABEF";
		$dayName = "Surprise Saturday";
		$songTitle = '"Right Here" by SWV';
		$video = "https://www.youtube-nocookie.com/embed/vHwXoY0LiQk";
		$albumCover = "http://edison.seattlecentral.edu/~fivarr01/itc240/retro/images/swv.jpg";
		$albumTitle = "It's About Time";
		$altTag = "It's About Time";
		$info = 'Sisters With Voices, better known as SWV, is an American female R&B, Grammy nominated trio from New York City. Formed in 1990 as a gospel group, SWV became one of the most successful R&B groups of the 1990s. They had a series of hits, including "Weak", "Right Here/Human Nature", "I\'m So into You", and "You\'re the One". The group disbanded in 1998 to pursue solo projects, and reunited in 2005. As of 2015, they have sold more than 25 million records, making them one of the best selling girl groups of all time.<br> <i>(via Wikipedia)</i>';
		break;
}
?>

<?php include 'includes/header.php';?>

<h1><?=$pageID?></h1>

<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Erica+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Kreon' rel='stylesheet' type='text/css'>
<title>SOTD</title>
</head>
<body>
<style>
	body{background:<?=$backgroundColor?>;}
	h1{
		font-family: 'Erica One', sans-serif;
		font-size: 60px;
		text-align: center;;
	}
	h2{
		font-family: 'Kreon', sans-serif;
		font-size: 35px;
		text-align: center;
	}
	p{
		font-family: 'Kreon', sans-serif;
		font-size: 20px;
		text-align: center;
	}
	iframe{
		display: block;
		margin: 0 auto;
	}
	.info {
		border: 3px solid;
		border-radius: 5px;
		background: #ffffff;
		width: 460px;
		height: auto;
		margin: auto;
		padding: 1%;
	}
</style>
<h1><strong>Song of the Day</strong></h1>
<h2><?=$dayName?></h2>

<iframe width="854" height="480" src="<?=$video?>" frameborder="0" allowfullscreen></iframe>
<p><?=$songTitle?></p>

<p>From the Album: <i><?=$albumTitle?></i></p>
<p style "text-align: center;"><img src="<?=$albumCover?>" alt="<?=$altTag?>" style="width:500px; height:500px;" align="middle"></p>

<p>More About <?=$dayName?>'s Artist:</p>
<div class="info"><?=$info?></div>

</body>
</html>

<p><a href="daily.php?day=Sunday">Sunday</a></p>
<p><a href="daily.php?day=Monday">Monday</a></p>
<p><a href="daily.php?day=Tuesday">Tuesday</a></p>
<p><a href="daily.php?day=Wednesday">Wednesday</a></p>
<p><a href="daily.php?day=Thursday">Thursday</a></p>
<p><a href="daily.php?day=Friday">Friday</a></p>
<p><a href="daily.php?day=Saturday">Saturday</a></p>

<?php include 'includes/footer.php';?>