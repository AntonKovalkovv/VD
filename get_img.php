<?php

include "array_basa.php";

 
 

$url = "https://ok.ru/oovernydru";
$html = file_get_contents($url);
 
$array_hrefs = [];

if ($html) {
    $matches = [];
    preg_match_all('/href="([^"]*\/topic\/[^"]*)"/', $html, $matches);
    
    if (isset($matches[1])) {
        foreach ($matches[1] as $href) {
            if (!in_array($href, $array_hrefs)) {
                $array_hrefs[] =  $href;
            }
        }
    }
}
$newArray = [];

foreach ($array_hrefs as $item) {
    $newArray[] = "https://ok.ru" . $item;
}
$array_hrefs = $newArray;

 
 

$ar_img = [];

foreach ($array_hrefs as $url) {
    $html = file_get_contents($url);

    if ($html) {
        $doc = new DOMDocument();
        @$doc->loadHTML($html);

        $images = $doc->getElementsByTagName('img');

        foreach ($images as $image) {
            $class = $image->getAttribute('class');
            if (strpos($class, 'media-photos_img') !== false) {
                $src = $image->getAttribute('src');
                $ar_img[] = $src;
            }
        }
    }
}
$ar_img = array_reverse($ar_img);
// $ar_img = array_slice($ar_img, 2);

foreach ($ar_img as $img) {
            if (!in_array($img, $array_basa)) {
                $array_basa[] =  $img;
                if (count($array_basa)>= 200) {
                    $array_basa  = array_slice($array_basa,1);
                }
            }
        }
// Записываем массив в файл
file_put_contents('array_basa.php', '<?php $array_basa = ' . var_export($array_basa, true) . ';'); 



$ar_img = array_reverse($ar_img);
$ar_img2 = '';
foreach ($ar_img as $ele) {
    $ar_img2 .=  '<img width="100px"  src="' . $ele . '" alt="Image">' ;
}  

echo $ar_img2;

 
// $array_basa1 = array_reverse($array_basa);

// $array_basa2 = '';
// foreach ($array_basa1 as $ele) {
//     $array_basa2 .=  '<img width="100px"  src="' . $ele . '" alt="Image">' ;
// }    


?>