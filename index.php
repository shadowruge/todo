<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO VIEW</title>
</head>
<body>
   
   <?php
    require_once('todo_list.php');
    echo "<h2>TODO VIEW</h2><ol>"; 

  foreach($db->query("SELECT content FROM $table") as $row) {
    echo "<li>" . $row['content'] . "</li>";
};
  echo "</ol>";
    ?>
    <a href='additens.html'><button>Add itens</button></a>
</body>
</html>