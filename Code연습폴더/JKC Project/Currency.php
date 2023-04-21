<?php

function convertCurrency($amount){
    $data = $amount*54.40;
    return number_format(round($data, 2) ,2);
}

add_filter( 'woocommerce_get_price_html', 'my_custom_price_format', 10, 2 );
function my_custom_price_format( $price, $product) {

    $newprice = $product->price;
    ## Euros
    $price_eur = convertCurrency($newprice, 'HRK','EUR');
    $formatted_price_eur = "<br><span class='price-eur'> &euro;$price_eur</span>";

    ## HRK (formatted price)
    $formatted_price = '<br>'.$price .'';

    // Return the 2 formatted currencies
    return $formatted_price . $formatted_price_eur ;
}