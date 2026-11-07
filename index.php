<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD5 - SHA1 e HASH - Processo Seletivo</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Formulário estilizado com W3CSS -->
    <form action="codifica.php" method="post" class="w3-container w3-card-4 w3-black w3-text-green w3-margin w3-display-middle" style="width: 30%;">
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-lock"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border w3-round-large" name="txtTexto" placeholder="Insira Texto" required>
            </div>
        </div>
        <div class="w3-row w3-section">
            <button name="btnCrip" class="w3-button w3-block w3-margin w3-green w3-cell w3-round-large" style="width: 90%;">Criptografar</button>
        </div>
    </form>
</body>
</html>