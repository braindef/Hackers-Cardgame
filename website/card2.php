<!doctype html>
<html lang="en" style="overflow:hidden;">
<head>
  <meta charset="utf-8" />
  
  <!-- disable zooming -->
  <meta name="viewport" content="initial-scale=1.0, user-scalable=0" />
  
<?php
if (empty($_GET["width"])) {
$width=220;
}
else {
$width=$_GET["width"];
}

if (empty($_GET["height"])) {
$height=300;
}
else {
$height=$_GET["height"];
}

?>

<style>
/* entire container, keeps perspective */
.flip-container {
	perspective: 1000px;
}
	/* flip the pane when hovered */
	.flip-container:hover .flipper, .flip-container.hover .flipper {
		transform: rotateY(180deg);
	}

.flip-container, .front, .back {
	width: 320px;
	height: 480px;
}

/* flip speed goes here */
.flipper {
	transition: 0.6s;
	transform-style: preserve-3d;

	position: relative;
}

/* hide back of pane during swap */
.front, .back {
	backface-visibility: hidden;

	position: absolute;
	top: 0;
	left: 0;
}

/* front pane, placed above back */
.front {
	z-index: 2;
	/* for firefox 31 */
	transform: rotateY(0deg);
}

/* back, initially hidden pane */
.back {
	transform: rotateY(180deg);
}

.flip-container:hover .flipper, .flip-container.hover .flipper, .flip-container.flip .flipper {
	transform: rotateY(180deg);
}

</style>

</head>
<body bgcolor="#FFF">


<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
	<div class="flipper">
		<div class="front">
			<!-- front content -->
		</div>
		<div class="back">
			<!-- back content -->
		</div>
	</div>
</div>



  <section class="container">
    <div id="card">
      <figure id="flip" class="front"><a href="<?php echo $_GET["back"] ?>" target="_blank"><img src="<?php echo $_GET["back"] ?>" width="<?php echo $width?>"></a></figure>
      <figure id="flip" class="back"><a href="<?php echo $_GET["front"] ?>" target="_blank"><img src="<?php echo $_GET["front"] ?>" width="<?php echo $width?>"></a></figure>
    </div>
  </section>
  <script src="./js/utils.js"></script><script src="./js/flip-card.js"></script>
<script>
var myVar = setInterval(function(){ myTimer() }, <?php echo(rand(3000,8000)); ?>);
function myTimer() {
  document.getElementById('flip').click();
}
</script>
</body>
</html>
