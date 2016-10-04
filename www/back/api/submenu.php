<?php
if($_REQUEST['submenu']=='hpl') : 
	$data['header'] = array("nama"=>"HPL PRODUCTS","img"=>"assets/image/winston_ic.png");
	$data['list'][] = array("id"=>"1","nama"=>"WINSTON HPL","img"=>"assets/image/winston_small_ic.png");
	$data['list'][] = array("id"=>"2","nama"=>"BEST HPL","img"=>"assets/image/best_small_ic.png");
endif;

echo json_encode($data);
?>