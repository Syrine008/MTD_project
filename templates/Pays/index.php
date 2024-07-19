<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\Cake\Datasource\EntityInterface> $pays
 */
?>
<div class="pays index content">
    <?= $this->Html->link(__('New Country'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Country') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pays as $pays): ?>
                <tr>
                    <td><?= h($pays->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('<i class="fas fa-eye" style="color:#005eff;"></i> ', ['action' => 'view', $pays->id_pays], ['escape' => false, 'class' => 'view-icon']) ?>
                        <?= $this->Html->link('<i class="fas fa-edit"style="color:#FFD43B;"></i> ', ['action' => 'edit', $pays->id_pays], ['escape' => false, 'class' => 'edit-icon']) ?>
                        <?= $this->Form->postLink('<i class="fas fa-trash-alt"style="color:#FF0000;"></i> ', ['action' => 'delete', $pays->id_pays], ['confirm' => __('Are you sure you want to delete # {0}?', $pays->id_pays),'escape' => false, 'class' => 'delete-icon']) ?>
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
