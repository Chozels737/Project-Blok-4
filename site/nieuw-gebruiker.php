<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>nieuw gebruiker invoeren</title>
    </head>

    <body>
        <h1>registreren</h1>
        <form action="verwerk-nieuw-gebruiker.php" method="post">
            <div class="form-groep">
                <label for="voornaam">voornaam</label>
                <input type="text" name="voornaam" id="voornaam">
            </div>
            <div class="form-groep">
                <label for="tussenvoegsel">tussenvoegsel</label>
                <input type="text" name="tussenvoegsel" id="tussenvoegsel">
            </div>
            <div class="form-groep">
                <label for="achternaam">achternaam</label>
                <input type="text" name="achternaam" id="achternaam">

            </div>
            <div class="form-groep">
                <label for="geslacht">password</label>
                <input type="text" name="geslacht"id="geslacht">
            </div>
            <div class="form-groep">
                <label for="email">email</label>
                <input type="text" name="email" id="email">
            </div>

            <div class="form-groep">
                <label for="gebruikersnaam">gebruikersnaam</label>
                <input type="text" name="gebruikersnaam" id="gebruikersnaam">
            </div>

            <div class="form-groep">
                <label for="paswoord">paswoord</label>
                <input type="password" name="paswoord" id="paswoord">
            </div>

            <div class="form-groep">
                <label for=" straat">straat</label>
                <input type="text" name=" straat" id=" straat">
            </div>

            <div class="form-groep">
                <label for="huisnummer">huisnummer</label>
                <input type="text" name="huisnummer" id="huisnummer">
            </div>

            <div class="form-groep">
                <label for="huisnummer">huisnummer</label>
                <input type="text" name="huisnummer" id="huisnummer">
            </div>

            <div class="form-groep">
                <label for="postcode">postcode</label>
                <input type="text" name="postcode" id="postcode">
            </div>

            <div class="form-groep">
                <label for="plaats">plaats</label>
                <input type="text" name="plaats" id="plaats">
            </div>
            <div class="form-groep">
                <label for="land">land</label>
                <input type="text" name="land" id="land">
            </div>
            <div class="form-groep">
                <label for="mobielnummer">mobielnummer</label>
                <input type="text" name="mobielnummer" id="mobielnummer">
            </div>


            <div class="form-groep">
                <label for="rol">choose a role</label>
                <select id="rol" name="rol">
                    <option value="regular">regular</option>
                    <option value="manager">manager</option>
                    <option value="admin">admin</option>
                </select>
            </div>

            <button type="submit">maak gebruiker aan</button>
        </form>
    </body>

    </html>
</body>

</html>