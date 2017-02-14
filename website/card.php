<!doctype html>
<html lang="en" style="overflow:hidden;">
<head>
  <meta charset="utf-8" />
  
  <!-- disable zooming -->
  <meta name="viewport" content="initial-scale=1.0, user-scalable=0" />
  
  <title>cards</title>
  
  <link rel="stylesheet" href="./css/style.css" media="screen" />

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

<!-d as mÃ¼sste mna(n) dann mal noch ein bisschen schÃ¶ner programmieren ->
    <style media="screen">
    .container {
      overflow-y: hidden;
      overflow-x: hidden;
      width: <?php echo $width?>px;
      height: <?php echo $height?>px;
      position: relative;
/*      margin: 0 auto 40px;
      border: 1px solid #FFF; */
      -webkit-perspective: 800px;
         -moz-perspective: 800px;
           -o-perspective: 800px;
              perspective: 800px;
    }

    #card {
      width: 100%;
      height: 100%;
      position: absolute;
      top:50%;
      margin-top:-<?php echo ($height/2)?>px;
      -webkit-transition: -webkit-transform 3s;
         -moz-transition: -moz-transform 3s;
           -o-transition: -o-transform 3s;
              transition: transform 3s;
      -webkit-transform-style: preserve-3d;
         -moz-transform-style: preserve-3d;
           -o-transform-style: preserve-3d;
              transform-style: preserve-3d;
    }

    #card.flipped {
      -webkit-transform: rotateY( 180deg );
         -moz-transform: rotateY( 180deg );
           -o-transform: rotateY( 180deg );
              transform: rotateY( 180deg );
    }

    #card figure {
      display: block;
/*      height: 100%;
      width: 100%;
      line-height: 260px;
      color: white;
      text-align: center;
      font-weight: bold;
      font-size: 140px; */
      position: absolute;
      -webkit-backface-visibility: hidden;
         -moz-backface-visibility: hidden;
           -o-backface-visibility: hidden;
              backface-visibility: hidden;
    }

    #card .front {
      background: white;
    }

    #card .back {
      background: white;
      -webkit-transform: rotateY( 180deg );
         -moz-transform: rotateY( 180deg );
           -o-transform: rotateY( 180deg );
              transform: rotateY( 180deg );
    }
  </style>

</head>
<body bgcolor="#FFF">


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
