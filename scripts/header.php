<?php require "script.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework 17</title>
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <script type="text/javascript" src="../js/jquery-1.11.1.min.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="container clearfix">
        <form>
            <input class="search" type="search" placeholder="Поиск"/>
        </form>
        <a href="#"><img class="search-icon" src="img/search.png" alt="Search"></a>
        <nav class="menu">
            <?php
            echo "<ul id=\"menu\">";
            foreach($navItems as $item) {
                echo "<li><a href=".$item['url'].">".$item['title']."</a></li>";
            };
            echo "</ul>";
            ?>
        </nav>
    </div>