<?php
// FAIRE LE SCRIPT JS POUR NE PAS ENVOYER LE FORM !!!!
/*
    **********************
	**   SANITISATION   **
	**********************
*/
// On créé un tableau associatif en précisant les filtres qu'on veut pour chaque input
$filters_options = array(
    'first_name'      => FILTER_SANITIZE_STRING,
    'last_name'       => FILTER_SANITIZE_STRING,
    'email'           => FILTER_VALIDATE_EMAIL,
    'country'         => FILTER_SANITIZE_STRING,
    'subject'         => FILTER_SANITIZE_STRING,
    'message'         => FILTER_SANITIZE_STRING
);
$filter_result = null;
// SI le formulaire est envoyé ET que tous les champs sont remplis, on filtre les données et on les stock.
// Sinon, on signale à l'utilisateur qu'il doit remplir les champs
if (isset($_POST['submit'])) {
    if (!empty($_POST['first_name']) and !empty($_POST['last_name']) and !empty($_POST['email']) and !empty($_POST['subject']) and !empty($_POST['message']) and !empty($_POST['country']) and empty($_POST['honney_Pot'])) {
        // On créé un tableau associatif dans lequel on stoque les valeurs une fois filtrée
        $filter_result = filter_input_array(INPUT_POST, $filters_options);
        // Affichage des données --- !!!!!!!!!!! DEV ONLY !!!!!!!!!!! ---
        print_r($filter_result);
    } else {
        echo "Merci de remplir tous les champs!";
    }
}

/*
    *************************
	**   ENVOIE PAR MAIL   **
	*************************
*/
// Email du destinataire
$to = "maxim.berge@gmail.com";
// Header du mail:
$headers = 'From: ' . $filter_result["email"] . "\r\n" . 'Reply-To: ' . $filter_result["email"] . "\r\n" . "Content-Type: text/html; charset=UTF-8";
// Sujet du mail:
$subject = "Nouveau message Hacker Poulette";
// Message contenu dans le mail:
$message_mail = "Nom: " . $filter_result["last_name"] . "<br>" . "Prénom: " . $filter_result["first_name"] . "<br>" . "Pays: " . $filter_result["country"] . "<br>" . "Sujet: " . $filter_result["subject"] . "<br>" . "Message: " . $filter_result["message"];
// Fonction d'envoie du mail avec conf de ce que j'envoie
mail($to, $subject, $message_mail, $headers);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>php sanatize</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/contact.css">
</head>

<body>
    <?php include "navbar.php" ?>

    <h1>Formulaire de contact</h1>
    <div class="blue-divider"></div>
    <form class="container-fluid" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <section class="row line-form">

            <div class="col-lg-5 col-sm-12 txt-r">
                <label for="last_name">Nom: </label>
            </div>

            <div class="col-lg-7 col-sm-12">
                <input class="name" name="last_name" type="text" minlength="3" maxlength="30" pattern="[a-zA-Z\-âêîôûäëïöüàèéòù]{3,30}">
                <div class="test">
                    <label for="first_name">Prénom: </label>
                    <input class="name" name="first_name" type="text" minlength="3" maxlength="30" pattern="[a-zA-Z\-âêîôûäëïöüàèéòù]{3,30}">
                </div>
            </div>

        </section>

        <div>
            <input class="forBot" name="honney_Pot" type="text">
        </div>

        <section class="row line-form">
            <div class="col-lg-5 col-sm-12 txt-r">
                <label for="email">Email: </label>
            </div>
            <div class="col-lg-7 col-sm-12">
                <!-- ADRESSE PRO NON ACCEPTEE -->
                <input class="full-line" name="email" type="email" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            </div>
        </section>

        <section class="row line-form">
            <div class="col-lg-5 col-sm-12 txt-r">
                <label for="country">Pays: </label>
            </div>
            <div class="col-lg-7 col-sm-12">
                <input class="country" name="country" type="text" minlength="3" maxlength="30" pattern="[a-zA-Z\-âêîôûäëïöüàèéòù]{3,30}">
                <label for="genre">Genre: </label>
                <select name="genre">
                    <option value="H">Homme</option>
                    <option value="F">Femme</option>
                    <option value="other">Autre</option>
                </select>
            </div>
        </section>

        <section class="row line-form">
            <div class="col-lg-5 col-sm-12 txt-r">
                <label for="subject">Sujet: </label>
            </div>
            <div class="col-lg-7 col-sm-12">
                <input class="full-line" name="subject" type="text">
            </div>
        </section>

        <section class="row line-form">
            <div class="col-lg-5 col-sm-12 txt-r">
                <label for="message">Message:</label>
            </div>
            <div class="col-lg-7 col-sm-12">
                <textarea rows="7" cols="50" class="full-line" name="message"></textarea>
            </div>
            <input class="submit" type="submit" name="submit" value="envoyer">
        </section>
    </form>
    <?php include "footer.php" ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>