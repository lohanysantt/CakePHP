<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Funcionario'), ['action' => 'edit', $funcionario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Funcionario'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Tem certeza que deseja excluir?', $funcionario->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista dos Funcionarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Cadastrar um novo Funcionario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="funcionarios view large-9 medium-8 columns content">
    <h3><?= h($funcionario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($funcionario->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($funcionario->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uf') ?></th>
            <td><?= h($funcionario->uf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($funcionario->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dt Nascimento') ?></th>
            <td><?= h($funcionario->dt_nascimento) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observacao') ?></h4>
        <?= $this->Text->autoParagraph(h($funcionario->observacao)); ?>
    </div>
</div>
