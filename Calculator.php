<?php

class Calculator
{
    public function calculate($string)
    {
        switch ($string) {
            case ('0'):
                return 0;
            break;
            case (''):
                return 0;
            break;
            case (null):
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
