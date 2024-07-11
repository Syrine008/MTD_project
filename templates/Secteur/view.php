<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Secteur $secteur
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sector'), ['action' => 'edit', $secteur->id_secteur], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sector'), ['action' => 'delete', $secteur->id_secteur], ['confirm' => __('Are you sure you want to delete # {0}?', $secteur->id_secteur), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List of Sector'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sector'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="secteur view content">
            <h3><?= h($secteur->name) ?></h3>
            <table>
            <tr>
                <th><?= __('Id Sector') ?></th>
                    <td><?= $this->Number->format($secteur->id_secteur) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($secteur->name) ?></td>
                </tr>
                
            </table>
        </div>
    </div>
</div>
