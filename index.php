<?php
session_start();

// Verifica se o produto foi adicionado ao carrinho
if (isset($_POST['produto'])) {
  // Conecta ao banco de dados
  $conn = mysqli_connect('localhost', 'usuario', 'senha', 'banco_de_dados');

  // Obtém as informações do produto
  $produto = $_POST['produto'];
  $preco = $_POST['preco'];
  $quantidade = $_POST['quantidade'];

  // Insere o produto no carrinho
  $sql = "INSERT INTO carrinho (produto, preco, quantidade) VALUES ('$produto', '$preco', '$quantidade')";
  mysqli_query($conn, $sql);
}

// Exibe o carrinho
$sql = "SELECT * FROM carrinho";
$resultado = mysqli_query($conn, $sql);
$total = 0;

while ($linha = mysqli_fetch_array($resultado)) {
  $subtotal = $linha['preco'] * $linha['quantidade'];
  $total += $subtotal;
  echo $linha['produto'] . ' - R$' . number_format($linha['preco'], 2) . ' x ' . $linha['quantidade'] . ' = R$' . number_format($subtotal, 2) . '<br>';
}

echo 'Total: R$' . number_format($total, 2);

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>