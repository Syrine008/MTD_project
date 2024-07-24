<?php
?>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        font-size: 16px;
        text-align: left;
    }
    th, td {
        padding: 12px 15px;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #333;
        color: #fff;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
    .img-fluid {
        max-width: 50px;
        height: auto;
    }
    a {
        color: #3498db;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
</style>
<?= $this->Html->image('logo-mtd+2at.png', ['alt' => 'My Logo', 'class' => 'my-logo-class']) ?>

<table class="fixed_headers">
    <thead>
        <tr>
            <th>Name</th>
            <th>Logo</th>
            <th>Client</th>
            <th>Company</th>
            <th>Sector</th>
            <th>Year</th>
            <th>Country</th>
            <th>Type</th>
            <th>Link</th>
        </tr>
    </thead>
    <tbody>
        <?php
       
         foreach ($reference as $reference): ?>
        <tr>
            <td><?= h($reference->name) ?></td>
            <td><?= $this->Html->image($reference->logo, ['class' => 'img-fluid', 'alt' => 'logo']) ?></td>
            <td><?= h($reference->client->name) ?></td>
            <td><?= h($reference->societe->name) ?></td>
            <td><?= h($reference->secteur->name) ?></td>
            <td><?= h($reference->annee->name) ?></td>
            <td><?= h($reference->pay->name) ?></td>
            <td><?= h($reference->type->name) ?></td>
            <td>
                <a href="<?= h($reference->link) ?>" target="_blank"><?= h($reference->link) ?></a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
