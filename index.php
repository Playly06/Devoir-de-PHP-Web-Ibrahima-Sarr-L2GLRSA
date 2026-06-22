<?php
    require_once 'controller/transactionController.php';
    class App{
        public function root():void{
            $uri=$_SERVER['REQUEST_URI'];
            switch ($uri) {
                case '/store':
                    $transactionController=new transactionController();
                    $transactionController->store();
                    break;
                default:
                    $transactionController=new transactionController();
                    $transactionController->afficher();
                    break;
            }
        }
    }
   $app=new App();
   $app->root()
?>