<?php
    class persona
    {
        public $nome;
        public $cognome;
        public $annoNascita;
    }

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

    $query = "SELECT nome, cognome, annoNascita FROM persone WHERE nome LIKE '%$str%' OR cognome LIKE '%$str%'";

    $statement = $conn->prepare($query);
    $statement->execute();
    $risultato = $statement->fetchAll(PDO::FETCH_CLASS, "persona");
    $output = "";

    /*
    var_dump($risultato);
    die();
    */

    foreach($risultato as $riga)
    {
        //$output = $output . $riga['nome'] . " " . $riga['cognome'] . " " . $riga['annoNascita'] . "<br>";

        foreach( $riga as  $colonna )
        {
            $output = $output . $colonna . " ";
        }

        $output = $output  . "<br>";
    }

    echo $output;

    unset($conn);
?>