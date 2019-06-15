<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>WEB</h1>
    <ol>
      <li><a href="index.php?id=HTML">HTML</li>
      <li><a href="index.php?id=CSS">CSS</li>
      <li><a href="index.php?id=JavaScript">JavaScript</li>
    </ol>
    <h2>
      <?php
        echo $_GET['id'];
      ?>
    </h2>
    <?php
    echo file_get_contests("data/".$_GET['id']);
     ?>
  </body>
</html>
