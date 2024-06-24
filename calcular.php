<?php

if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operar'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operar'];

    switch ($operacion) {
        case 'suma':
            $result = suma($num1, $num2);
            break;
        case 'resta':
            $result = resta($num1, $num2);
            break;
        case 'multiplicacion':
            $result = multiplicacion($num1, $num2);
            break;
        case 'division':
            $result = division($num1, $num2);
            break;
        default:
            $result = "Operación inválida";
    }

    echo "Resultado: $result";
} else {
    echo "Error: Ingresa todos los valores.";
}

function suma($num1, $num2) {
    return $num1 + $num2;
}

function resta($num1, $num2) {
    return $num1 - $num2;
}

function multiplicacion($num1, $num2) {
    return $num1 * $num2;
}

function division($num1, $num2) {
    if ($num2 == 0) {
        return "Error: División por cero";
    } else {
        return $num1 / $num2;
    }
}

?>