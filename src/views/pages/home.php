<?php $render('header'); ?>

<div class="novo-usuario-container">
    <a href="<?= $base; ?>/novo" class="novo-usuario">
        Novo Usuário
    </a>
</div>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($usuarios as $usuario) : ?>
        <tr>
            <td><?= $usuario['id']; ?></td>
            <td><?= $usuario['name']; ?></td>
            <td><?= $usuario['email']; ?></td>
            <td class="action-cell">
                <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar">
                    <img class="action-icon" width="20" src="<?= $base; ?>/assets/images/document.png" alt="Editar" />
                </a>
                <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/excluir" onclick="return confirm('Tem certeza que deseja excluir?')">
                    <img class="action-icon" width="20" src="<?= $base; ?>/assets/images/trash.png" alt="Excluir" />
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php $render('footer'); ?>
