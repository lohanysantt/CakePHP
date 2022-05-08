<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;


class Funcionario extends Entity
{
    
    public $_accessible = [
        'nome' => true,
        'dt_nascimento' => true,
        'sexo' => true,
        'observacao' => true,
        'uf' => true,
    ];
}
