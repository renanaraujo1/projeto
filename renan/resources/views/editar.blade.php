<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição</title>

    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: rgb(235, 235, 235);
        }

        form{
            background-color: rgb(255, 96, 96);
            color: white;
            width: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
            border-radius: 20px;
        }

        form > button{
            margin-top: 20px;
            width: 200px;
            height: 40px;
            background: white;
            color: black;
            cursor: pointer;
        }

    </style>
</head>
<body>

    @if ($errors)
        @foreach ($errors->all() as $erros)
            <p>{{ $erros }}</p>
        @endforeach
    @endif

    <form action="/edit/{{ $livro->id }}" method="post">
        @csrf
        <div>
            <p>Autor</p>
            <input type="text" name="autor" value="{{ $livro->autor }}">
        </div>

        <div>
            <p>Titulo</p>
            <input type="text" name="titulo" value="{{ $livro->titulo }}">
        </div>

        <div>
            <p>Subtitulo</p>
            <input type="text" name="subtitulo" value="{{ $livro->subtitulo }}">
        </div>

        <div>
            <p>Edição</p>
            <input type="text" name="edicao" value="{{ $livro->edicao }}">
        </div>

        <div>
            <p>Editora</p>
            <input type="text" name="editora" value="{{ $livro->editora }}">
        </div>

        <div>
            <p>Ano de Publicação</p>
            <input type="number" name="ano_de_publicacao" value="{{ $livro->ano_de_publicacao }}">
        </div>

        <button type="submit">Editar</button>
    </form>

</body>
</html>