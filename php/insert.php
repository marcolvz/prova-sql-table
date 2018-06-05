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

    if(isset($_REQUEST['nome']) and isset($_REQUEST['cognome']) and isset($_REQUEST['annoNascita']))
    {
        $nome = $_REQUEST['nome'];
        $cognome = $_REQUEST['cognome'];
        $annoNascita = $_REQUEST['annoNascita'];
    }
    else
    {
        echo "<script type='text/javascript'>alert('errore: dati inseriti non validi');</script>";
        die();
    }

    $query = "INSERT INTO persone (nome, cognome, annoNascita)
    VALUES ($nome, $cognome, $annoNascita)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>