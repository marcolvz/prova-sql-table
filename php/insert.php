<?php
    $dbhost = '127.0.0.1';
    $dbuser = 'root';
    $dbname = 'stage';
    $dbpass = '';

    try{

        $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    
        // Set the PDO error mode to exception
    
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } catch(PDOException $e){
    
        die("ERROR: Could not connect. " . $e->getMessage());
    
    }
    

    if(null !== $_REQUEST['nome'] and $_REQUEST['cognome'] and $_REQUEST['annoNascita'])
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
     
    
    // Attempt insert query execution
    
    try{
    
        $sql = "INSERT INTO persone (nome, cognome, annoNascita) VALUES ('$nome', '$cognome', '$annoNascita')";    
    
        $pdo->exec($sql);
    
        echo "Records inserted successfully.";
    
    } catch(PDOException $e){
    
        die("ERROR: Could not able to execute $sql. " . $e->getMessage());
    
    }
    
     
    
    // Close connection
    
    unset($pdo);
?>