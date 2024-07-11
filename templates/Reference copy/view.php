<?php
// Add this debug statement to inspect the contents of $reference
debug($reference);
?>

<div class="reference index content">
    <?= $this->Html->link(__('New Reference'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Reference') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('logo') ?></th>
                    <th><?= $this->Paginator->sort('id_client','Client') ?></th>
                    <th><?= $this->Paginator->sort('id_societe', 'Societe') ?></th>
                    <th><?= $this->Paginator->sort('id_secteur','Secteur') ?></th>
                    <th><?= $this->Paginator->sort('id_annee', 'Annee') ?></th>
                    <th><?= $this->Paginator->sort('id_pays', 'Pays') ?></th>
                    <th><?= $this->Paginator->sort('id_type', 'Type') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reference as $reference): ?>
                <tr>
                    <td><?= h($reference->name) ?></td>
                    <td><?= h($reference->logo) ?></td>
                    <td><?= $reference->has('client') ? $this->Html->link($reference->client->name, ['controller' => 'Client', 'action' => 'view', $reference->client->id_client]) : '' ?></td>
                    <td><?= $reference->has('societe') ? $this->Html->link($reference->societe->name, ['controller' => 'Societe', 'action' => 'view', $reference->societe->id_societe]) : '' ?></td>
                    <td><?= $reference->has('secteur') ? $this->Html->link($reference->secteur->name, ['controller' => 'Secteur', 'action' => 'view', $reference->secteur->id_secteur]) : '' ?></td>
                    <td><?= $reference->has('annee') ? $this->Html->link($reference->annee->name, ['controller' => 'Annee', 'action' => 'view', $reference->annee->id_annee]) : '' ?></td>
                    <td><?= $reference->has('pays') ? $this->Html->link($reference->pays->name, ['controller' => 'Pays', 'action' => 'view', $reference->pays->id_pays]) : '' ?></td>
                    <td><?= $reference->has('type') ? $this->Html->link($reference->type->name, ['controller' => 'Type', 'action' => 'view', $reference->type->id_type]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reference->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reference->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reference->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reference->id)]) ?>
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
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
