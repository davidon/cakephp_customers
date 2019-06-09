<h1>Customers</h1>
<?= $this->Html->link('Add Article', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Joined Date</th>
    </tr>

    <?php
    /**
     * @var \Traversable $customers
     * @var \App\Model\Entity\Customer $customer
     */
    foreach ($customers as $customer): ?>
        <tr>
            <td>
                <?= $this->Html->link($customer->fullname, ['action' => 'view', $customer->email]) ?>
            </td>
            <td>
                <?= $customer->email ?>
            </td>
            <td>
                <?= $customer->joined_date->format('Y-m-d') ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>