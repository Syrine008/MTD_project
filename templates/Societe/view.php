<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Societe $societe
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $societe->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $societe->id], ['confirm' => __('Are you sure you want to delete # {0}?', $societe->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List of Companies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Company'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="societe view content">
            <h3><?= h($societe->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($societe->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($societe->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adress') ?></th>
                    <td><?= h($societe->adress) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($societe->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number') ?></th>
                    <td><?= $this->Number->format($societe->number) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
