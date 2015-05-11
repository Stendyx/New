<?php

function abc(){
//echo func_num_args();
//print_r(func_get_args());
    echo func_get_arg(0);
}

abc('123','456');