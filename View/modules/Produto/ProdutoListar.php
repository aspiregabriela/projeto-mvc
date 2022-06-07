<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th> Descrição </th>
        </tr>

        <?php foreach ($model->rows as $item) : ?>
            <tr>
                
                <td><a href="/Produto/delete?['id']"></a></td>
                <td><?= $item['id'] ?></td>
                <td><?= $item['nome'] ?></td>
                <td><?= $item['preco'] ?></td>
                <td><?= $item['descricao'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>