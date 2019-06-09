<div class="users index large-9 medium-8 columns content">
    <h1>Customers</h1>
    <?= $this->Html->link('Add Article', ['action' => 'add']) ?>
    <table>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('firstname', 'Full name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('email') ?></th>
            <th scope="col"><?= $this->Paginator->sort('joined_date') ?></th>
        </tr>

        <?php
        /**
         * @var \Traversable $customers
         * @var \App\Model\Entity\Customer $customer
         */
        foreach ($customers as $customer): ?>
            <tr>
                <td>
                    <?= $this->Html->link(h($customer->fullname), ['action' => 'view', $customer->email]) ?>
                </td>
                <td>
                    <?= h($customer->email) ?>
                </td>
                <td>
                    <?= $customer->joined_date->format('Y-m-d') ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>