<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class SubscriptionsTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('Subscriptions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('subscriptionsTypes', [
            'foreignKey' => 'type',
            'joinType' => 'INNER'
        ]);
    }
}