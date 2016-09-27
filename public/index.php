<?php
/**
 * Created by PhpStorm.
 * User: ciloo
 * Date: 22/09/16
 * Time: 10:37
 */

include ('../src/bdd.php');
?>


<html>
    <head>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Test de formulaire en php</title>
    </head>
    <body>

    <table class="table-bordered">
        <tr>
            <td>prénom</td>
            <td>nom</td>
            <td>mail</td>
            <td>password</td>
        </tr>
        <?php
        $connexion = getConnection();

        $getdata = "SELECT * FROM Personne";

        $alldata = execSql($connexion,$getdata);

        while ($entry = $alldata->fetch_assoc()) {

        echo "<tr><td>".$entry['prenom']."</td><td>".$entry['nom']."</td><td>".$entry['Mail']."</td><td>".$entry['Motdepasse']."</td></tr>";}
        ?>
    </table>



    <h1>Test de formulaire en PHP</h1>
        <form class="form-control" name="contact" action="../src/formulaire.php" method="get">
            <label for="name">Ton nom :</label>
            <input type="text" value="" id="name" name="nom"/>
            <br>
            <label for="firstname">Ton prénom :</label>
            <input type="text" value="" id="firstname" name="prenom"/>
            <br>

            <label for="email">mail:</label>
            <input type="text" value="" id="email" name="mail"/>
            <br>

            <label for="pass"> mot de passe :</label>
            <input type="password" value="" id="pass" name="mdp"/>
            <br>
            <input type="submit"/>

        </form>
    </body>
</html>
