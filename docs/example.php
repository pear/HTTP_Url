<?php
/**
* This example will decode the url given and display its
* constituent parts.
*/

	include('HTTP/Url.php');

	$url =& new HTTP_Url('http://www.php.net/#top');
?>
<html>
<body>

<pre>
Protocol...: <?=$url->protocol?>

Username...: <?=$url->user?>

Password...: <?=$url->pass?>

Server.....: <?=$url->host?>

Port.......: <?=$url->port?>

File/path..: <?=$url->path?>

Querystring: <?=$url->getQueryString()?>

Anchor.....: <?=$url->anchor?>


Full URL...: <?=$url->getUrl()?>
</pre>

</body>
</html>
