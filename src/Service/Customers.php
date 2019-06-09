<?php
declare(strict_types = 1);

namespace App\Service;

use Cake\ORM\TableRegistry;

class Customers
{
    public function getCustomers(): array
    {
        $customers = TableRegistry::getTableLocator()->get('Customers');
        $query = $customers->find();
        /** @var \App\Model\Entity\Customer $row */
        foreach ($query as $row) {
            // Each row is now an instance of our Customer class.
            $data[$row->id] = [
                'fullname' => $row->fullname,
                'surname' => $row->surname,
                'email' => $row->email,
                'gender' => $row->gender,
                'joined_date' => $row->joined_date
            ];
        }

        return $data;
    }
}