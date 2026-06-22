<?php
class Validation{
    public static function isEmptyForNumbers(string $data, string $key, string $sms="Champ obligatoire"){
        if ($data==""){
            self::$errors[$key]=$sms;
        }
    }

    public static function getErrors():array{
        return self::$errors;
    }
    public static function nbrErrors():int{
        return count(self::$errors);
    }
}
?>