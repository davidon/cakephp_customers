<?php
declare(strict_types = 1);

namespace App\Controller;

use App\Service\Customers as CustomersService;
use Cake\I18n\Date;

class CustomersController extends AppController
{
    /**
     * @throws \Exception
     */
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
        $this->loadComponent('Paginator');
    }

    public function index()
    {
        //???(new CustomersService())->getCustomers())]
        $customers = $this->Paginator->paginate($this->Customers->find());
        $this->set(compact('customers'));
    }

    public function view($email = null)
    {
        $customer = $this->Customers->findByEmail($email)->firstOrFail();
        $this->set(compact('customer'));
    }

    public function add()
    {
        $customer = $this->Customers->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['joined_date'] = new Date('now');
            $customer = $this->Customers->patchEntity($customer, $data);

            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('New customer has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add new customer.'));
        }
        $this->set('customer', $customer);
    }

    public function edit($email)
    {
        $customer = $this->Customers->findByEmail($email)->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Customers->patchEntity($customer, $this->request->getData());
            if ($this->Customers->save($customer)) {
                $this->Flash->success(__('Customer has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update customer.'));
        }

        $this->set('customer', $customer);
    }
    
    public function delete($email)
    {
        $this->request->allowMethod(['post', 'delete']);

        $customer = $this->Customers->findByEmail($email)->firstOrFail();
        if ($this->Customers->delete($customer)) {
            $this->Flash->success(__('The customer {0} has been deleted.', $customer->fullname));
            return $this->redirect(['action' => 'index']);
        }
    }
}