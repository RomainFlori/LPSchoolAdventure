<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class SubscriptionsTypesTable extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable('subscriptions_types');

        $this->hasMany('subscriptions', [
            'className' => 'Subscriptions',
        ]);
    }
}