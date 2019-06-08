<?php
declare(strict_types = 1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CustomersTable extends Table
{
    /**
     * Default validation rules.
     *
     * @param Validator $validator Validator instance.
     * @return Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('firstname', 'create')
            ->allowEmptyString('firstname', false);
        $validator
            ->requirePresence('surname', 'create')
            ->allowEmptyString('surname', false);
        $validator
            ->requirePresence('email', 'create')
            ->email('email');
        $validator
            ->requirePresence('gender', 'create')
            ->allowEmptyString('gender', false);
        $validator
            ->add('joined_date', 'valid', ['rule' => 'datetime'])
            ->allowEmptyDate('joined_date', false);
        return $validator;
    }

    /**
     * Wrapper for all validation rules for register
     * @param Validator $validator Cake validator object.
     *
     * @return Validator
     */
    public function validationRegister(Validator $validator)
    {
        $validator = $this->validationDefault($validator);
        return $validator;
    }
}