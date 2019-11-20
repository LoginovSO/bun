<?php

/**
 * Метод переводит строку из верблюжего стиля в строку с подчёркиваниями
 *
 * @param string $string
 * @return string|string[]|null
 */
function camelCaseToUnderscore($string)
{
    $result = ltrim(strtolower(preg_replace('/([A-Z])/', '_\1', $string)), '_');

    return preg_replace('/_+/', '_', $result);
}
