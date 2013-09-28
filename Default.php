<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>SFULO</title>
	<?php include 'layout.php'; ?>
	</head>
	<body class="body">
		<div class="page">
			<?php include 'top.php'; ?>			
			<hr class="line"/>
			<?php
error_reporting(0);
 include 'menu.php'; ?>			
			<hr class="line"/>

			<div class="content">
				<div class="content_top">
			</div>

			<div class="content_main">
				<?php

				$page_type = $_GET["page_type"];
				//echo $page_type;
				switch ($page_type) {
				    case "": header("Location: /news");
				    case "news":
				    case "news.admin":
				    case "news.add":
				    case "history":
				    case "congresses":
				    case "presidium":
				    case "subjects":
				    case "regulations":
				    case "visnyk":
				    case "subscription":
				    case "visnyk.admin":
				    case "visnyk.add":
				    case "visla":
				    case "library":
				    case "links":
				    case "message":
					include $page_type.'.php';
					break;
				}
				?>
			</div>
			
			<div class="content_pre_bottom">
			</div>

			<div class="content_bottom">
			</div>

			<hr class="line"/>

			<?php include 'bottom.php'; ?>
			
		</div>
	</body>
</html>
