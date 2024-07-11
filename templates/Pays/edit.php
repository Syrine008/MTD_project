<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pay $pay
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pay->id_pays],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pay->id_pays), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List of countries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="pays form content">
            <?= $this->Form->create($pay) ?>
            <fieldset>
                <legend><?= __('Edit country') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
