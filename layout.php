<link rel="stylesheet" type="text/css" href="/Styles/main.css">
<link rel="stylesheet" type="text/css" href="/Styles/menu.css">

<script src="/Scripts/jquery.min.js" type="text/javascript"></script>
<script src="/Scripts/menu.js" type="text/javascript"></script>
<script src="/Scripts/cufon-yui.js" type="text/javascript"></script>
<script src="/Scripts/yiggivoo.cufonfonts.js" type="text/javascript"></script>

<script type="text/javascript">
 	Cufon.replace('.title', { fontFamily: 'Yiggivoo Unicode 3D Italic', hover: true, 
	color: "-linear-gradient(#000fb8, 0.1=#006eb8, 0.65=#f7faaa , 0.85=#f5ec42)",
	textShadow: "1px 1px rgba(0, 0, 0, 0.3)"
 	}); 
</script>
<script type="text/javascript">
 	function ApplyContentHeight(){
 		$('.content_pre_bottom').height(0);
 		var doc_height = $(document).height();
 		var body_height = $('.body').height();
 		if (doc_height > body_height + 20) {
 			$('.content_pre_bottom').height(doc_height - body_height - 20);
 		}
 	};
 	$(document).ready(ApplyContentHeight);
 	$(window).resize(ApplyContentHeight);
</script>
<script type="text/javascript">
 	$('document').ready(function(){
 	    $('.menu').fixedMenu();
 	});
</script>
