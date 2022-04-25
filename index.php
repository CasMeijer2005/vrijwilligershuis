<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vrijwilligershuis Nieuwegein</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <h1>test</h1>

    <form action="insert.php" method="POST">
        <div class="form-group">
            <lable>Naam</lable>
            <input type="text" name="name">
        </div>
        <div class="form-group">
            <lable>Telefoon Nummer</lable>
            <input type="text" name="phone">
        </div>
        <div class="form-group">
            <lable>Email Adress</lable>
            <input type="text" name="email">
        </div>
        <div class=" formg-roup">
            <select name="category" id="">
                <option value=""></option>
                <option value="meubels">Meubels</option>
                <option value="meubels">Vervoer</option>
                <option value="meubels">Kleding</option>
                <option value="meubels">Voetsel</option>
                <option value="meubels">Fietsen</option>
                <option value="meubels">tolk</option>
            </select>
        </div>
        <input type="submit" name="save">
    </form>
</body>

</html>