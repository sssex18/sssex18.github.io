
<meta name="referrer" content="no-referrer">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="/videojs/devtools.js"></script>
<link href="/videojs/videojs.watermark.css" rel="stylesheet"/>
<style>body{margin:0}</style>
<script>
	function play(link) {
		xmlhttp=new XMLHttpRequest(); xmlhttp.open("GET", link, false); xmlhttp.send();
		sv = xmlhttp.responseText;
		document.write("\<video style=\"z-index:2;width:100%;height:100%;background-color:#000;-o-object-fit:fill;object-fit:fill\" controls=\"controls\" autoplay=\"true\" preload=\"auto\" height=\"auto\" poster=\"/videojs/loading.gif\" src=\""+sv+"\"\>\<\/video\><a class=\"vjs-watermark\" href=\"http://tvmienphi.tv\" target=\"_blank\"><img src=\"/tvmienphitv.png\"/></a>");
	}
	play("/sv2plusr.php?id=cartoon&token=zzT4wAgj1RkQMUhhz29PxA&time=1629443231");
</script>
