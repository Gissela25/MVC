<?php
    function esVoid($variable)
    {
        return empty(trim($variable));
    }
    function esUser($variable)
    {
        return preg_match('/^[a-zA-Z0-9-.]{4,20}$/',$variable);
    }
    function esAlphanumeric($variable)
    {
        return preg_match('/^[a-zA-Z0-9()._,*%&#@]{8,}$/',$variable);
    }
    function esMail($variable)
    {
        return filter_var($variable,FILTER_VALIDATE_EMAIL);
    }
?>