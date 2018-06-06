<?php
    $dbhost = '127.0.0.1';
    $dbuser = 'root';
    $dbname = 'stage';
    $dbpass = '';

    try {
        $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }

    //$str = '';

    if(isset($_REQUEST['nome']))
    {
        $str = $_REQUEST['nome'];
    }
    else
    {
        echo "<script type='text/javascript'>alert('errore: dati inseriti non validi');</script>";
        die();
    }
    try
    {
        $sql = "DELETE FROM persone WHERE nome LIKE '%$str%' OR cognome LIKE '%$str%'";

        $pdo->exec($sql);

        echo "Records removed successfully.";

    } catch(PDOException $e){
    
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    
    }
    
    unset($pdo);
?>