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
        $request_1 = $_POST["nome"] ?? ""; 
        $request_2 = $_POST["sobrenome"] ?? "";
        $request_3 = $_POST["idade"] ?? ""; 
        $request_4 = $_POST["cpf"]?? ""; 
        
        echo "<p> <strong> Nome:</strong> $request_1 <p>
              <p> <strong> Sobrenome: </strong> $request_2 <p> 
              <p> <strong> Idade: </strong> $request_3 <p> 
              <p> <strong> CPF: </strong> $request_4 <p>";
        
        ?>
    </main>
</body>

