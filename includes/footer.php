	</div>
	<hr id="hidden" />
	<div id='footer'>
	</div>
</div>

	<div class="container prepend-top">
	<p>
		&copy; Copyright 2011 WillBowling.com, All Rights Reserved. Site Design by <a style="color: #666; padding:0;" href="http://www.tiltedcircle.com" target="_blank">TiltedCircle.com</a> <br /><br />
		<!--
		<a href="http://validator.w3.org/check?uri=referer"><img src="/portfolio/images/xhtml.gif" alt="Valid XHTML 1.0 Transitional" height="20" width="77" /></a> 
		<a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="/portfolio/images/css.gif" alt="Valid CSS!" height="20" width="77" /></a>
		-->
	</p>
    <iframe src="http://www.facebook.com/widgets/like.php?href=http://www.willbowling.com"
        style="border:none; width:450px; height:80px; overflow:hidden;"></iframe>
	</div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="/portfolio/lib/colorbox/colorbox/jquery.colorbox-min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){	
				//Examples of how to assign the ColorBox event to elements
				$("a[rel='regGallery']").colorbox();
				$("a[rel='fadeGallery']").colorbox({transition:"fade"});
				$("a[rel='noGallery']").colorbox({transition:"none", width:"75%", height:"75%"});
				$("a[rel='slideshow']").colorbox({slideshow:true});
				$(".example5").colorbox();
				$(".example6").colorbox({iframe:true, innerWidth:425, innerHeight:344});
				$(".example7").colorbox({width:"80%", height:"80%", iframe:true});
				$(".example8").colorbox({width:"50%", inline:true, href:"#inline_example1"});
				$(".example9").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>

</body>
</html>
