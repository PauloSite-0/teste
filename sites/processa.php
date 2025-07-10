<?php
// Verifica se a requisição é do tipo POST e se o campo 'nome' foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nome"])) {
    $nome = htmlspecialchars($_POST["nome"]); // Limpa a entrada para evitar ataques XSS
    echo "Olá, " . $nome . "! Sua mensagem foi recebida com sucesso pelo PHP.";
} else {
    // Se a requisição não for POST ou o campo 'nome' não for enviado
    echo "Nenhum nome recebido ou método de requisição inválido.";
}
?>