<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/header.css" type="text/css">
<link rel="stylesheet" href="css/slider.css" type="text/css">
<link rel="stylesheet" href="css/section.css" type="text/css">
<link rel="stylesheet" href="css/footer.css" type="text/css">
<link rel="stylesheet" href="css/media.css" type="text/css">
<script type="text/javascript" src="js/root.js"></script>
<script type="text/javascript" src="js/jcycle.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#slide').cycle('cover');


});

</script>
</head>
<body>
	<div class="test"></div>
<div class="header">
	<?php
include 'header.php';

?>
</div>
<div class="banner" id="slide">
<?php
include 'banner.php';

?>
</div>

<div class="section">
<?php
include 'section.php';

?>
</div>
<div class="footer">
<?php
include 'footer.php';

?>
</div>

</body>
</html>