<html>
<head>
<title>My Flipkart</title>
</head>

<body>
<h1>Welcome to my Flipkart</h1>
<ul>
<?php
$json = file_get_contents('http://product-service/');
$obj = json_decode($json);
$products = $obj->products;
foreach ($products as $product) {
echo "<li>$product</li>";
}
?>
</ul>

</body>
</html>
