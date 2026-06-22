<?php
    require_once 'entity/transaction.php';
    require_once 'services/transactionService.php';
    require_once 'config/Validation.php';
    require_once 'repository/transactionRepository.php';

    class transactionController{
        #private function __construct(){}

        public  function afficher():void{
            $transactions=transactionService::afficherGame();
            require_once dirname(__DIR__).'/view/index.php';
        }

        public function store():void{
            if($_SERVER["REQUEST_METHOD"]=="POST"){
            $DateHeure=trim($_POST['DateHeure'] ?? '');
            $code=trim($_POST['type'] ?? '');
            $montant=trim($_POST['price'] ?? null);
            $type=trim($_POST['type'] ?? '');

                Validation::isEmptyForNumbers($montant,"price","Champ obligatoire");
                if(Validation::nbrErrors()!=0){
                    $errors=Validation::getErrors();
                    require_once dirname(__DIR__).'/view/index.php';
                }else{
                    $transactions=transactionRepository::afficherTransactions();
                    foreach($transactions as $transaction){
                        if($transaction->getMontant()==0){
                            $errors["montant"]="montant trop petit";
                            require_once dirname(__DIR__).'/view/index.php';
                        }else{
                            $transaction=new transaction();
                            $transaction->setDateHeure($DateHeure);
                            $transaction->setCode($code);
                            $transaction->setMontant((int)$montant);
                            $transaction->setType($type);
                            transactionService::ajouterTransaction($transaction);
                        }
                    }
                }
            }
        }
    }
?>