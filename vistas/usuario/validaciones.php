<?php
    function isVoid($variable)
    {
        return empty(trim($variable));
    }
    function isAlphanumeric($variable)
    {
        return preg_match('/^[a-zA-Z0-9()._,*%&#@]{8,}$/',$variable);
    }
    function isText($variable)
    {
        return preg_match('/^[a-zA-Záéíóúñ ]{3,65}$/',$variable);
    }
    function isMail($variable)
    {
        return filter_var($variable,FILTER_VALIDATE_EMAIL);
    }
    function isUser($variable)
    {
        return preg_match('/^[a-zA-Z0-9-.]{4,20}$/',$variable);
    }
    function isEqual($variable1,$variable2)
    {
        return ($variable1==$variable2)?true:false;
    }
?>
