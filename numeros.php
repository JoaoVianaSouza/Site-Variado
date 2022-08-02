<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="calculadora.css">
        <link rel="stylesheet" href="java.css">
        <title>Calculadora</title>
    </head>
    <body>
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="inicio.html">Início</a>
            <a href="imc.html">Imc</a>
            <a href="covid.html">Covid-19</a>
            <a href="numeros.html">Calculadora</a>
        </div>
        <div id="main">
            <button class="openbtn" onclick="openNav()">☰ </button>
        </div>
        <script>    
            function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            }
        </script>
        <fieldset id="tabela1">
            <?php
            $valor = $_POST['n'];
            $num = $_POST ['num'];
            $i = -1;
            $class = "tabela";
            $a = 0;
            switch($valor){
                case 1:
                    echo "<h2> Números pares até $num </h2>";
                    while ($i<($num-2)/2){
                        $i++;
                        $a++;
                        echo "<table class= $class>";
                        echo"<thead>";
                        print ("<tr>". ($a)."º Número par"."<th>".(2*$i)."</th>");
                        echo "</tr>";
                        echo "</thead>";
                        echo"</table>";    
                    }
                    break;
                    case 2:
                    echo "<h2>Números ímpares até $num</h2>";
                    while ($i<($num)){
                        $i++;
                        $a++;
                        if($i % 2 == 1 && $i!=$num){
                        echo "<table class=$class>";
                        echo"<thead>";
                        print ("<tr>". ($a/2)."º número ímpar"."<th>".($i)."</th>");
                        echo "</tr>";
                        echo "</thead>";
                        echo"</table>";    
                        }
                    }
                }
            ?> 
        </fieldset>
            <div id="botao">
            <br> <form action="numeros.html" method="post">
            <input type="submit" value="Voltar" name="botao">
            </div> 
    </body>
</html>
