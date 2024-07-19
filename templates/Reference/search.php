<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reference $reference
 */
?>

<style>
    .col-md-6{
        margin: 20px;
    }
    .row{
        position: relative;
    }
    .pos{
        display: flex;
        justify-content: center;
    }
    
</style>
 <h1>Reference Search</h1>
 <div class="pos">

<?= $this->Form->create(null, ['url' => ['action' => 'search']]) ?>
<div class="row">
    <div class="col-md-6">
        <?= $this->Form->control('id_client', ['label' => 'Client']);?>
    </div>
    <div class="col-md-6">
        <?= $this->Form->control('id_societe', ['label' => 'Company']);?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?= $this->Form->control('id_secteur', ['label' => 'Sector']);?>
    </div>
    <div class="col-md-6">
        <?= $this->Form->control('id_annee', ['label' => 'Year']);?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?= $this->Form->control('id_pays', ['label' => 'Country']);?>
    </div>
    <div class="col-md-6">
        <?= $this->Form->control('id_type', ['label' => 'Type']);?>
    </div>
</div>
<?= $this->Form->button('Search') ?>
<?= $this->Form->end() ?>

</div>

<?php if ($this->request->is('post') && !empty($reference)): ?>

<h2>Results</h2>

    <table>
        <thead>
            <tr>
                <th>Client Name</th>
                <th>Company Name</th>
                <th>Sector Name</th>
                <th>Year</th>
                <th>Country</th>
                <th>Type</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($reference as $reference): ?>
            <tr>
                <td><?= h($reference->client->name) ?></td>
                <td><?= h($reference->societe->name) ?></td>
                <td><?= h($reference->secteur->name) ?></td>
                <td><?= h($reference->annee->name) ?></td>
                <td><?= h($reference->pay->name) ?></td>
                <td><?= h($reference->type->name) ?></td>
                <td><?= $this->Html->link('View', ['action' => 'view', $reference->id]) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?= $this->Paginator->numbers() ?>
<?php endif; ?>
