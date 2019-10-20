<h1>Hackers Cardgame</h1>
Never Play "Red Team" help out with "Blue Team" and save the World<br><br>
please respect the license, People like Julian, Fefe, Frank, Paniq, Silvia... (just ask) are excluded from the 1978 Rule<br><br>
<a href="https://github.com/braindef/Hackers-Cardgame/blob/master/LICENSE">license</a>


Source:<br>
<a href="https://github.com/braindef/Hackers-Cardgame">https://github.com/braindef/Hackers-Cardgame</a><br>
<a href="https://github.com/braindef/Hackers-Cardgame2">https://github.com/braindef/Hackers-Cardgame2</a><br>
<a href="https://2hmorvqnlhwyrhvl6dwv4jqgnvhlaf2wxnrbmbhrbpmx5x3qqiwprjyd.onion/">https://2hmorvqnlhwyrhvl6dwv4jqgnvhlaf2wxnrbmbhrbpmx5x3qqiwprjyd.onion/</a>

<!-- and of course nobody would have the stupid idea to place microdots in such a repository https://en.wikipedia.org/wiki/Microdot-->

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

Source:<br>
<a href="https://github.com/braindef/Hackers-Cardgame">https://github.com/braindef/Hackers-Cardgame</a><br>
<a href="https://github.com/braindef/Hackers-Cardgame2">https://github.com/braindef/Hackers-Cardgame2</a><br>

