<table>
    <tr>    
        <th></th>       
        <th>Id</th>
        <th>Nome</th>
        <th>RG</th>
        <th>CPF</th>
        <th>Data Nascimento</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
        <td>
            <a href="/pessoa/delete?id=<?= $item['id'] ?>">Excluir</a>
        </td>
        <td><?= $item['id'] ?></td>
        <td><a href="/pessoa/form?id=<?= $item['id'] ?>"><?= $item['nome'] ?></a></td>
        <td><?= $item['rg'] ?></td>
        <td><?= $item['cpf'] ?></td>
        <td><?= $item['data_nascimento'] ?></td>
        <td><?= $item['email'] ?></td>
        <td><?= $item['telefone'] ?></td>
        <td><?= $item['endereco'] ?></td>

    </tr>
    <?php endforeach ?>

</table>