    <?php

    // Set variables for our request
    $shop = $_GET['shop'];
    $api_key = "ec4527b104ee0047bcd04cedd32a3619";
    $scopes = "read_orders,write_products";
    $redirect_uri = "https://bahlulshopify.managedcoder.com/apps/generate_token.php";

    // Build install/approval URL to redirect to
    $install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

    // Redirect
    header("Location: " . $install_url);
    die();