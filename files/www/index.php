<html>
	<head>
		<title>openwrt-nicehash</title>
		<style type="text/css">
body {
	font-family: sans-serif;
}
		</style>
	</head>
	<body>
		<h1>openwrt-nicehash</h1>
		<hr />
		<h2>
			Payout address:
			<?php
				system("/usr/bin/get_btc_address");
			?>
		</h2>
		<p>
			<b>WARNING:</b> This software is currently just stubbed. It will not mine any coins yet!
		</p>
		<hr />
		<i>openwrt-nicehash 0.1</i>
	</body>
</html>
