<?php


//echo "<h1>Displaying color using composer<h1>";

require 'vendor/autoload.php';

use League\ColorExtractor\Color;
use League\ColorExtractor\ColorExtractor;
use League\ColorExtractor\Palette;

$palette = Palette::fromFilename('download.png');

// $palette is an iterator on colors sorted by pixel count
?>

<ul>
<?php
foreach($palette as $color => $count) {
    // colors are represented by integers
   // echo Color::fromIntToHex($color), ': ', $count, "\n";
	$value=Color::fromIntToHex($color);

	echo "<li style='background-color:$value'>$value</li>";
}
?>
</ul>
<?php
// it offers some helpers too
$topFive = $palette->getMostUsedColors(5);
var_dump($topFive);
$colorCount = count($palette);

//$blackCount = $palette->getColorCount(Color::fromHexToInt('#000000'));


// an extractor is built from a palette
$extractor = new ColorExtractor($palette);

// it defines an extract method which return the most “representative” colors
$colors = $extractor->extract(5);
var_dump($colors);