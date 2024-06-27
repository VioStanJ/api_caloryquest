<?php

function createOtp($n){
    $otp = '';
    for ($i=0; $i < $n; $i++) { 
        $otp .= strval(rand(0,9));
    }
    return $otp;
}