<h1>Add Customer</h1>
<?php
echo $this->Form->create($customer);
echo $this->Form->control('firstname');
echo $this->Form->control('surname');
echo $this->Form->control('email');
echo $this->Form->label('gender');
echo $this->Form->select(
    'gender',
    ['male', 'female'],
    [
        'multiple' => false,
        'empty' => '- choose -',
    ]
);
echo $this->Form->button(__('Save Customer'));
echo $this->Form->end();
?>