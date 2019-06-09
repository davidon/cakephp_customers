<?php
declare(strict_types = 1);

namespace App\Controller;

use App\Service\Customers as CustomersService;

class CustomersController extends AppController
{
    public $paginate = [
        'limit' => 25,
        'order' => [
            'Customer.firstname' => 'asc'
        ]
    ];

    /**
     * @throws \Exception
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        //???(new CustomersService())->getCustomers())]
        $this->loadComponent('Paginator');
        $customers = $this->Paginator->paginate($this->Customers->find());
        $this->set(compact('customers'));

    }
}