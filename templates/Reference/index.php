<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Reference> $references
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <div><?= $this->Html->link(__('List Clients'), ['controller' => 'Client', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Sociétés'), ['controller' => 'Societe', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Secteurs'), ['controller' => 'Secteur', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Années'), ['controller' => 'Annee', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Pays'), ['controller' => 'Pays', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Types'), ['controller' => 'Type', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>

        </div>
    </aside>
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
                        <th><?= $this->Paginator->sort('id_societe', 'Société') ?></th>
                        <th><?= $this->Paginator->sort('id_secteur', 'Secteur') ?></th>
                        <th><?= $this->Paginator->sort('id_annee', 'Année') ?></th>
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
                        <td><?= $reference->has('client') ? $this->Html->link($reference->client->name, ['controller' => 'Client', 'action' => 'view', $reference->client->id]) : '' ?></td>
                        <td><?= $reference->has('societe') ? $this->Html->link($reference->societe->name, ['controller' => 'Societe', 'action' => 'view', $reference->societe->id]) : '' ?></td>
                        <td><?= $reference->has('secteur') ? $this->Html->link($reference->secteur->name, ['controller' => 'Secteur', 'action' => 'view', $reference->secteur->id]) : '' ?></td>
                        <td><?= $reference->has('annee') ? $this->Html->link($reference->annee->name, ['controller' => 'Annee', 'action' => 'view', $reference->annee->id]) : '' ?></td>
                        <td><?= $reference->has('pays') ? $this->Html->link($reference->pays->name, ['controller' => 'Pays', 'action' => 'view', $reference->pays->id]) : '' ?></td>
                        <td><?= $reference->has('type') ? $this->Html->link($reference->type->name, ['controller' => 'Type', 'action' => 'view', $reference->type->id]) : '' ?></td>
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
</div>
