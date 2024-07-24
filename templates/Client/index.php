<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Client> $client
 */
?>

<div class="row">
   <!--  <aside class="column">
        <div class="side-nav">
            <div><?= $this->Html->link(__('List Reference'), ['controller' => 'Reference', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Sociétés'), ['controller' => 'Societe', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Secteurs'), ['controller' => 'Secteur', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Années'), ['controller' => 'Annee', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Pays'), ['controller' => 'Pays', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Types'), ['controller' => 'Type', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>

        </div>
    </aside> -->
    <div class="column column-80">
        <div class="client index content">
        <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <h3><?= __('Client') ?></h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('name') ?></th>
                        <th><?= $this->Paginator->sort('number') ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
                        <th><?= $this->Paginator->sort('adress') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($client as $client): ?>
                    <tr>
                        <td><?= h($client->name) ?></td>
                        <td><?= $number = $client->number;
                            $formatted = preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $number); ?>
                        </td>
                        <td><?= h($client->email) ?></td>
                        <td><?= h($client->adress) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('<i class="fas fa-eye" style="color:#005eff;"></i> ', ['action' => 'view', $client->id_client], ['escape' => false, 'class' => 'view-icon']) ?>
                            <?= $this->Html->link('<i class="fas fa-edit"style="color:#FFD43B;"></i> ', ['action' => 'edit', $client->id_client], ['escape' => false, 'class' => 'edit-icon']) ?>
                            <?= $this->Form->postLink('<i class="fas fa-trash-alt"style="color:#FF0000;"></i> ', ['action' => 'delete', $client->id_client], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id_client),'escape' => false, 'class' => 'delete-icon']) ?>
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
            <!-- <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p> -->
            <p><?= $this->Paginator->counter(__('{{page}} of {{pages}}')) ?></p>
        </div>
    </div>
</div>