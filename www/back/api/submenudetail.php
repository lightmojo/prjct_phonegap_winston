<?php
if($_REQUEST['submenu']=='winston') : 
	if($_REQUEST['subsubmenu']=='')
	$data['header'] = array("nama"=>"WINSTON PRODUCTS","img"=>"assets/image/winston_ic.png");
	$data['list'][] = array("id"=>"1","kode"=>"5606AL","nama"=>"DOT ALUMUNIUM","img"=>"assets/image/winston_small_ic.png");
	$data['list'][] = array("id"=>"2","kode"=>"5606AL","nama"=>"DOT ALUMUNIUM","img"=>"assets/image/winston_small_ic.png");
	$data['list'][] = array("id"=>"3","kode"=>"5606AL","nama"=>"DOT ALUMUNIUM","img"=>"assets/image/winston_small_ic.png");
	$data['list'][] = array("id"=>"4","kode"=>"5606AL","nama"=>"DOT ALUMUNIUM","img"=>"assets/image/winston_small_ic.png");
	$data['list'][] = array("id"=>"5","kode"=>"5606AL","nama"=>"DOT ALUMUNIUM","img"=>"assets/image/winston_small_ic.png");
	$data['list'][] = array("id"=>"6","kode"=>"5606AL","nama"=>"DOT ALUMUNIUM","img"=>"assets/image/winston_small_ic.png");
	$data['list'][] = array("id"=>"7","kode"=>"5606AL","nama"=>"DOT ALUMUNIUM","img"=>"assets/image/winston_small_ic.png");
	$data['list'][] = array("id"=>"8","kode"=>"5606AL","nama"=>"DOT ALUMUNIUM","img"=>"assets/image/winston_small_ic.png");
	$data['list'][] = array("id"=>"9","kode"=>"5606AL","nama"=>"DOT ALUMUNIUM","img"=>"assets/image/winston_small_ic.png");
endif;

echo json_encode($data);
?>