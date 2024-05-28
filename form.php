<div class="container">
    <form action="?controller=ListasController&<?php echo isset($complaint->id) ? "method=atualizar&id={$complaint->id}" : "method=salvar"; ?>" method="post" >
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Reclamação</span>
            </div>
            <div class="card-body">
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Tipo:</label>
                <input type="text" class="form-control col-sm-8" name="tipo" id="tipo" required value="<?php
                echo isset($complaint->tipo) ? $complaint->tipo : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Descrição:</label>
                <input type="text" class="form-control col-sm-8" name="descricao" id="descricao"  required value="<?php
                echo isset($complaint->descricao) ? $complaint->descricao : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Data:</label>
                <input type="date" class="form-control col-sm-8" name="data" id="data"  required value="<?php
                echo isset($complaint->data) ? $complaint->data : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Autor:</label>
                <input type="text" class="form-control col-sm-8" name="autor" id="autor" required value="<?php
                echo isset($complaint->autor) ? $complaint->autor : null;
                ?>" />
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($complaint->id) ? $complaint->id : null; ?>" />
                <button class="btn btn-success" type="submit">Salvar</button>
                <button type="reset" class="btn btn-secondary">Limpar</button>
                <a class="btn btn-danger" href="?controller=ListasController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
</div>
