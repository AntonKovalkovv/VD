<!doctype html>
<html lang="ru">
<head>
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4T4M6J9DJY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4T4M6J9DJY');
</script>
    <meta charset="UTF-8">
  <meta name="keywords" content="vernyi-drug.kz , верный друг, помощь животным, help , Караганда">
    <meta name="description" content="Караганда, 'Верный Друг' - это сообщество неравнодушных волонтеров нашего города.Мы предлагаем помощь животным и ищем верных друзей.">


      <!--<meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
    <title> Верный друг </title>
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link  rel= "icon"  href= "img/favicon.ico"  type= "image/x-icon" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="main.js?v=<?php echo strval(time()); ?>" defer ></script>
 </head>
<body>
<?php
   include "blocks/header.php";

?>
  

      <div class="container" id="myDiv">
         
      <h1 align="center" class="p-5"> "Верный Друг" - это сообщество неравнодушных волонтеров нашего города</h1>
      <div align="center">
                <a style="text-decoration: none;" href="https://www.instagram.com/vernyi_drug_krg/"> <img class="soc-www" src="img/ins.png" alt="" width="40" height="40"> </a>
                <a style="text-decoration: none;" href="https://ok.ru/oovernydru"><img class="soc-www" src='img/odno.png' alt="" width="40" height="40"> </a>
                <a style="text-decoration: none;" href="https://twitter.com/pomozhem_im"><img class="soc-www" src='img/twi.png' alt="" width="40" height="40"> </a>
                <a style="text-decoration: none;" href="https://vk.com/pomozhem_im"><img class="soc-www" src='img/vko.png' alt="" width="40" height="40"> </a>
                <a style="text-decoration: none;" href="https://wa.me/77002700025"><img class="soc-www" src='img/wha.png' alt="" width="40" height="40"> </a>
         </div>
      </div>
<?php
include "array_basa.php";

$array_basa1 = array_reverse($array_basa);
 
//$array_basa1 = array_slice($array_basa1,1);  
foreach ($array_basa1 as $ele) {
  echo '<div class="alert alert-warning mt-5 md mx-auto border-success rounded text-black" style="width:90%">' .
  '<h2 align="center" >*  *  *</h2>' .
  "<div id='gallery'>" .
  '<div class="image-container"><img src="' . $ele . '"  ></div></div></div>' . PHP_EOL;
  
}    
?>
      
<?php
   include "blocks/footer.php";

?>

