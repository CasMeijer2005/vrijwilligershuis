<?php
require_once 'process.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1>test</h1>

    <form action="process.php" method="POST">
        <div class="form-group">
            <lable>name</lable>
            <input type="text" name="name">
        </div>
        <div class="form-group">
            <lable>phone number</lable>
            <input type="text" name="phone">
        </div>
        <div class="form-group">
            <lable>email address</lable>
            <input type="text" name="email">
        </div>
        <div class=" formg-roup">
            <select name="category" id="">
                <option value=""></option>
                <option value="meubels">meubels</option>
                <option value="meubels">vervoer</option>
                <option value="meubels">kleding</option>
                <option value="meubels">voetsel</option>
                <option value="meubels">fietsen</option>
                <option value="meubels">overig</option>
            </select>
        </div>
        <input type="submit">
    </form>
</body>

</html>