<?php
$myarr = array(1,123,4221,15,array(123,1423,4132,4321,4213,4123,4,321,4321,4132)


);

$abc = "asfdsd f";
echo myCount($myarr);



function myCount($var){
    $count=0;
    if (gettype ($var) === 'NULL')
        return "0";

    if (gettype ($var) == 'array')
    {
        foreach($var as $element){
            if (is_array($element)) {
            $count += myCount($element);

            }
            $count +=1;
                    }

    }
    else {
        return "1";
    }
    return $count;
}