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

    <header>
        <div class="header">
            <img src="assets/img/logo-small.svg" alt="vrijwilligershuis">
            <div class="text">
                <p>VrijwilligersHuis</p>
                <p>Nieuwegein </p>
            </div>

        </div>

        <nav></nav>
        <p>Menu</p>
        <p>Account aanmaken</p>
        <p>Inloggen</p>
        </nav>

    </header>

    <main></main>
    <div class="background">
        <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Vacature, evenement, organisatie etc..." aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-Light text-light purple">Zoek</button>
        </div>
        <img src="asets/im" alt="">
        <div class="container">

            <d <Div id="im ">i<img src="" alt="alternatetext" /div>>
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
                                <option value="vervoer">Vervoer aanbieden</option>
                                <option value="buddy">Maatje / buddy worden</option>
                                <option value="fiets">Fiets doneren</option>
                                <option value="Kleding">Kleding</option>
                                <option value="Speelgoed">Speelgoed</option>

                                <option value="Verzorgingsproducten">Verzorgingsproducten</option>
                                <option value="actititeit">activieit organiseren</option>
                                <option value="Voetsel">vrijwilliger</option>
                                <option value="Tolk">Tolk</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <lable>Schrijf hier wat belangrijke informatie</lable>
                            <textarea type="notes" class="form-control" name="notes" id="notes" placeholder="Notities" required></textarea>
                        </div>
                        <input class="btn btn-primary " id="submit" type="submit" name="submit" value="submit">
                    </form>

                </div>
</body>

</html>