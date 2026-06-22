<?php
    require_once 'entity/transaction.php';

    class utilisateur{
        private string $nom ;
        private string $telephone;
        private string $prenom ;
        private string $code;
        private int $solde;
        private array $transactions;


        public function getTelephone():string{
            return $this->telephone;
        }

        public function setTelephone(string $telephone):void{
            $this->telephone=$telephone;
        }

        public function getCode():string{
            return $this->code;
        }

        public function setCode(string $code):void{
            $this->code=$code;
        }

        public function getSolde():int{
            return $this->solde;
        }

        public function setSolde(int $solde):void{
            $this->solde=$solde;
        }

        public function getPrenom():string{
            return $this->prenom;
        }

        public function setPrenom(string $prenom):void{
            $this->type=$prenom;
        }

        public function getNom():string{
            return $this->nom;
        }

        public function setNom(string $nom):void{
            $this->type=$nom;
        }

        public function getTransactions(array $transactions):void{
            $this->transactions=$transactions;
        }

        public function setTransactions():void{
            $this->transactions=$transactions;
        }

    }
?>