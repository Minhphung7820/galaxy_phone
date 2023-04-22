<?php
include_once "../../../../../model/admin.php";
$janRevenue = revenue(1) ?? 0;
$febRevenue = revenue(2) ?? 0;
$marRevenue = revenue(3) ?? 0;
$aprRevenue = revenue(4) ?? 0;
$mayRevenue = revenue(5) ?? 0;
$junRevenue = revenue(6) ?? 0;
$julRevenue = revenue(7) ?? 0;
$augRevenue = revenue(8) ?? 0;
$sepRevenue = revenue(9) ?? 0;
$octRevenue = revenue(10) ?? 0;
$novRevenue = revenue(11) ?? 0;
$decRevenue = revenue(12) ?? 0;
$value = [$janRevenue, $febRevenue , $marRevenue , $aprRevenue , $mayRevenue , $junRevenue , $julRevenue , $augRevenue , $sepRevenue , $octRevenue , $novRevenue , $decRevenue ];
$output = json_encode($value);
echo $output;
?>