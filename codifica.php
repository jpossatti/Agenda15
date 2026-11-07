<?php
// Recebe o texto digitado no formulário via método POST
$texto = $_POST["txtTexto"];

// Processa o texto com os diferentes algoritmos e funções solicitadas
$md5_codificado = md5($texto);
$sha1_codificado = sha1($texto);
$password_hash_codificado = password_hash($texto, PASSWORD_DEFAULT);

// Apresenta a senha digitada e os resultados obtidos em cada formato
echo "<strong>Senha Digitada:</strong> " . htmlspecialchars($texto) . "<br><br>";
echo "<strong>Senha em MD5:</strong> " . $md5_codificado . "<br>";
echo "<strong>Senha em SHA-1:</strong> " . $sha1_codificado . "<br>";
echo "<strong>Senha com password_hash():</strong> " . $password_hash_codificado . "<br>";
?>