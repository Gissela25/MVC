<?php
    function isVoid($variable)
    {
        return empty(trim($variable));
    }
    function isFloat($variable)
    {
        return preg_match('/^([0-9.])$/',$variable);
    }
    function isText($variable)
    {
        return preg_match('/^([a-zA-Záéíóúñ]{3,65})[ ]?([a-zA-Záéíóúñ]{3,65})?$/',$variable);
    }
    function isNumber($variable)
    {
        return preg_match('/^([0-9])?$/',$variable);
    }

?>
