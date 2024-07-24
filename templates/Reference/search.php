<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reference $reference
 */
?>

<style>
        .col-md-6{
        margin: 20px;
        width:100%;
    }
    .row{
        position: relative;
    }

    button{
        display: flex;
        justify-content: center;
        margin-right: auto;
        margin-left : auto;
    }
</style>
<div class="pos">
    <?= $this->Form->create(null, ['url' => ['action' => 'search']]) ?>
    <div class="row">
        <div class="col-md-6">
            <?= $this->Form->control('id_client', ['label' => 'Client', 'options' => $client]);?>
        </div>
        <div class="col-md-6">
            <?= $this->Form->control('id_societe', ['label' => 'Societe', 'options' => $societe]);?>
        </div>
        <div class="col-md-6">
            <?= $this->Form->control('id_secteur', ['label' => 'Secteur', 'options' => $secteur]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?= $this->Form->control('id_annee', ['label' => 'Annee', 'options' => $annee]);?>
        </div>
        <div class="col-md-6">
            <?= $this->Form->control('id_pays', ['label' => 'Pays', 'options' => $pays]);?>
        </div>
        <div class="col-md-6">
            <?= $this->Form->control('id_type', ['label' => 'Type', 'options' => $type]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $this->Form->button('Search') ?>
        </div>
    </div>
    <?= $this->Form->end() ?>



</div>

<?php if ($this->request->is('post')): ?>
    <?php if (!$reference->isEmpty()): ?>
        
    <?= $this->Form->create(null, ['url' => ['action' => 'print']]) ?>
    <?= $this->Form->hidden('reference', ['value' => json_encode($reference)]) ?>
    <div class="row">
        <div class="col-md-12">
            <?= $this->Form->button(__('Print')) ?>
        </div>
    </div>
    <?= $this->Form->end() ?>
    <div class="tab">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Logo</th>
                    <th>Client Name</th>
                    <th>Company Name</th>
                    <th>Sector Name</th>
                    <th>Year</th>
                    <th>Country</th>
                    <th>Type</th>
                    <th>Link</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reference as $reference): ?>
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
        <?= $this->Paginator->numbers() ?>
    </div>
    <?php else: ?>
        <div class="alert alert-warning">
            No data to return.
        </div>
    <?php endif; ?>
<?php endif; ?>
