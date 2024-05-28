<h1>Reclamações</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped" style="top:40px;">
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Autor</th>
                <th><a href="?controller=ListasController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($complaint) {
                foreach ($complaint as $complaint) {
                    ?>
                    <tr>
                        <td><?php echo $complaint->tipo; ?></td>
                        <td><?php echo $complaint->descricao; ?></td>
                        <td><?php echo $complaint->data; ?></td>                        
                        <td><?php echo $complaint->autor; ?></td>

                        <td>
                            <a href="?controller=ListasController&method=editar&id=<?php echo $complaint->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=ListasController&method=excluir&id=<?php echo $complaint->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="6">Nenhum registro encontrado</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

</div>