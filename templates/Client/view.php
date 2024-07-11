<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id_client], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id_client], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id_client), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Client'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="client view content">
            <h3><?= h($client->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Client') ?></th>
                    <td><?= $this->Number->format($client->id_client) ?></td>
                </tr>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($client->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($client->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Adress') ?></th>
                    <td><?= h($client->adress) ?></td>
                </tr>

                <tr>
                    <th><?= __('Number') ?></th>
                    <td><?= $this->Number->format($client->number) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
