<?php
// On créé un tableau associatif en précisant les filtres qu'on veut pour chaque input
    $filters_options = array(
        'first_name'    => FILTER_SANITIZE_STRING,
        'last_Name' 	=> FILTER_SANITIZE_STRING,
        'email'         => FILTER_VALIDATE_EMAIL,
        'subject' 		=> FILTER_SANITIZE_STRING,
        'message' 		=> FILTER_SANITIZE_STRING);
    $filter_result = null;
    // SI le formulaire est envoyé ET que tous les champs sont remplis, on filtre les données et on les stock.
    // Sinon, on signale à l'utilisateur qu'il doit remplir les champs
    if(isset($_POST['submit'])){
        if(!empty($_POST['first_name']) AND !empty($_POST['last_Name']) AND !empty($_POST['email']) AND !empty($_POST['subject']) AND !empty($_POST['message']) AND empty($_POST['honney_Pot'])){
            // On créé un tableau associatif dans lequel on stoque les valeurs une fois filtrée
            $filter_result = filter_input_array(INPUT_POST, $filters_options);
            // Affichage des données --- DEV ONLY ---
            foreach ($filter_result as $key => $value){
                echo "<p>".$key.": ".$filter_result[$key]."</p>";
            }
        }
        else{
            echo "Merci de remplir tous les champs!";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>php sanatize</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="assets/css/contact.css">

    </head>
    <body>
        <img src="assets/img/logo-poulette-white.png" alt="logo de hacker poulette">
        <h1>Formulaire de contact</h1>
        <div class="blue-divider"></div>

        <form class="container-fluid" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        <section class="row line-form">
                
                <div class="col-lg-5 col-sm-2 txt-r">
                    <label for="last_Name">Nom: </label> 
                </div>
                <div class="col-lg-7 col-sm-10">

                    <input class="name" name="last_Name" type="text">

                    <label for="first_name">Prénom: </label>
                    <input class="name" name="first_name" type="text">
                </div>

        </section>

            <!-- <div>
                <label class="forBot" for="honney_Pot">Nom: </label>
                <input class="forBot" name="honney_Pot" type="text">
            </div> -->

            <section class=" row line-form">
                <div class="col-lg-5 col-sm-2 txt-r">
                    <label for="email">Email: </label>
                </div>
                <div class="col-lg-7 col-sm-10">
                    <input class="full-line" name="email" type="email">
                </div>
            </section>

            <section class="row line-form">
                <div class="col-lg-5 col-sm-2 txt-r">
                    <label for="country">Country: </label>
                </div>
                <div class="col-lg-7 col-sm-10">
                        <input class="country" name="country" type="text">
                <label for="genre">Genre: </label>
                    <select name="genre">
                        <option value="H">Homme</option>
                        <option value="F">Femme</option>
                        <option value="other">Autre</option>
                    </select>
                </div>
            </section>
            
            <section class="row line-form">
            <div class="col-lg-5 col-sm-2 txt-r">
                <label for="subject">Sujet: </label>
            </div>
            <div class="col-lg-7 col-sm-10">
                <input class="full-line" name="subject" type="text">
            </div>
            </section>

            <section class="row line-form">
            <div class="col-lg-5 col-sm-2 txt-r">
                <label for="message">Message:</label>
            </div>
            <div class="col-lg-7 col-sm-10">
                <textarea class="full-line" name="message"></textarea>
            </div>
            <input class="submit" type="submit" name="submit" value="envoyer">
        </section>
        </form>
    </body>
</html>