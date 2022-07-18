<?php include 'includes/session.php'; ?>
<?php

$id       =  $_GET['id'];
$status   =  $_GET['status'];


if ($status == 'active') {
  $conn = $pdo->open();

  $conn->prepare("UPDATE cart SET status=:status WHERE id=:id")->execute(['status' => $status, 'id' => $id]);

  $pdo->close();
  header('location: users.php');

} else {
  $conn = $pdo->open();

  $conn->prepare("UPDATE cart SET status=:status WHERE id=:id")->execute(['status' => $status, 'id' => $id]);

  $pdo->close();
  header('location: users.php');
}
