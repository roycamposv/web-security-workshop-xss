<?php
if (isset($_POST['comment'])) {
  $comment = $_POST['comment'] . "<br>";
  file_put_contents('comments.txt', $comment, FILE_APPEND);
}
header('Location: index.php');
?>

