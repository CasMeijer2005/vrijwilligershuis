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

    <div id="container">
        <form id="RegForm" method="post" action="insert.php">
            <input type="text" name="name" id="username" placeholder="Username" required>
            <input type="text" name="email" id="email" placeholder="Email" required>
            <input type="text" name="phone" id="phone" placeholder="phonenumber" required>
            <select name="category" id="category">
                <option disabled value selected="category">selecteer een category</option>
                <option value="meubels">Meubels</option>
                <option value="meubels">Vervoer</option>
                <option value="meubels">Kleding</option>
                <option value="meubels">Voetsel</option>
                <option value="meubels">Fietsen</option>
                <option value="meubels">tolk</option>
            </select>
            <textarea type="notes" name="notes" id="notes" placeholder="notes" required></textarea>

            <input id="submit" type="submit" name="submit" value="submit">
        </form>
        </form>
    </div>
</body>

</html>