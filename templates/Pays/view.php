<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $pay
 */
?>
<div class="row">
    <!-- <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List of countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New country'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Edit country'), ['action' => 'edit', $pays->id_pays], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete country'), ['action' => 'delete', $pays->id_pays], ['confirm' => __('Are you sure you want to delete # {0}?', $pays->id_pays), 'class' => 'side-nav-item']) ?>
        </div>
    </aside> -->
    <div class="column column-80">
        <div class="pays view content">
            <h3><?= h($pays->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($pays->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Pays') ?></th>
                    <td><?= $this->Number->format($pays->id_pays) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
