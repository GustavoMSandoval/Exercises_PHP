<?php

$pwdSignup = "Gustavo";

$options = [   
    'cost' => 12
];
$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);

$pwdLogin = "Gustavo";

if (password_verify($pwdLogin, $hashedPwd)){
    echo "They are the same";
} else {
    echo "They r not the same";
}