<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Societe> $societe
 */
?>

<div class="row">
    <aside class="column">
        <div class="side-nav">
            <div><?= $this->Html->link(__('List Reference'), ['controller' => 'Reference', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Client'), ['controller' => 'Client', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Secteur'), ['controller' => 'Secteur', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Années'), ['controller' => 'Annee', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Pays'), ['controller' => 'Pays', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Types'), ['controller' => 'Type', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>

        </div>
    </aside>
    <div class="column column-80">
    <div class="societe index content">
    <?= $this->Html->link(__('New Company'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Company') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('adress') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('number') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($societe as $societe): ?>
                <tr>
                    <td><?= h($societe->name) ?></td>
                    <td><?= h($societe->adress) ?></td>
                    <td><?= h($societe->email) ?></td>
                    <td><?= $this->Number->format($societe->number) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $societe->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $societe->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $societe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $societe->id)]) ?>
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
