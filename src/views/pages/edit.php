<?php $render('header'); ?>

<h2 style="text-align: center;">Editar Usuário</h2>

<form method="POST" action="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar" class="form-container">
    <div class="form-espaco">
        <label for="name">
            Nome:
        </label>
        <input type="text" name="name" id="name" value="<?= $usuario['name']; ?>" />
    </div>

    <div>
        <label for="email">
            E-mail:
        </label>
        <input type="email" name="email" id="email" value="<?= $usuario['email']; ?>" />
    </div>

    <div style="text-align: center; padding-top: 10px;">
        <input type="submit" value="Salvar" />
    </div>
</form>

<?php $render('footer'); ?>
