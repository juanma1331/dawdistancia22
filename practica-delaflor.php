<?php
/**
 * Módulo que contiene funciones útiles para números
 * @author Juan Manuel De la flor López <juanma1331@gmail.com>
 * @version 1.0
 */

/**
 * Calcula la suma entre los parámetros
 * @param $a integer
 * @param $b integer
 * @return integer
 */
function suma($a, $b)
{
    return $a + $b;
}

/**
 * Calcula la resta entre los parámetros
 * @param $a integer
 * @param $b integer
 * @return integer
 */
function resta($a, $b)
{
    return $a - $b;
}


/**
 * Convierte un parámetro entero en un float
 * @internal
 * @param $a integer
 * @return float
 */
function convierteAFloat($a)
{
    return (float) $a;
}