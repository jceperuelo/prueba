<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

    $name = $_POST
    ['nombre'];

    $array ='[a, b, c, d, e, f, g, h, i, j, k, l, m, n, ñ, o, p, q, r, s, t, u, v, w, x, y, z, A, B, C, D, E, F, G, H,
    I, J, K, L, M, N, Ñ, O, P, Q, R, S, T, U, V, W, X, Y, Z]';

	if($_POST)
	{	
        //traer números
		$num1 = $_POST
		['numero1'];
		$num2 = $_POST
		['numero2'];
        $num3 = $_POST
		['numero3'];
	}

    if (is_numeric($num1)) {
        if (is_numeric($num2)){
            if (is_numeric($num3)){
                $suma = $num1 + $num2 + $num3;
		        echo $name.  '<br>' .$num1.", ".$num2." y ".$num3." es ".$suma;

            }
        }
    }
    elseif ($num1 != $array){
        if ($num2 != $array){
            if ($num3 != $array){
                echo $name. '<br>'.$num1.' '.$num2.' '.$num3;

            }
        }
    }
    
?>

<p id="datos"></p>
<input type="button" onclick="recuperarDatos()" value="Recuperar datos" />

<!-- EJEMPLO ENCONTRADO -->

<!-- if(!isset($_SESSION)){
        session_start();
    }

    class Arreglo
    {
        private $miArreglo = array();

        function agregar($dato)
        {                                                  
            array_push($this->miArreglo, $dato);                   

        }
        function guardarSesion()
        {            
            if(!isset($_SESSION['MiArreglo']))
            {
                $_SESSION['MiArreglo'] = $this->miArreglo;
            }
        }
        function leerSesion()
        {            
            return $_SESSION['MiArreglo'];
        }
    } -->
    <!-- required "GuardarSesion.php";
$arreglo = new Arreglo();
$arreglo -> agregar(67);
$arreglo -> guardarSesion();
var_dump($arreglo -> leerSesion()); -->
    
</body>
</html>