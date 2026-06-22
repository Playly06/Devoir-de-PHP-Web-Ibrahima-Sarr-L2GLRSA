<?
    require_once 'entity/transaction.php';
    require_once 'controller/transactionController.php';

    class transactionService{
        public static function ajouterTransaction(game $transaction):void{
            transactionRepository::enregistrerTransaction($transaction);
        }
        public static function afficherTransactions():array{
            return transactionRepository::AvoirTransaction();
        }
    }
?>
?>