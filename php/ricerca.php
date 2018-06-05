<?php
    $dbhost = '127.0.0.1';
    $dbuser = 'root';
    $dbname = 'stage';
    $dbpass = '';

    try {
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    } catch (PDOException $e) {
        echo $e->getMessage();
        die();
    }
    
    $str = '';

    /*
    if(isset($_REQUEST['nome']))
    {
        $str = $_REQUEST['nome'];
    }
    */   

    $query = "SELECT nome, cognome, annoNascita FROM persone WHERE nome LIKE '%$str%' OR cognome LIKE '%$str%'";

    $statement = $conn->prepare($query);
    $statement->execute();
    $risultato = $statement->fetchAll();
    $output = "";

    //var_dump($risultato);

    foreach($risultato as $riga)
    {
        $output = $output . $riga['nome'] . " " . $riga['cognome'] . " " . $riga['annoNascita'] . "<br>";
    }

    echo $output;
?>