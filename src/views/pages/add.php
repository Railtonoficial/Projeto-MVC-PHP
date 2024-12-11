<?php $render('header'); ?>

<h2 class="form-title">Adicionar novo Usuário</h2>

<form method="POST" action="<?= $base; ?>/novo" class="form-container">
    <div>
        <label for="name">
            Nome:
        </label>
        <input type="text" name="name" id="name" />
    </div>

    <div>
        <label for="email">
            E-mail:
        </label>
        <input type="email" name="email" id="email" />
    </div>

    <div class="form-submit">
        <input type="submit" value="Adicionar" />
    </div>
</form>

<?php $render('footer'); ?>
