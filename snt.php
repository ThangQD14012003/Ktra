<?php
//     function isPrime($n) {
//         if ($n <= 1) {
//             return false;
//         }
//         for($i = 2; $i <= sqrt($n); $i++){
//         if($n % $i == 0){
//             return false;
//         }
//     }
//     return true;
// }
// echo "Các cố nguyên tố từ 1 đến 100 là: ";
// for($i = 1; $i <= 100; $i++){
//     $check = isPrime($i);
//     if($check == true){
//         echo $i." ";
//     }
// }
$products = array(
    'Product1' => array(
        'name' => 'Laptop',
        'price' => 10000,
        'quantity' => 3
    ),
    'Product2' => array(
        'name' => 'Smartphone',
        'price' => 2300,
        'quantity' => 8
    ),
    'Product3' => array(
        'name' => 'Tablet',
        'price' => 3000,
        'quantity' => 10
    )
);
echo "Thông tin của tất cả sản phẩm:"."<br>";
foreach ($products as $key => $product) {
    echo $key."<br>";
    echo "Name: " . $product['name'] . "<br>";
    echo "Price: $" . $product['price'] . "<br>";
    echo "Quantity: " . $product['quantity'] . "<br>";
    echo "-----------------"."<br>";
}
function calculateTotalValue($products) {
    $totalValue = 0;
    foreach ($products as $product) {
        $totalValue += $product['price'] * $product['quantity'];
    }
    return $totalValue;
}
echo "Tổng giá trị của tất cả sản phẩm: $" . calculateTotalValue($products);

?>