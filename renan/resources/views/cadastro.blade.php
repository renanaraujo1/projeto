<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Livros</title>

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0; 
            font-family: Arial, sans-serif; 
        }

        form {
            background-color: #4CAF50; 
            color: white;
            width: 300px;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); 
        }

        form > div {
            margin-bottom: 10px;
        }

        form input[type="text"],
        form input[type="number"] {
            width: calc(100% - 20px); 
            padding: 10px;
            border: none;
            border-radius: 5px;
            box-shadow: inset 0px 0px 5px 0px rgba(0,0,0,0.1); 
            font-size: 16px;
        }

        form > button {
            width: 100%;
            height: 40px;
            background-color: #fff; 
            color: #4CAF50; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        form > button:hover {
            background-color: #e0e0e0; 
        }

        .error-message {
            color: red; 
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div style="text-align: center; margin-bottom: 20px;">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p class="error-message">{{ $error }}</p>
            @endforeach
        @endif
    </div>

    <form action="/cadastro" method="post">
        @csrf

        <div>
            <p>Autor</p>
            <input type="text" name="autor" required>
        </div>

        <div>
            <p>Título</p>
            <input type="text" name="titulo" required>
        </div>

        <div>
            <p>Subtítulo</p>
            <input type="text" name="subtitulo">
        </div>

        <div>
            <p>Edição</p>
            <input type="text" name="edicao">
        </div>

        <div>
            <p>Editora</p>
            <input type="text" name="editora">
        </div>

        <div>
            <p>Ano de Publicação</p>
            <input type="number" name="ano_de_publicacao">
        </div>

        <button type="submit">Cadastrar</button>
    </form>

</body>
</html>
