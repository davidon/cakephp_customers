<?php
use App\Service\Customers as CustomersService;

$this->layout = false;
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <title>
        Cake for Customers
    </title>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>
</head>
<body class="home">

<header class="row">
    <div class="header-title">
        <h1>Customers information.</h1>
    </div>
</header>

<?php
$customers = (new CustomersService())->getCustomers();
foreach ($customers as $customer) {
    echo "<div class='row'>";
    echo "<div><span>first name:</span><span>" . $customer['firstname'] . '</span></div>';
    echo "<div><span>email:</span><span>" . $customer['email'] . '</span></div>';
    echo "</div>";
}
?>
</body>
</html>
