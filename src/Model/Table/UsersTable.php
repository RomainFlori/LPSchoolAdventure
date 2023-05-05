<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config) : void
    {
        parent::initialize($config);

        $this->setTable('Users');
        $this->setDisplayField('email');
        $this->setPrimaryKey('id');
    }



    public function buildRules(RulesChecker $rules) : RulesChecker
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}