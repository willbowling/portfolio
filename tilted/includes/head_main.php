 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
require($_SERVER['DOCUMENT_ROOT'] . '/php/simplepie.inc');

$feed = new SimplePie();
$feed->feed_url('http://cssbeauty.com/rss/news/');
$feed->cache_location($_SERVER['DOCUMENT_ROOT'] . '/cache');
$feed->init();

$feed->handle_content_type();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<meta http-equiv="Expires" content="-1" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta name="ROBOTS" content="ALL" />
	<meta name="author" content="Will Bowling" />
	<meta name="verify-v1" content="zmS4op7mp9wYnMq7YzecEVyecW05a44XUrN6jPkoFtY=" />
	<meta name="Keywords" content="web design and development, CSS based design, css, design, developer, small business web design, florida web design, professional web design, css web design, tampa web design, real estate agent web design, cascading style sheet, style sheet, style sheet only, css style sheet, style sheet portfolio, print design, custom web design, Tampa, Florida, 33635, Tampa Florida 33635, Atlanta, GA, 30350, Hartwell, GA, 30643, south east, south, east " />
	<meta name="Description" content="A portfolio created using a css style sheet with no tables. Web design projects depicting my (will bowling) design and development skills. SEO aka search engine optimization techniques. Organic search friendly. " />
	<meta name="robots" content="all" />
	<title>:: Tilted Circle :: Cost Effective Web Design, Graphic Design, and FREE XBOX Cheat Codes ::</title> 
	<link rel="stylesheet" type="text/css" href="./css/tilt_default.css" />
<!-- IE Conditional Styles -->
<!--[if IE]>
		<link href='styles/will8ie.css' rel='stylesheet' rev='stylesheet'  type='text/css' media='all' >
	<![endif]-->
<script language="Javascript" type="text/javascript" src="validate.js"></script> <script type='text/javascript'>
<!-- 
function popup(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=440,height=290,scrollbars=no');
return false;
}
//-->

</script> 
</head>
<body>
<div id="container">
<div id="header">
	<h3 id="heading"> <span> Tilted Circle : Cost Effective Web Sites, Logo Design and FREE XBOX Cheat Codes!</span> </h3> 
</div>	
	<div id='body'>
		<div id='nav'>
		<ul>
			<li>
				<a href='./index.php' title='home'> Home</a> 
			</li>
			<li>
				<a href='./temp.php' title='About Us'> About Us</a> 
			</li>
			<li>
				<a href='./temp.php' title='Design Price List'> Price List</a> 
			</li>
			<li>
				<a href='./news.php' title='Industry News'> Industry News</a> 
			</li>
			<li>
				<a href='./temp.php' title='contact'> Contact</a> 
			</li>
			<li>
				<a href='./temp.php' title='affiliates'> Affiliates</a> 
			</li>
		</ul>
	</div>