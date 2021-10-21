<?php
$servername = 'localhost';
$dbname = 'zestcode';
$db_username = 'root';
$db_password = '';
            
            try{
            $DB = new PDO("mysql:host=$servername;dbname=$dbname", $db_username, $db_password);

            $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            }

            catch(PDOException $e){
            echo "Erreur : " . utf8_encode($e->getMessage());
            }