<?php

require_once('./../Libraries/FirePHPCore/lib/FirePHPCore/fb.php');

fb('Main Page');

?>
<html>
<head>
  <script type="application/x-javascript" src="jquery.js"></script>
</head>

<body bgcolor="red">
  
<iframe id="frame1" name="frame1" src="Version1.php?frame=1" width="500" height="300"></iframe>

<iframe src="http://com.googlecode.firephp.macbook.home.cadorn.net/Libraries/ZendFramework2/demo/public/" width="500" height="300"></iframe>

<p><a href="#" onClick="$.get('Version1.php?var=1');">Version1.php?var=1</a></p>
<p><a href="#" onClick="$.get('ConsoleTest.php', {var1:'val1'});">ConsoleTest.php (GET)</a></p>
<p><a href="#" onClick="$.post('ConsoleTest.php', {var1:'val1'});">ConsoleTest.php (POST)</a></p>
<p><a target="frame1" href="TableTest.php">TableTest.php (GET)</a></p>
<p><a href="/ZendTest.php">ZendTest.php (Code in incubator)</a></p>

<p><a href="#" onClick="$.get('NoContentTest.php');">AJAX - NoContentTest.php</a></p>


<p><a href="/NoContentTest.php">PAGE - NoContentTest.php</a></p>


<p><a href="/Test1.php">Home</a></p>
<p><a href="/Libraries/">Libraries</a></p>

</body>
</html>