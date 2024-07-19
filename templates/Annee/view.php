<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $annee
 */
?>
<div class="row">
    <!-- <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List of Years'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Year'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Edit Year'), ['action' => 'edit', $annee->id_annee], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Year'), ['action' => 'delete', $annee->id_annee], ['confirm' => __('Are you sure you want to delete # {0}?', $annee->id_annee), 'class' => 'side-nav-item']) ?>
           
        </div>
    </aside> -->
    <div class="column column-80">
        <div class="annee view content">
            <h3><?= h($annee->id_annee) ?></h3>
            <table>
                <tr>
                    <th><?= __('Year') ?></th>
                    <td><?= h($annee->annee) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Year') ?></th>
                    <td><?= $this->Number->format($annee->id_annee) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
