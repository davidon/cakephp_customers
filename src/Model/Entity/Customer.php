<?php
declare(strict_types = 1);

namespace App\Model\Entity;

use Cake\Chronos\Date;
use Cake\ORM\Entity;

/**
 * Class Customer
 * Customer entity
 *
 * @property int $id;
 * @property string $firstname;
 * @property string $surname;
 * @property string $fullname;
 * @property string $gender;
 * @property string $email;
 * @property Date $joined_date;
 */
class Customer extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

    /**
     * Get customer full name.
     *
     * @return string
     */
    public function _getFullname(): string
    {
        return "{$this->firstname} {$this->surname}";
    }
}