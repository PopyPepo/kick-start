<?php 
function countDashboard($conn){
	$json = array('sum_price'=>0,'num_course'=>0,'num_member'=>0,'num_register'=>0);

	$sql = "SELECT SUM(pay_price) AS sum_price FROM app_member WHERE pay_status=3 AND (pay_slip IS NOT NULL) AND member_active=1";
	$query = $conn->query($sql);
	$instance = $query->fetch(PDO::FETCH_ASSOC);
	$json['sum_price'] = floatval($instance['sum_price']);

	$sql = "SELECT count(idcourse) AS num_course FROM app_course WHERE active>0";
	$query = $conn->query($sql);
	$instance = $query->fetch(PDO::FETCH_ASSOC);
	$json['num_course'] = floatval($instance['num_course']);

// 	$sql = "SELECT count(idmember) AS num_member FROM app_member WHERE pay_status>=1 AND member_active=1 GROUP BY idcard";
	$sql = "SELECT count(idmember) AS num_member FROM app_member WHERE member_active=1";
	$query = $conn->query($sql);
	$instance = $query->fetch(PDO::FETCH_ASSOC);
	$json['num_member'] = floatval($instance['num_member']);


	$sql = "SELECT count(idregister) AS num_register FROM app_register WHERE reg_status=1 AND reg_active=1";
	$query = $conn->query($sql);
	$instance = $query->fetch(PDO::FETCH_ASSOC);
	$json['num_register'] = floatval($instance['num_register']);

	return $json;
}

?>