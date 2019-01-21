<a href="?page=create_user">Cadastrar user</a>

<h2>Pagina inicial</h2>
<?=get('message');?>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $users = all('user');
            foreach ($users as $user):
        ?>
        <tr>
            <td><?=$user->id;?></td>
            <td><?=$user->nome;?></td>
            <td><?=$user->email;?></td>
            <td>
                <a href="page/edit_user&id=<?=$user->id;?>" class="btn bnt-success">Editar</a>
            </td>
            <td>
                <a href="?page=delete_user&id=<?=$user->id;?>" class="btn btn-danger">Deletar</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>