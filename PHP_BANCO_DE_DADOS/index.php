<?php
$pdo = new PDO(
    "mysql:host=localhost;dbname=dev;charset=utf8",
    "root",
    "123456789",
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

if (isset($_POST['acao'])) {
    $nome = $_POST['nome'];
    $sigla = $_POST['sigla'];
    $ambito = $_POST['ambito'];
    $estado = $_POST['estado'];
    $descricao = $_POST['descricao'];

    $sql = $pdo->prepare("
        INSERT INTO policias 
        (nome, sigla, ambito, estado, descricao, ativo, created_at)
        VALUES (?, ?, ?, ?, ?, ?, ?)
    ");

    $sql->execute([
        $nome,
        $sigla,
        $ambito,
        $estado,
        $descricao,
        1,
        date('Y-m-d H:i:s')
    ]);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        /* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Arial, sans-serif;
        }

        /* Fundo institucional */
        body {
            background: linear-gradient(135deg, #0f172a, #020617);
            color: #e5e7eb;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Card do formulário */
        form {
            background-color: #020617;
            border: 1px solid #1e293b;
            padding: 32px;
            width: 380px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
        }

        /* Campos */
        form div {
            margin-bottom: 18px;
        }

        /* Labels */
        label {
            display: block;
            margin-bottom: 6px;
            font-size: 13px;
            font-weight: 600;
            color: #cbd5f5;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Inputs e textarea */
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px 12px;
            background-color: #020617;
            border: 1px solid #334155;
            color: #e5e7eb;
            border-radius: 6px;
            outline: none;
            font-size: 14px;
            transition: border 0.2s ease, box-shadow 0.2s ease;
        }

        textarea {
            min-height: 90px;
            resize: vertical;
        }

        /* Foco */
        input[type="text"]:focus,
        textarea:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.25);
        }

        /* Botão */
        button {
            width: 100%;
            padding: 12px;
            background-color: #1d4ed8;
            border: none;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.2s ease, transform 0.1s ease;
        }

        /* Hover do botão */
        button:hover {
            background-color: #2563eb;
        }

        /* Clique */
        button:active {
            transform: scale(0.98);
        }
    </style>
</head>

<body>
    <form method="POST">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>
        <div>
            <label for="sigla">Sigla</label>
            <input type="text" name="sigla" id="sigla">
        </div>
        <div>
            <label for="ambito">Ambito</label>
            <input type="text" name="ambito" id="ambito">
        </div>
        <div>
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado">
        </div>
        <div>
            <label for="descricao">Descrição</label>
            <textarea name="descricao" id="descricao"></textarea>
        </div>
        <button type="submit" name="acao" value="enviar">Enviar</button>
    </form>
</body>

</html>