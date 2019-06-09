<h1>Customer Details</h1>
<?php /** @var \App\Model\Entity\Customer $customer*/ ?>
<p>First name: <?= $customer->firstname ?></p>
<p>Surname: <?= $customer->surname ?></p>
<p>Gender: <?= $customer->gender ?></p>
<p>Joined Date: <?= $customer->joined_date->format('Y-m-d') ?></p>
<p>Email: <?= $customer->email ?></p>
<p></p><?= $this->Html->link('Edit', ['action' => 'edit', $customer->email]) ?>
&nbsp;
<?= $this->Form->postLink(
    'Delete',
    ['action' => 'delete', $customer->email],
    ['confirm' => 'Are you sure?'])
?>
