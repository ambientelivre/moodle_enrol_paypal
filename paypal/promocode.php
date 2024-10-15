<?php
function valid_promo_code($promo_code, $instance_promocode, $cost)
{
    if (!$instance_promocode) {
        return false;
    }
    $promo_codes_and_discounts = explode("\n", $instance_promocode);

    foreach ($promo_codes_and_discounts as $promo_code_and_discount) {
        list($promo_code_coupon, $promo_code_discount) = explode('|', trim($promo_code_and_discount));
        $promo_code_discount = trim($promo_code_discount, "%");

        if ($promo_code_coupon == $promo_code) {
            $new_price = $cost - ($cost * ($promo_code_discount / 100));
            return ['new_price' => $new_price, 'discount' => $promo_code_discount];
        }
    }
    return false;
}

if (isset($_POST["promo_code"]) && isset($_POST["instanceid"])) {
    $promo_code = $_POST["promo_code"];
    $instanceid = $_POST["instanceid"];

    require("../../config.php");

    $plugin_instance = $DB->get_record("enrol", array("id" => $instanceid, "enrol" => "paypal", "status" => 0), "*", MUST_EXIST);
    $instance_promocode = $plugin_instance->customchar1;
    $cost = $plugin_instance->cost;

    $result = valid_promo_code($promo_code, $instance_promocode, $cost);

    if ($result) {
        echo json_encode([
            'new_price' => number_format($result['new_price'], 2, ",", ""),
            'amount' => $result['new_price'],
            'discount' => $result['discount']
        ]);
    } else {
        echo json_encode(
            []
        );
    }
}
