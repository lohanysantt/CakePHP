<?php
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Cadastrar Funcionarios'), ['action' => 'add']) ?></li>
    </ul>
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Funcionarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>

<div class="funcionarios index large-9 medium-8 columns content">
    <h3><?= __('Funcionarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Data de nascimento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Sexo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Uf') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($funcionarios as $funcionario) : ?>
                <tr>
                    <td><?= $this->Number->format($funcionario->id) ?></td>
                    <td><?= h($funcionario->nome) ?></td>
                    <td><?= h($funcionario->dt_nascimento) ?></td>
                    <td><?= h($funcionario->sexo) ?></td>
                    <td><?= h($funcionario->uf) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $funcionario->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $funcionario->id]) ?>
                        <?= $this->Form->postLink(__('Delet'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Tem certeza que deseja excluir?', $funcionario->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('Última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} resultados de {{count}} do total')]) ?></p>
    </div>
</div>