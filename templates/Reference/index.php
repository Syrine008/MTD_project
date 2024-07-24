<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Reference> $references
 */
?>

<style>

/* .side-nav {
    background-color: #f8f9fa;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
.side-nav .side-nav-item {
    display: block;
    margin-bottom: 10px;
    padding: 10px;
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 5px;
    text-align: center;
    transition: background-color 0.3s;
}
.side-nav .side-nav-item:hover {
    background-color: #f1f1f1;
}
.side-nav .side-nav-item i {
    margin-right: 8px;
}
 */



</style>

<div class="row">
    <!-- <aside class="column">
        <div class="side-nav">
            <div class="li"><?= $this->Html->link(__('<i class="fa fa-users fa-2x" style="color:#ed7923;"></i> List Clients'), ['controller' => 'Client', 'action' => 'index'], ['class' => 'side-nav-item', 'escape' => false]) ?></div>
            <div class="li"><?= $this->Html->link(__('<i class="fa fa-building fa-2x"style="color:#ed7923;"></i> List Sociétés'), ['controller' => 'Societe', 'action' => 'index'], ['class' => 'side-nav-item', 'escape' => false]) ?></div>
            <div class="li"><?= $this->Html->link(__('<i class="fa fa-industry fa-2x"style="color:#ed7923;"></i> List Secteurs'), ['controller' => 'Secteur', 'action' => 'index'], ['class' => 'side-nav-item', 'escape' => false]) ?></div>
            <div class="li"><?= $this->Html->link(__('<i class="fa fa-calendar-alt fa-2x"style="color:#ed7923;"></i> List Années'), ['controller' => 'Annee', 'action' => 'index'], ['class' => 'side-nav-item', 'escape' => false]) ?></div>
            <div class="li"><?= $this->Html->link(__('<i class="fa fa-globe fa-2x"style="color:#ed7923;"></i> List Pays'), ['controller' => 'Pays', 'action' => 'index'], ['class' => 'side-nav-item', 'escape' => false]) ?></div>
            <div class="li"><?= $this->Html->link(__('<i class="fa fa-tags fa-2x"style="color:#ed7923;"></i> List Types'), ['controller' => 'Type', 'action' => 'index'], ['class' => 'side-nav-item', 'escape' => false]) ?></div>
        </div>

    </aside> -->
    <div class="column column-80">
    <div class="reference index content">
        <?= $this->Html->link(__('New Reference'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <h3><?= __('Reference') ?></h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('name') ?></th>
                        <th><?= $this->Paginator->sort('logo') ?></th>
                        <th><?= $this->Paginator->sort('id_client', 'Client') ?></th>
                        <th><?= $this->Paginator->sort('id_societe', 'Company') ?></th>
                        <th><?= $this->Paginator->sort('id_secteur', 'Sector') ?></th>
                        <th><?= $this->Paginator->sort('id_annee', 'Year') ?></th>
                        <th><?= $this->Paginator->sort('id_pays', 'Country') ?></th>
                        <th><?= $this->Paginator->sort('id_type', 'Type') ?></th>
                        <th><?= $this->Paginator->sort('link') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reference as $reference): 
                       // debug($reference->pay['name']);die;?>
                    <tr>
                        <td><?= h($reference->name) ?></td>
                        <!-- <td><?= h($reference->logo) ?></td> -->
                        <td><?= $this->Html->image($reference->logo, ['class' => 'img-fluid', 'alt' => 'logo']) ?></td>
                        <td><?= $reference->has('client') ? $this->Html->link($reference->client->name, ['controller' => 'Client', 'action' => 'view', $reference->client->id]) : '' ?></td>
                        <td><?= $reference->has('societe') ? $this->Html->link($reference->societe->name, ['controller' => 'Societe', 'action' => 'view', $reference->societe->id]) : '' ?></td>
                        <td><?= $reference->has('secteur') ? $this->Html->link($reference->secteur->name, ['controller' => 'Secteur', 'action' => 'view', $reference->secteur->id]) : '' ?></td>
                        <td><?= $reference->has('annee') ? $this->Html->link($reference->annee->name, ['controller' => 'Annee', 'action' => 'view', $reference->annee->id]) : '' ?></td>
                        <td><?= $reference->pay['name'] ?></td>
                        <td><?= $reference->has('type') ? $this->Html->link($reference->type->name, ['controller' => 'Type', 'action' => 'view', $reference->type->id]) : '' ?></td>
                        <td><?= h($reference->link) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('<i class="fas fa-eye" style="color:#005eff;"></i> ', ['action' => 'view', $reference->id], ['escape' => false, 'class' => 'view-icon']) ?>
                            <?= $this->Html->link('<i class="fas fa-edit"style="color:#FFD43B;"></i> ', ['action' => 'edit', $reference->id], ['escape' => false, 'class' => 'edit-icon']) ?>
                            <?= $this->Form->postLink('<i class="fas fa-trash-alt"style="color:#FF0000;"></i> ', ['action' => 'delete', $reference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reference->id),'escape' => false,'class' => 'delete-icon']) ?>

                        </td>

                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(__('{{page}} of {{pages}}')) ?></p>
        </div>
    </div>
</div>
