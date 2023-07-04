<!DOCTYPE html>
<html>

<head>
    <title>Processamento da Reserva</title>
</head>

<body>
    <h1>Processamento da Reserva</h1>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os dados do formulário
        $mesa = $_POST["mesa"];
        $nome = $_POST["nome"];
        $data = $_POST["data"];

        // Verifique a disponibilidade da mesa para a data escolhida
        // Substitua a lógica a seguir pela verificação real no seu sistema
        $mesaDisponivel = true;

        // Se a mesa não estiver disponível, exiba uma mensagem de erro
        if (!$mesaDisponivel) {
            echo "Desculpe, a mesa selecionada não está disponível para a data escolhida.<br>";
            echo "Por favor, escolha outra mesa ou data.";
        } else {
            // A mesa está disponível, faça o processamento adicional necessário
            // Por exemplo, salve os dados em um banco de dados

            // Exibe uma mensagem de confirmação
            echo "Sua reserva foi feita com sucesso!<br>";
            echo "Mesa: " . $mesa . "<br>";


            echo "Nome: " . $nome . "<br>";
            echo "Data: " . $data . "<br>";
        }
    }
    ?>
</body>

</html>