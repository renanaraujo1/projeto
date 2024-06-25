<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Biblioteca') }}
        </h2>
    </x-slot>

    <style>
        
        .action-button {
            background-color: #4CAF50; 
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            margin-bottom: 20px;
            transition: background-color 0.3s ease;
        }

        .action-button a {
            color: white;
            text-decoration: none;
        }

        .action-button:hover {
            background-color: #45a049; 
        }

        
        .book-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .book-table th, .book-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .book-table th {
            background-color: #f2f2f2; 
        }

        
        .button-group {
            display: flex;
            gap: 10px;
        }

        .edit-button, .delete-button {
            background-color: #007bff; 
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .edit-button a, .delete-button a {
            color: white;
            text-decoration: none;
        }

        .edit-button:hover, .delete-button:hover {
            background-color: #0056b3; 
        }

        
        .book-table tbody tr:hover {
            background-color: #ffffff; 
        }

        
        .dark-mode .action-button,
        .dark-mode .edit-button,
        .dark-mode .delete-button {
            background-color: #333;
            color: #fff;
        }

        .dark-mode .book-table th {
            background-color: #444;
            color: #fff;
        }

        .dark-mode .book-table tbody tr:hover {
            background-color: #555;
        }

        
        .bg-container {
            background-color: #ffffff; 
        }
    </style>

    <div class="py-12 bg-container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <button class="action-button">
                        <a href="/cadastrar">Adicionar Livro</a>
                    </button>
                    <table class="book-table">
                        <thead>
                            <tr>
                                <th>Autor</th>
                                <th>Título</th>
                                <th>Subtítulo</th>
                                <th>Edição</th>
                                <th>Editora</th>
                                <th>Ano de Publicação</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($livros->all() as $livro)
                                <tr>
                                    <td>{{ $livro->autor }}</td>
                                    <td>{{ $livro->titulo }}</td>
                                    <td>{{ $livro->subtitulo }}</td>
                                    <td>{{ $livro->edicao }}</td>
                                    <td>{{ $livro->editora }}</td>
                                    <td>{{ $livro->ano_de_publicacao }}</td>
                                    <td>
                                        <div class="button-group">
                                            <button class="edit-button">
                                                <a href="/editar/{{ $livro->id }}">Editar</a>
                                            </button>
                                            <button class="delete-button">
                                                <a href="/deletar/{{ $livro->id }}">Apagar</a>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $livros->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
