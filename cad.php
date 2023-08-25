<!DOCTYPE html>
<html lang="pt-br">
<head>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
        $request_1 = $_GET["nome"] ?? ""; 
        $request_2 = $_GET["sobrenome"] ?? "";
        $request_3 = $_GET["idade"] ?? ""; 
        $request_4 = $_GET["cpf"]?? ""; 
        
        echo "<p> <strong> Nome:</strong> $request_1 <p>
              <p> <strong> Sobrenome: </strong> $request_2 <p> 
              <p> <strong> Idade: </strong> $request_3 <p> 
              <p> <strong> CPF: </strong> $request_4 <p>";
        
        ?>
    </main>
</body>

