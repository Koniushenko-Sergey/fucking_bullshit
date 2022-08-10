<?php
$offer = $_GET['id'];
$associations = $arrayName = array(0 => "https://google.com", 1 => "https://bing.com");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="referrer" content="no-referrer">
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="cache-control" content="no-cache">
</head>
<body>
<noscript>
<META HTTP-EQUIV="refresh content=0; url='<?php echo $associations[$offer]; ?>'">
</noscript>
<script>
setTimeout(function(){window.location.href="<?php echo $associations[$offer]; ?>";},0);
</script>
</body>
</html>
