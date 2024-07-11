<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Type $type
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Type'), ['action' => 'edit', $type->id_type], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Type'), ['action' => 'delete', $type->id_type], ['confirm' => __('Are you sure you want to delete # {0}?', $type->id_type), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Type'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Type'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="type view content">
            <h3><?= h($type->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($type->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Type') ?></th>
                    <td><?= $this->Number->format($type->id_type) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
