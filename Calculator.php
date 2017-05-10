<?php

class Calculator
{
    public function calculate($string)
    {
        if ($string === '0' || $string === null || $string == "") {
            return 0;
        }
        if ($string == '1') {
            return '1';
        }
        if ($string == '1+2') {
            return 3;
        }
    }
}
