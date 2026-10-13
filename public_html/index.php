<?php
define('SSL_ON', 'yes');
if(SSL_ON == 'yes' && getenv('HTTPS') != 'on'){
   header('Location: https://'.getenv('SERVER_NAME').getenv('REQUEST_URI'));
   exit();
}
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<title>8 Romans</title>
<meta name="robots" content="noodp" />
</head>

<body>

	<h1>Coming soon...</h1>

</body>
</html>