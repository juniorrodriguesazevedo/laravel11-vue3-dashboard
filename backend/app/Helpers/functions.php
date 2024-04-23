<?php

function cleanCpf($cpf)
{
    return preg_replace('/[^0-9]/', '', $cpf);
}

function formatCpf($cpf)
{
    $numericCpf = preg_replace('/[^0-9]/', '', $cpf);

    return substr($numericCpf, 0, 3) . '.' .
        substr($numericCpf, 3, 3) . '.' .
        substr($numericCpf, 6, 3) . '-' .
        substr($numericCpf, 9, 2);
}
