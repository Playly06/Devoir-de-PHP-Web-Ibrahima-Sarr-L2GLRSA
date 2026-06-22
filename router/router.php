<?
require_once 'controller/transactionController.php';
class Router{
    private function __construct(){}

    public static function route(string $ur){
        $uri=explode('/',$ur);
        $controllerNom=$uri[1]??"";
        switch($controllerNom){
            case 'store':
                $gameController=new transactionController();
                if(method_exists($transactionController,$controllerNom)){
                    $transactionController->$controllerNom();
                    break;
                }
            default:
                $transactionController=new transactionController();
                $transactionController->afficher();
                break;
            }
        }
    }
?>