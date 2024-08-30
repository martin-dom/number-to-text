<?php

declare(strict_types = 1);

function numTo2DArray(int $number, bool $isNegative):array
{
    $number = strval($number); # to string
    $number = str_split($number); # to array
    if($number[0] == '-'){
        array_shift($number);
        $isNegative = true;
    }
    $restOf = count($number) % 3;

    # array length divisible by three
    if($restOf == 1)array_unshift($number, 0, 0);
    else if($restOf == 2)array_unshift($number, 0);

    # to a two-dimensional array
    return array_chunk($number, 3);
}

function changeToText(array $data, bool $isNegative): string
{
    $bigNum = ['','thousand ', 'million ', 'milliard ', 'billion ', 'billiard '];
    $long = count($data);
    $result = '';

    if(!$isNegative) $result .= 'minus ';
    
    foreach($data as $x){
        $long--;
        for($i = 0; $i < 3; $i++){
            # hundreds and units
            if($i == 0 || $i == 2){
                if(($i == 2 && $x[1] != 1) || $i == 0){
                    switch($x[$i]){
                        case 1:$result .= 'one ';break;
                        case 2:$result .= 'two ';break;
                        case 3:$result .= 'three ';break;
                        case 4:$result .= 'four ';break;
                        case 5:$result .= 'five ';break;
                        case 6:$result .= 'six ';break;
                        case 7:$result .= 'seven ';break;
                        case 8:$result .= 'eight ';break;
                        case 9:$result .= 'nine ';break;
                    }
                }
                if($i == 0){
                    if($x[0] != 0 && ($x[1] == 0 && $x[2] == 0)) $result .= 'hundred ';
                    elseif($x[0] != 0) $result .= 'hundred and '; 
                }
            # tens    
            }elseif($i == 1){
                switch($x[$i]){
                    case 1:
                        switch($x[2]){
                            case 0:$result .= 'ten ';break;
                            case 1:$result .= 'eleven ';break;
                            case 2:$result .= 'twelve ';break;
                            case 3:$result .= 'thirteen ';break;
                            case 4:$result .= 'fourteen ';break;
                            case 5:$result .= 'fifteen ';break;
                            case 6:$result .= 'sixteen ';break;
                            case 7:$result .= 'seventeen ';break;
                            case 8:$result .= 'eighteen ';break;
                            case 9:$result .= 'nineteen ';break;
                        }
                    break;
                    case 2:$result .= 'twenty ';break;
                    case 3:$result .= 'thirty ';break;
                    case 4:$result .= 'forty ';break;
                    case 5:$result .= 'fifty ';break;
                    case 6:$result .= 'sixty ';break;
                    case 7:$result .= 'seventy ';break;
                    case 8:$result .= 'eighty ';break;
                    case 9:$result .= 'ninety ';break;
                }
            }
        }
        # insertion of numeric rows
        if($x[0] <> 0 || $x[1] <> 0 || $x[2] <> 0){
            $result .= $bigNum[$long];
        }
    }
    return $result;
}

?>