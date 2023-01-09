

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="asd.php" action="">
        <input type="text" name="username" placeholder="Ваше Имя">
        <br>
        <br>
        <textarea name="comment" id="" cols="21" rows="5" placeholder="Комментарии"></textarea>
        <br>
        <br>
        <input type="submit" value="Отправить">
    </form>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="POST" action="asd.php" action="">
        <input type="text" name="username" placeholder="Ваше Имя">
        <br>
        <br>
        <textarea name="comment" id="" cols="21" rows="5" placeholder="Комментарии"></textarea>
        <br>
        <br>
        <input type="submit" value="Отправить">
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
<!--============================НАЧАЛО КОДА PHP. начал отсюда потому что при добавлении комментов, они выходят сверху и спускают вниз форму============================-->

<?php

    if( isset($_POST['username'])){

    $username = $_POST['username'];
    $comment = $_POST['comment'];

    $file = fopen("comment.html","a");
    fwrite($file, "<b>Name</b>: ".$username."<br>");
    fwrite($file, "<b>Comment</b>: ".$comment."");
    fwrite($file, "<button style='margin-left: 10px' type='button' class=\"btn btn-primary\" data-bs-toggle='modal' data-bs-target='#exampleModal'>Add</button><br><hr>");
    fclose($file);
    }
    require("comment.html")

?>

</html>