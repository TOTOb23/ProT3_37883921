<div class="container mt-4">
    <h2 class="mb-4">Formulario de Registro</h2>
    <?php $validation = \Config\Services::validation(); ?>
    <form method="post" action="<?php echo base_url('/enviar-form'); ?>">
        <?= csrf_field(); ?>
        <?php if(session()->getFlashdata('fail')): ?>
            <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
        <?php endif ?>
        <?php if(session()->getFlashdata('success')): ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
        <?php endif ?>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
                <?php if($validation->getError('nombre')): ?>
                    <div class="alert alert-danger mt-2"><?= $validation->getError('nombre'); ?></div>
                <?php endif ?>
            </div>
            <div class="form-group col-md-6">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresa tu apellido" required>
                <?php if($validation->getError('apellido')): ?>
                    <div class="alert alert-danger mt-2"><?= $validation->getError('apellido'); ?></div>
                <?php endif ?>
            </div>
        </div>
        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingresa tu nombre de usuario" required>
            <?php if($validation->getError('usuario')): ?>
                <div class="alert alert-danger mt-2"><?= $validation->getError('usuario'); ?></div>
            <?php endif ?>
        </div>
        <div class="form-group">
            <label for="email">Correo electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu correo electrónico" required>
            <?php if($validation->getError('email')): ?>
                <div class="alert alert-danger mt-2"><?= $validation->getError('email'); ?></div>
            <?php endif ?>
        </div>
        <div class="form-group">
            <label for="password">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa tu contraseña" required>
            <?php if($validation->getError('password')): ?>
                <div class="alert alert-danger mt-2"><?= $validation->getError('password'); ?></div>
            <?php endif ?>
        </div>
        <div class="form-group">
            <label for="confirm-password">Confirmar Contraseña:</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Confirma tu contraseña" required>
            <?php if($validation->getError('confirm-password')): ?>
                <div class="alert alert-danger mt-2"><?= $validation->getError('confirm-password'); ?></div>
            <?php endif ?>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary mr-2">Registrarse</button>
            <button type="reset" class="btn btn-secondary">Borrar</button>
        </div>
    </form>
</div>
