<h1>Hackers Cardgame</h1>
Never Play "Red Team" help out with "Blue Team" and save the World<br><br>
please respect the license, People like Julian, Fefe, Frank... (just ask) are excluded from the 1978 Rule<br><br>
<a href="https://github.com/braindef/Hackers-Cardgame/blob/master/LICENSE">license</a>
<br><br>
   <?php

   $files = glob("*.*");

  for ($i=count($files)-200; $i<count($files); $i++)

{

$image = $files[$i];
$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
if (in_array($ext, $supported_file)) {
    echo '<a href="./'.$image .'"><img width=200 src="'.$image .'" ></a>';
    echo '
';

} else {
    continue;
 }

}

?>

