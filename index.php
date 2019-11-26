<?php
  
  //
  $addr = $_SERVER["REMOTE_ADDR"];
  $host = gethostbyaddr($addr);
  $refer = $_SERVER["HTTP_REFERER"];
  $agent = $_SERVER["HTTP_USER_AGENT"];
  
echo <<< EOM
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1">
  <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/mobile/latest/jquery.mobile.js"></script>
  <link type="text/css" rel="stylesheet" href="https://code.jquery.com/mobile/latest/jquery.mobile.css"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
  <title>chkenv</title>
</head>
<body>
  <div id="main" data-role="page">
  
    <div data-role="header">
      <h1>chkenv</h1>
    </div>

    <div data-role="content">

  		<h2>環境変数確認</h2>
      <p></p>
			<div data-demo-html="true">
				<ul data-role="listview" data-inset="true">
					<li>
					<p>Remote Address</p>
					<h2>$addr</h2>
					</li>
					<li>
					<p>Remote Hostname</p>
					<h2>$host</h2>
					</li>
					<li>
					<p>Referer</p>
					<h2>$refer</h2>
					</li>
					<li>
					<p>User Agent</p>
					<h2>$agent</h2>
					</li>
				</ul>
			</div>
			<p>$agent</p>

    </div>

    <div data-role="footer" data-position="fixed">
      <h1></h1>
    </div>
    
  </div>

</body>
</html>
EOM;

?>
