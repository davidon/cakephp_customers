<?php
declare(strict_types = 1);

namespace App\Model\Entity;
use Cake\ORM\Entity;

/**
 * Class Customer
 *
 * @property int $id;
 * @property string $firstname;
 * @property string $surname;
 * @property string $gender;
 * @property string $email;
 * @property string $joined_date;
 */
class Customer extends Entity
{
}