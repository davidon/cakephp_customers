<h1>Edit Customer</h1>
<?php
/** @var \App\Model\Entity\Customer $customer */
echo $this->Form->create($customer);
echo $this->Form->control('firstname');
echo $this->Form->control('surname');
echo $this->Form->control('email');
echo $this->Form->label('gender');
echo $this->Form->select(
    'gender',
    ['male' => 'male', 'female' => 'female'],
    [
        'multiple' => false,
        'empty' => '- choose -',
        'value' => strtolower($customer->gender)
    ]
);
echo $this->Form->button(__('Save Customer'));
echo $this->Form->end();
?>