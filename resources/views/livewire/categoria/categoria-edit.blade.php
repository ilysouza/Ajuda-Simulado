<div class="vh-100 bg-muted-primary d-flex align-items-center justify-content-center">
    <div class="card w-50">
        <div class="card-body">
            <p class="fs-2xl">Categoria</p>
            <form wire:submit='update'>
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input wire:model='nome' type="text" class="form-control" placeholder="Digite o nome da categoria">
                </div>
                <button type="submit" class="theme-info btn-solid btn-styled mt-3">
                    Editar
                </button>
            </form>
        </div>
    </div>
</div>
