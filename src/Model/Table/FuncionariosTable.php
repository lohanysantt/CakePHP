<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class FuncionariosTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('funcionarios');
        $this->setDisplayField('id', 'sexo', 'dt_nascimento', 'uf');
        
        $this->setPrimaryKey('id');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 50)
            ->notEmptyString('nome');

        $validator
            ->date('dt_nascimento')
            ->allowEmptyDate('dt_nascimento');

        $validator
            ->scalar('sexo')
            ->maxLength('sexo', 1)
            ->notEmptyString('sexo');

        $validator
            ->scalar('observacao')
            ->allowEmptyString('observacao');

        $validator
            ->scalar('uf')
            ->maxLength('uf', 2)
            ->allowEmptyString('uf');

        return $validator;
    }
}
