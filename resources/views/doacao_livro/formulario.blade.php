<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Doação de Livro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin-top: 20px; /* Adicionando margem ao topo do formulário */
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 0; /* Removendo a margem superior padrão */
            margin-bottom: 20px; /* Adicionando margem inferior ao h1 */
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #555;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .button-container {
            text-align: center;
        }

        button {
            width: 50%;
            padding: 10px;
            background-color: #007bff; /* Cor azul do botão */
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3; /* Cor azul um pouco mais escura ao passar o mouse */
        }
    </style>
</head>
<body>
    <form action="{{ route('doacao.doar') }}" method="POST">
        <h1>Doe seu livro</h1> <!-- Movido para dentro do formulário -->
        @csrf
        <label for="nome">Nome do Livro:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="estado">Estado de Uso "Novo" ou "Velho":</label>
        <input type="text" id="estado" name="estado" required>

        <label for="livraria">Para qual livraria:</label>
        <select id="livraria" name="livraria" required>
            <option value="">Selecione a livraria</option>
            <option value="Saraiva">Saraiva</option>
            <option value="Livraria Cultura">Livraria Cultura</option>
            <option value="Livraria da Vida">Livraria da Vida</option>
        </select>

        <label for="fornecedor">Formato:</label>
        <input type="text" id="fornecedor" name="fornecedor" value="Doação">

        <div class="button-container">
            <button type="submit">Doar</button>
        </div>
    </form>
</body>
</html>
