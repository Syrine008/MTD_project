<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $annee
 */
?>


<div class="row">
    <!-- <aside class="column">
        <div class="side-nav">
            <div><?= $this->Html->link(__('List Reference'), ['controller' => 'Reference', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Client'), ['controller' => 'Client', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Sociétés'), ['controller' => 'Societe', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Secteurs'), ['controller' => 'Secteur', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Pays'), ['controller' => 'Pays', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>
            <div><?= $this->Html->link(__('List Types'), ['controller' => 'Type', 'action' => 'index'], ['class' => 'side-nav-item']) ?></div>


        </div>
    </aside> -->
    <div class="column column-80">
    <div class="annee index content">
        <?= $this->Html->link(__('New Year'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <h3><?= __('Year') ?></h3>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('annee') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($annee as $annee): ?>
                    <tr>
                        <td><?= h($annee->name) ?></td>
                        <td class="actions">
                            <?= $this->Html->link('<i class="fas fa-eye" style="color:#005eff;"></i> ', ['action' => 'view', $annee->id_annee], ['escape' => false, 'class' => 'view-icon']) ?>
                            <?= $this->Html->link('<i class="fas fa-edit"style="color:#FFD43B;"></i> ', ['action' => 'edit', $annee->id_annee], ['escape' => false, 'class' => 'edit-icon']) ?>
                            <?= $this->Form->postLink('<i class="fas fa-trash-alt"style="color:#FF0000;"></i> ', ['action' => 'delete', $annee->id_annee], ['confirm' => __('Are you sure you want to delete # {0}?', $annee->id_annee),'escape' => false, 'class' => 'delete-icon']) ?>
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
