<?php
    class transaction{
        private string $DateHeure;
        private string $code;
        private int $montant;
        private string $type;


        public function getDateHeure():string{
            return $this->DateHeure;
        }

        public function setDateHeure(string $DateHeure):void{
            $this->DateHeure=$DateHeure;
        }

        public function getCode():string{
            return $this->code;
        }

        public function setCode(string $code):void{
            $this->code=$code;
        }

        public function getMontant():int{
            return $this->montant;
        }

        public function setMontant(int $montant):void{
            $this->montant=$montant;
        }

        public function getType():string{
            return $this->type;
        }

        public function setType(string $type):void{
            $this->type=$type;
        }

    }
?>