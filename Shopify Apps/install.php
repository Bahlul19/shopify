    <?php

    // Set variables for our request
    $shop = $_GET['shop'];
    $api_key = "dd351ab1814cec97dcb5e8d919887c2a";
    $scopes = "read_orders,write_products";
    $redirect_uri = "https://dd351ab1814cec97dcb5e8d919887c2a:abb65451f1f5c828011242c806971e2b@bahlultechstore.myshopify.com/admin/api/2020-01/orders.json/generate_token.php";

    // Build install/approval URL to redirect to
    $install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

    // Redirect
    header("Location: " . $install_url);
    die();