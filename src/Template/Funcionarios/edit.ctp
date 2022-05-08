<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $funcionario->id],
                ['confirm' => __('Certeza que deseja excluir?', $funcionario->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista dos Funcionarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="funcionarios form large-9 medium-8 columns content">
    <?= $this->Form->create($funcionario) ?>
    <fieldset>
        <legend><?= __('Edit Funcionario') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('dt_nascimento', ['label'=>'Data do seu nascimento', 
            'minYear' => date('Y') - 70,
            'maxYear' => date('Y') - 18,
            'type' => 'date','empty' => true]);
            echo $this->Form->input('sexo', array('type' => 'radio','label' => false,'hiddenField' => false, 'options' => array('M' => 'Masculino')));
            echo $this->Form->input('sexo', array('type' => 'radio','label' => false,'hiddenField' => false,'options' => array('F' => 'Feminino')));
            echo $this->Form->control('observacao');
            echo $this->Form->input('uf', array('type' => 'select', 'options' => array('AC' => 'AC', 
            'AL' => 'AL',
            'AM' => 'AM',
            'AP'=>'AP',
            'BA'=>'BA',
            'CE'=>'CE',
            'DF'=>'DF',
            'ES'=>'ES',
            'GO'=>'GO',
            'MA'=>'MA',
            'MG'=>'MG',
            'MS'=>'MS',
            'MT'=>'MT',
            'PA'=>'PA',
            'PB'=>'PB',
            'PE'=>'PE',
            'PI'=>'PI',
            'PR'=>'PR',
            'RJ'=>'RJ',
            'RN'=>'RN',
            'RS'=>'RS',
            'RO'=>'RO',
            'RR'=>'RR',
            'SC'=>'SC',
            'SE'=>'SE',
            'SP'=>'SP',
            'TO'=>'TO')));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
