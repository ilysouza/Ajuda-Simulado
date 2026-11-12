<div class="vh-100 bg-muted-primary">
    <div class="container bg-body">
        <table class="table" wire:submit='render'>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $c)
                <tr>
                    <th scope="row">{{ $c->id}}</th>
                    <td>{{ $c->nome}}</td>
                    <td>
                        <a href="{{ route('categoria.edit', ['id' => $c->id]) }}"
                            class="theme-primary btn-solid btn-styled">Editar</a>
                        <button wire:submit='excluir' class="theme-danger btn-solid btn-styled">Excluir</button>
                    </td>
                </tr>
                @endforeach

                </tr>
            </tbody>
        </table>
    </div>
</div>