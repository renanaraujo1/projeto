<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Biblioteca') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" style="display: flex; align-items:center; justify-content:center; flex-direction:column;">
                    <button style="background-color: white; color:black; width:100px;height:30px;border-radius:10px;">
                        <a href="/cadastrar">Adicionar</a>
                    </button>
                    <table style="margin-top:20px;">
                        <thead>
                            <tr>
                                <th style="padding: 0px 20px">Autor</th>
                                <th style="padding: 0px 20px">Titulo</th>
                                <th style="padding: 0px 20px">Subtitulo</th>
                                <th style="padding: 0px 20px">Edição</th>
                                <th style="padding: 0px 20px">Editora</th>
                                <th style="padding: 0px 20px">Ano de Publicação</th>
                                <th style="padding: 0px 20px">Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($livros->all() as $livro)
                                <tr>
                                    <td style="padding:  0px 20px">{{ $livro->autor }}</td>
                                    <td style="padding:  0px 20px">{{ $livro->titulo }}</td>
                                    <td style="padding:  0px 20px">{{ $livro->subtitulo }}</td>
                                    <td style="padding:  0px 20px">{{ $livro->edicao }}</td>
                                    <td style="padding:  0px 20px">{{ $livro->editora }}</td>
                                    <td style="padding:  0px 20px">{{ $livro->ano_de_publicacao }}</td>
                                    <td style="padding:  0px 20px">
                                        <button>
                                            <a href="/editar/{{ $livro->id }}">Editar</a>
                                        </button>
                                        <button>
                                            <a href="/deletar/{{ $livro->id }}">Apagar</a>
                                        </button>
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
