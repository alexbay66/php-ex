
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>form post</h1>
                <form action="/form-validate.php" method="post">
<!-- version formulaire vierge -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control 
                        " type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champs</div>
                    <!-- version formulaire correct -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control is-valid" type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champs</div>
                        <div class="valid-feedback">
                            Le champ est correctement rempli.
                        </div>
                    </div>
                    <!-- version formulaire erreur -->
                    <div class="mb-3">
                        <label for="test" class="form-label">Test</label>
                        <input id="test" class="form-control is-invalid" type="text" name="test" value="" placeholder="foo bar baz">
                        <div class="form-text">Texte d'aide pour remplir le champs</div>
                        <div class="invalid-feedback">
                            Le champ n'est pas correctement rempli.
                        </div>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="login" id="login" placeholder="votre login" required>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="password" name="password" id="password" placeholder="votre mot de passe" required>
                    </div>
                    <div class="mb-3">
                        <p>Choissisez votre fruits préféré</p>
                        <div class="form-check">
                            <input type="radio" name="fruit" id="fruit_1" value="ananas">
                            <label class="form-check-label" for="fruit_1">Ananas</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="fruit" id="fruit_1" value="pomme">
                            <label class="form-check-label" for="fruit_1">pomme</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="fruit" id="fruit_1"value="banane">
                            <label class="form-check-label" for="fruit_1">banane</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="fruit" id="fruit_1" value="cerise">
                            <label class="form-check-label" for="fruit_1">cerise</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <button class =" btn btn-primary" type="submit">Valider</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>