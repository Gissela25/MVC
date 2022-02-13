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
        return preg_match('/^([a-zA-Záéíóúñ]{3,65})[ ]?([a-zA-Záéíóúñ]{3,65})?$/',$variable);
    }
    function isMail($variable)
    {
        return filter_var($variable,FILTER_VALIDATE_EMAIL);
    }
    function isUser($variable)
    {
        return preg_match('/^([a-zA-Z0-9-.]{2,20})[ ]?([a-zA-Z0-9-.]{2,20})?$/',$variable);
    }
?>
