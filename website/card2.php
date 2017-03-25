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
	width: 220px;
	height: 300px;
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
			<img src="<?php echo $_GET["front"] ?>">
		</div>
		<div class="back">
			<img src="<?php echo $_GET["front"] ?>">
		</div>
	</div>
</div>


</script>
</body>
</html>
