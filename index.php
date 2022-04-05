<!DOCTYPE html>
<?php
    $titulo = "Piramite";
    $altura = isset($_POST['altura']) ? $_POST['altura'] : 0;
    $raio = isset($_POST['raio']) ? $_POST['raio'] : 0;
    $tipo = isset($_POST['tipo']) ? $_POST['tipo'] : 0;
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?=$titulo?></title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <form method="post">
        <label for="raio">Raio</label>
        <input type="number" name="raio" id="raio"><br>
        <label for="altura">Altura</label>
        <input type="number" name="altura" id="altura"><br>
        <label for="tipo">Nível</label>
        <input type="radio" name="tipo" id="tipo" value= "1">Tipo 1
        <input type="radio" name="tipo" id="tipo" value= "2">Tipo 2
        <input type="radio" name="tipo" id="tipo" value= "3">Tipo 3
        <input type="submit">
    </form>
    <?php
        $gerarRaiz = sqrt(($raio * $raio) + ($altura * $altura));
        $areaLateral = 3.14 * $raio * $gerarRaiz;
        $areaDoFundo = 3.14 * $raio * $raio;
        $areaTotal = 3.14 * $raio *($raio + $gerarRaiz);
        $litros = $areaTotal * 3.45;
        $latas = ceil($litros / 18.0);
        if ($tipo == "1"){
            $preco = 238.90 * $latas;
            echo "<h2 class='tipo'> __>Cone";
            echo "<h2 class='tipo'> Raio: $raio";
            echo "<h2 class='tipo'> Altura: $altura";
            echo "<h2 class='tipo'> Nivel 1";
            echo "<h2> --------------------------------------";
            echo "<h2 class='tipo'> Geratriz: $gerarRaiz";
            echo "<h2> --------------------------------------";
            echo "<h2 class='tipo'> Área do Fundo: $areaDoFundo";
            echo "<h2 class='tipo'> Área Lateral do Cone: $areaLateral";
            echo "<h2 class='tipo'> Área Total: $areaTotal";
            echo "<h2> --------------------------------------";
            echo "<h2 class='tipo'> Litros: $litros";
            echo "<h2 class='tipo'> Latas: $latas";
            echo "<h2> --------------------------------------";
            echo "<h2 class='tipo1'> Preço Total: R$$preco";

        }elseif ($tipo == "2"){
            $preco = 467.98 * $latas;
            echo "<h2 class='tipo'> __>Cone";
            echo "<h2 class='tipo'> Raio: $raio";
            echo "<h2 class='tipo'> Altura: $altura";
            echo "<h2 class='tipo'> Nivel 1";
            echo "<h2> --------------------------------------";
            echo "<h2 class='tipo'> Geratriz: $gerarRaiz";
            echo "<h2> --------------------------------------";
            echo "<h2 class='tipo'> Área do Fundo: $areaDoFundo";
            echo "<h2 class='tipo'> Área Lateral do Cone: $areaLateral";
            echo "<h2 class='tipo'> Área Total: $areaTotal";
            echo "<h2> --------------------------------------";
            echo "<h2 class='tipo'> Litros: $litros";
            echo "<h2 class='tipo'> Latas: $latas";
            echo "<h2> --------------------------------------";
            echo "<h2 class='tipo2'> Preço Total: R$$preco";
        }elseif ($tipo =="3"){
            $preco = 758.34 * $latas;
            echo "<h2 class='tipo'> __>Cone";
            echo "<h2 class='tipo'> Raio: $raio";
            echo "<h2 class='tipo'> Altura: $altura";
            echo "<h2 class='tipo'> Nivel 1";
            echo "<h2> --------------------------------------";
            echo "<h2 class='tipo'> Geratriz: $gerarRaiz";
            echo "<h2> --------------------------------------";
            echo "<h2 class='tipo'> Área do Fundo: $areaDoFundo";
            echo "<h2 class='tipo'> Área Lateral do Cone: $areaLateral";
            echo "<h2 class='tipo'> Área Total: $areaTotal";
            echo "<h2> --------------------------------------";
            echo "<h2 class='tipo'> Litros: $litros";
            echo "<h2 class='tipo'> Latas: $latas";
            echo "<h2> --------------------------------------";
            echo "<h2 class='tipo3'> Preço Total: R$$preco";
        }
    ?>

</body>
</html>