<?php
    require_once 'entity/transaction.php';
    require_once 'config/dbConnection.php';

    class transactionRepository{
        public static function enregistrerTransaction(transaction $transaction):int{
            $DateHeure=$transaction->getDateHeure();
            $code=$transaction->getCode();
            $montant=$transaction->getMontant();
            $type=$transaction->getType();

            $dbConnection=new dbConnection();

            try{
                $pdo=new PDO("mysql:host=127.0.0.1;dbname=transactions;",$dbConnection->getUsername(),$dbConnection->getPassword());
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $sql="INSERT INTO transaction (code,DateHeure,montant,type)
                VALUES ('$DateHeure','$code',$montant,'$type')";
                $dbConnection->setNbre($pdo->exec($sql));
            }catch(PDOException $error){
                echo $error->getMessage();
            }finally{
                $pdo=null;
            }
            return $dbConnection->getNbre();
        }

        public static function AvoirTransaction():array{
            try{
                $dbConnection=new dbConnection();
                $pdo=new PDO("mysql:host=127.0.0.1;dbname=games;",$dbConnection->getUsername(),$dbConnection->getPassword());
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $sql="SELECT * FROM transaction";
                $cursor=$pdo->query($sql);
                $games=$cursor->fetchAll(PDO::FETCH_CLASS,transaction::class);

                }catch(PDOException $error){
                echo $error->getMessage();
            }finally{
                $pdo=null;
            }
            return $games;


        }
    }
?>