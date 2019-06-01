<?php

//$servername = "localhost";
//$username = "root";
//$password = "";
//
//try{
//    $conn = new PDO("mysql:host = $servername; dbname = tchat", $username, $password);
//
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    echo  "connexion reussi";
//
//    }catch (PDOException $e){
//    echo  $e.getMessage();
//}
    $bdd = new PDO("mysql:host=localhost; dbname=tp; charset=utf8","root",  "");

    if(isset($_POST['pseudo']) and isset($_POST['message']) and !empty($_POST['pseudo']) and !empty($_POST['message'])){
        $pseudo = htmlspecialchars($_POST['pseudo']) ;
        $message = htmlspecialchars($_POST['message']) ;

        $insertmsg = $bdd->prepare('INSERT INTO tchat(pseudo, message) VALUES (?, ?)');
        $insertmsg->execute(array($pseudo, $message));
    }

    $allmsg = $bdd->query('SELECT * FROM tchat ORDER BY id DESC ');

?>
<html>
    <head>
        <title>TCHAT PHP</title>
        <meta charset="utf-8" >
    </head>
    <body>
        <form method="post" action="">
            <input type="text" name="pseudo" placeholder="PSEUDO" value=" "><br>
            <textarea type="text" name="message" placeholder="MESSAGE"></textarea><br>
            <input type="submit" value="Envoyer">
        </form>
        <?php
        while ($msg = $allmsg->fetch())
        {
        ?>
          <b><?php echo $msg['pseudo'] ?>: </b> <?php echo $msg['message'] ?> <br>
        <?php
            }
        ?>

    </body>

</html>
