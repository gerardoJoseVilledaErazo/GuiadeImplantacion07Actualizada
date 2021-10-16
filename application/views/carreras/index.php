<div class="container">
    <div class="mt-4">
        <?php if ($this->session->flashdata('success')) : ?>
            <p class="success"><strong><?php echo $this->session->flashdata('success'); ?></strong></p>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')) : ?>
            <p class="error"><strong><?php echo $this->session->flashdata('error'); ?></strong></p>
        <?php endif; ?>
    </div>

    <div class="row">
        <div class="col-sm-6">
            <h3>Listado de Carreras</h3>
        </div>
        <div class="col-sm-6">
            <a class="btn btn-success d-block" href="<?= site_url('carreras/insertar') ?>">Agregar</a>
        </div>
        <br> 
        <div>
            <a href="<?=site_url('carreras/report_todas_las_carreras')?>">Reporte en PDF (Todas las carreras)</a>
        </div> 
        <br>
    </div>

    <div class="row mt-4">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Id Carrera</th>
                    <th>Carrera</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $item) : ?>
                    <tr>
                        <td><?php echo $item->idcarrera; ?></td>
                        <td><?php echo $item->carrera; ?></td>
                        <td>
                            <a href="<?= site_url('carreras/modificar/' . $item->idcarrera) ?>">Modificar</a>
                            <a href="<?= site_url('carreras/eliminar/' . $item->idcarrera) ?>" onclick="return confirm('¿Está seguro?')">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>