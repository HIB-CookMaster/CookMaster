<?php

session_start();

$path = $_SERVER['PHP_SELF'];

$filename = basename($path, ".php");

function check ($filename, $page) {
    if ($filename == $page) {
        echo "bg-dark-blue text-light";
    }
}

$navArray = [
    "dashboard" => "Dashboard",//fa-user
    "orders" => "Orders",//fa-shopping-cart
    "address" => "Address",//fa-map-marker-alt
    "subscriptions" => "Subscription",//fa-credit-card
    "account-details" => "Account Details",//fa-user-cog
    "logout" => "Logout"//fa-sign-out-alt
];

$iconArray = [
    "dashboard" => "fa-user",
    "orders" => "fa-shopping-cart",
    "address" => "fa-map-marker-alt",
    "subscriptions" => "fa-credit-card",
    "account-details" => "fa-user-cog",
    "logout" => "fa-sign-out-alt"
]

?>



<ul class="list-group rounded-0 p-3">
    <?php foreach($navArray as $key => $value){ ?>

        <li class="list-group-item py-3 pointer d-flex justify-content-between <?php check($filename, $key) ?>" onclick="redirect('<?php echo $key; ?>')">
            <?php echo $value; ?> <i class="fa-solid <?php echo $iconArray[$key] ?>"></i> </li>

    <?php } ?>
</ul>



<script>
    function redirect(pageName) {
        window.location.href = pageName + ".php";
    }
</script>