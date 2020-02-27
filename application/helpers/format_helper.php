<?php 

if(!function_exists('dateFormat'))
{
    function dateFormat($format='d-m-Y', $givenDate=null)
    {
        return date($format, strtotime($givenDate));
    }    
}

    function date_converter($_date = null) {
        $format = '/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/';
        if ($_date != null && preg_match($format, $_date, $partes)) {
            return $partes[3].'-'.$partes[2].'-'.$partes[1];
        }
        return false;
    }

    function moneyFormat($valor){
        return $valor = str_replace(",", ".", str_replace(".", "", $valor));
    }

    function numberToMoney($numero) {
        return "R$ " . number_format($numero, 2, ",", ".");
    }

    function getParam($var, $parametro = null){
        if(!empty($parametro))
            return empty($var[$parametro]) == 1 ? null : $var[$parametro];
        else
            return empty($var) == 1 ? null : $var;
    }