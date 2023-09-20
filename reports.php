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
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отчеты</title>
    <meta name="keywords" content="vernyi-drug.kz , верный друг, помощь животным, help , Караганда">
    <meta name="description" content="Караганда, 'Верный Друг' , #люби_оберегай_стерилизуй_вд ">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link  rel= "icon"  href= "img/favicon.ico"  type= "image/x-icon" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reports.css">
    <script src="main.js?v=<?php echo strval(time()); ?>" defer ></script>
 </head>
<body>
<?php
   include "blocks/header.php";
?>

<script>
	 // Функция для отображения увеличенной картинки и затемненного фона
function toggleEnlarged(image) {
     var overlay = document.querySelector('.overlay');
     var enlargedImage = document.querySelector('.enlarged-image');
     enlargedImage.src = image.src;
     overlay.style.display = 'flex';
}

    // Функция для скрытия увеличенной картинки и затемненного фона
function closeEnlarged() {
     var overlay = document.querySelector('.overlay');
  overlay.style.display = 'none';
 }
</script>
  <div class="container" align="center">
    <h2 align="center">Отчеты</h2>
    <img class="img-aboutreports unclickable" src="img/reports/vk-otchoty.png" alt="Картинка"  >
    <div class="image-container">
    	<?php
    		for ($i = 1; $i <= 9; $i++) {
    		    echo '<img src="img/reports/' . $i . '.jpg" onclick="toggleEnlarged(this)" alt="Картинка ' . $i . '">';
    		}
    	?>
    </div>	 
  </div>
  <div class="overlay" onclick="closeEnlarged()">
      <img class="enlarged-image" src="" alt="Увеличенная картинка">
  </div>
   
  
<?php
   include "blocks/footer.php";
?>