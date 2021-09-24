<?php


$n = (int)"1,2aaaa1.2aaaaaa21+2lea'1=1,1.1''";
echo $n.'<br>';

var_dump(filter_var($n, FILTER_SANITIZE_NUMBER_INT));