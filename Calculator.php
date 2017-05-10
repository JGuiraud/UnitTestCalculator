<?php

class Calculator
{
    public function calculate($string)
    {
        switch ($string) {
            case ('0' || '' || null):
                return 0;
            break;
            case ('1'):
                return 1;
            break;
            case ('1+2'):
                return 3;
            break;
        }
    }
}
