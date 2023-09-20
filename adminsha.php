<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];

include "blocks/connection_bd.php";
 
if (!$connection) die("Ошибка подключения: " . mysqli_connect_error());

//mysqli_query($connection, "CREATE TABLE IF NOT EXISTS posts (id INT AUTO_INCREMENT PRIMARY KEY, text VARCHAR(1000) NOT NULL)");

if ($_POST['new_post']) {
    $newPostText = mysqli_real_escape_string($connection, $_POST['new_post']);
    mysqli_query($connection, "INSERT INTO posts (text) VALUES ('$newPostText')");
}

if ($_GET['delete_id']) {
    $deleteId = mysqli_real_escape_string($connection, $_GET['delete_id']);
    mysqli_query($connection, "DELETE FROM posts WHERE id = '$deleteId'");
}

if ($_POST['edit_id'] && $_POST['edited_text']) {
    $editId = mysqli_real_escape_string($connection, $_POST['edit_id']);
    $editedText = mysqli_real_escape_string($connection, $_POST['edited_text']);
    mysqli_query($connection, "UPDATE posts SET text = '$editedText' WHERE id = '$editId'");
}

$result = mysqli_query($connection, "SELECT id, text FROM posts");
?>
 

<!doctype html>
 
<html lang="ru">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta name="keywords" content="vernyi-drug.kz , верный друг, помощь животным, help , Караганда">
    <meta name="description" content="Караганда, 'Верный Друг' - это сообщество неравнодушных волонтеров нашего города.Мы предлагаем помощь животным и ищем верных друзей.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  панель админа </title>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link  rel= "icon"  href= "img/favicon.ico"  type= "image/x-icon" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/adminsha.css">
    <script src="main.js?v=<?php echo strval(time()); ?>" defer ></script>
 </head>
<body>

<?php
   include "blocks/header.php";
?>
    <div style='text-align: center; margin-top: 100px;'> 
    <h1>Добро пожаловать Админ!</h1> 
    <div   class="center-div">
    <h2 >Блок постов</h2>
    <div id="result"></div>
    <button class="rounded-3" id="showTimeButton">Обновить посты</button>
  </div> 
    <div class="second-div"> 
              <table align="center" style="margin: 20px auto;" border="1">
                      <tr>
                          <!-- <th>ID</th> -->
                          <th>Текст</th>
                          <th>Действия</th>
                      </tr>
                      <?php while ($row = mysqli_fetch_assoc($result)): ?>
                      <tr>
                          <!-- <td><?= $row['id'] ?></td> -->
                          <td align="left"><?= htmlspecialchars($row['text']) ?></td>
                          <td align="right">
                              <a href="?delete_id=<?= $row['id'] ?>">Удалить</a> |
                              <a href="#" onclick="editRow(<?= $row['id'] ?>, '<?= htmlspecialchars($row['text']) ?>');">Изменить</a>
                          </td>
                      </tr>
                      <?php endwhile; ?>
                  </table>

                  <h2>Добавить новую запись</h2>
                  <form method="post">
                      <textarea name="new_post" rows="4" cols="50" style="width: 80%;"></textarea><br>
                      <input type="submit" value="Добавить">
                  </form>

                  
                  <form id="editForm" style="display: none;" method="post">
                    <h2>Изменить запись</h2>
                      <input type="hidden" name="edit_id" id="editId">
                      <textarea name="edited_text" id="editedText" rows="4" cols="50" style="width: 80%;"></textarea><br>
                      <input type="submit" value="Изменить">
                  </form>

        </div>

    <a href='logout.php'>Выйти</a> 
    </div> 
 
<!-- скрипт кнопки Блока постов -->
<script type="text/javascript">
document.getElementById("showTimeButton").addEventListener("click", function() {
  fetch("get_img.php")
    .then(response => response.text())
    .then(ar_img => {
      document.getElementById("result").innerHTML =  ar_img ;
    });
});
function editRow(id, text) {
            document.getElementById('editId').value = id;
            document.getElementById('editedText').value = text;
            document.getElementById('editForm').style.display = 'block';
        }
 </script>
 

<?php mysqli_close($connection); ?>    
      

<?php
   include "blocks/footer.php";

?> 