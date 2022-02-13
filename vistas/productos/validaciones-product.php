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

    //Pattern para producto y marca /^(([a-zA-Záéíóúñ]{3,65})[ ]?([a-zA-Záéíóúñ]{3,65})?)+$/
    //Pattern para precio /^([0-9]+).?([0-9]+)?$/
    //Pattern para numerocantidad  /^[0-9]+$/  
    // En los inputs se agrega así pattern="/^[0-9]+$/"; Dependiendo de lo que pide
    
?>
