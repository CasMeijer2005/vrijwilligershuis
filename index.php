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
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>

<<<<<<< Updated upstream
    <div id="container">
        <form id="RegForm" method="post" action="insert.php">
            <input type="text" name="name" id="username" placeholder="Username" required>
            <input type="text" name="email" id="email" placeholder="Email" required>
            <input type="text" name="phone" id="phone" placeholder="phonenumber" required>
            <select name="category" id="category">
                <option disabled value selected="category">selecteer een category</option>
                <option value="meubels">Meubels</option>
                <option value="meubels">Vervoer aanbieden</option>
                <option value="meubels">Maatje / buddy worden</option>
                <option value="meubels">Fiets doneren</option>
                <option value="meubels">Kleding</option>
                <option value="meubels">Speelgoed</option>
                <option value="meubels">Verzorgingsproducten</option>
                <option value="meubels">Ik wil een activiteit organiseren /opzetten</option>
                <option value="meubels">Ik wil me inzetten als vrijwilliger</option>
                <option value="meubels">Taal / tolk</option>
            </select>
            <textarea type="notes" name="notes" id="notes" placeholder="notes" required></textarea>

            <input id="submit" type="submit" name="submit" value="submit">
        </form>
        </form>
    </div>
=======
    <header>
        <div class="header">
            <img src="assets/img/logo-small.svg" alt="vrijwilligershuis">
            <div class="text">
                <p>VrijwilligersHuis</p>
                <p>Nieuwegein </p>
            </div>

        </div>

        <nav>
            <div class="navbar">
                <p>Menu</p>
                <p>Account aanmaken</p>
                <p>Inloggen</p>
            </div>
        </nav>

    </header>

    <main></main>
    <div class="background">
        <div class="container">

            <div class="input-group">
                <input type="search" class="form-control rounded" placeholder="Vacature, evenement, organisatie etc..." aria-label="Search" aria-describedby="search-addon" />
                <button type="button" class="btn btn-outline-Light text-light purple">Zoek</button>
            </div>


            <div class="container d-flex justify-content-center">
                <form id="RegForm" method="post" action="insert.php">
                    <div class="row">
                        <div class="form-group col">
                            <lable class="">Naam</lable>
                            <input type="text" class="form-control" name="name" id="username" placeholder="Gebruikersnaam" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <lable class="">Email Address</lable>
                            <input type="text" class="form-control" name=" email" id="email" placeholder="Email Address" required>
                        </div>
                        <div class="fourm-group col">
                            <lable class="">Telefoonnummer</lable>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefoonnummer" required>
                        </div>
                    </div>

                    <div class="fourm-group">
                        <label>Selecteer een catergorie</label>
                        <select class="form-control" name="category" id="category">
                            <option disabled value selected="category">Selecteer een categorie</option>
                            <option value="meubels">Meubels</option>
                            <option value="meubels">Vervoer</option>
                            <option value="meubels">Kleding</option>
                            <option value="meubels">Voetsel</option>
                            <option value="meubels">Fietsen</option>
                            <option value="meubels">Tolk</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <lable>Schrijf hier wat belangrijke informatie</lable>
                        <textarea type="notes" class="form-control" name="notes" id="notes" placeholder="Notities" required></textarea>
                    </div>
                    <input class="btn btn-primary " id="submit" type="submit" name="submit" value="submit">
                </form>

            </div>
>>>>>>> Stashed changes
</body>

</html>