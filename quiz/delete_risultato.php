<?php
    require_once "config.php";
    if(!isset($_SESSION['username'])) {
        header("Location: index.php");
        die;
    }

    $id = intval($_GET['id']);
    $id_quiz = intval($_GET['id_quiz']);

    $sql = "DELETE FROM risultati WHERE id=$id";
    $result = mysqli_query($database, $sql);
    header("Location: quiz.php?id=$id_quiz");
?>
