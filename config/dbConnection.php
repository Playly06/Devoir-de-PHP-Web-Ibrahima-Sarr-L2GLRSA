<?php
    class dbConnection{
        private string $host='127.0.0.1';
        private string $port='3306';
        private string $db='comptes';
        private string $username='root';
        private string $password='';
        private int $nbre=0;

        public function getHost():string{
            return $this->host;
        }

        public function getPort():string{
            return $this->port;
        }

        public function getDb():string{
            return $this->db;
        }

        public function getUsername():string{
            return $this->username;
        }

        public function getPassword():string{
            return $this->password;
        }

        
        public function getNbre():int{
            return $this->nbre;
        }

        public function setNbre(int $nbre):void{
            $this->nbre=$nbre;
        }

    }
