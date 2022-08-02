<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="covid.css">
        <link rel="stylesheet" href="java.css">
        <title>Info Covid</title>
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
        <fieldset>
            <p>
            <?php 
                $valor = $_GET['opcao'];
                    switch ($valor) {
                        case 1:
                            echo "<legend><h1>O que é a covid-19?</h1></legend>";
                            echo "É um vírus que causa uma doença respiratória —a covid-19— pelo agente coronavírus, identificado em dezembro de 2019 na China.
                            Os coronavírus são uma grande família viral, conhecidos desde meados de 1960, que causam infecções respiratórias em seres humanos e em animais.
                            Geralmente, infecções por coronavírus causam doenças respiratórias leves a moderadas, semelhantes a um resfriado comum.
                            Alguns coronavírus podem causar doenças graves com impacto importante em termos de saúde pública, como a Sars (Síndrome Respiratória Aguda Grave),
                            identificada em 2002 e a Mers (Síndrome Respiratória do Oriente Médio), identificada em 2012";
                            break;
                        case 2:
                            echo "<legend><h1>Transmissão do Vírus</h1></legend>";
                            echo "O vírus pode se propagar de pessoa para pessoa por meio de gotículas do nariz ou da boca que se espalham quando alguém doente tosse ou espirra.
                            A maioria dessas gotículas cai em superfícies e objetos próximos, como mesas ou telefones.
                            As pessoas também podem se contaminar ao respirarem gotículas provenientes da tosse ou espirro de uma pessoa doente.
                            A transmissão ocorre, principalmente, de pessoa para pessoa e seu período de incubação, que é o tempo para que os primeiros sintomas apareçam, pode ser de 2 a 14 dias.
                            Formas de contágio:
                            <ul>
                            <li>Espirro</li>
                            <li>Tosse</li>
                            <li>Catarro</li>
                            <li>Gotículas de saliva</li>
                            <li>Contato pessoal próximo, como toque ou aperto de mão</li>
                            <li>Contato com objetos ou superfícies contaminadas, seguido de contato com a boca, nariz ou olhos</li>";
                            break;
                        case 3:
                            echo "<legend><h1>Sintomas</h1></legend>";
                            echo "Nem todo o mundo que pega covid-19 apresenta os mesmos sintomas, algumas pessoas podem até ser assintomáticas,
                            mas os mais comuns são os seguintes:
                            Febre ou calafrios, Tosse seca, Dificuldade de respirar/falta de ar, Cansaço Dores musculares, Dor de cabeça,
                            Perda de olfato e/ou paladar, Dor de garganta Congestão nasal ou nariz escorrendo, Náusea e vômitos Diarreia.";
                            break;
                        case 4:
                            echo "<legend><h1>Prevenção</h1></legend>";
                            echo "Para evitar a propagação da COVID-19, siga estas orientações.
                            Mantenha uma distância segura de outras pessoas (pelo menos 1 metro), mesmo que elas não pareçam estar doentes.
                            Use máscara em público, especialmente em locais fechados ou quando não for possível manter o distanciamento físico.
                            Prefira locais abertos e bem ventilados em vez de ambientes fechados. Abra uma janela se estiver em um local fechado.
                            Limpe as mãos com frequência. Use sabão e água ou álcool em gel.
                            Tome a vacina quando chegar a sua vez. Siga as orientações locais para isso.
                            Cubra o nariz e a boca com o braço dobrado ou um lenço ao tossir ou espirrar.
                            Fique em casa se você sentir indisposição.
                            Procure atendimento médico se tiver febre, tosse e dificuldade para respirar.
                            Ligue com antecedência para o órgão prestador de cuidados de saúde e peça direcionamento à unidade mais adequada.
                            Isso protege você e evita a propagação de vírus e outras infecções.
                            Máscaras
                            Máscaras bem ajustadas ao rosto podem prevenir a propagação do vírus para outras pessoas. Isoladamente, elas não oferecem proteção contra a COVID-19, por isso o uso deve ser combinado com o distanciamento físico e a limpeza das mãos. Siga as orientações da autoridade local de saúde.";
                            break;
                            }    
            ?>
            </p>
        </fieldset>
        <div id="botao">
        <br> <br> <form action="covid.html" method="post">
            <input type="submit" value="Voltar" name="botao">
        </form>
        </div>
        <?php 
        if (isset($_POST["botao"])){
            echo "Voltar";
        }
        ?>
    </body>
</html>