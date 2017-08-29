<?php
	mysql_connect("localhost","root","1") or die("conn fail");
	mysql_select_db("mylx");
	mysql_query("set names 'UTF8'");  
	if($_GET["all"]){    //导入数据
		$data=mysql_query("select * from user1");
		$users=array();
	    while ($row=mysql_fetch_row($data)) {
	    	$users[] = $row;
	    }
	    echo json_encode($users);
	}
	if($_GET["id"]){    //删除数据
		$_id=$_GET["id"];
		mysql_query("delete from user1 where id='$_id'");
		echo 1;
	}
	if($_GET["sUsername"]){
		$_sUsername=$_GET["sUsername"];
		$_sCredit=$_GET["sCredit"];
		$_sTel=$_GET["sTel"];
		$_sEmail=$_GET["sEmail"];
		$_sDepartment=$_GET["sDepartment"];
		mysql_query("insert into user1 (username,creditNum,tel,email,department) values('$_sUsername','$_sCredit','$_sTel','$_sEmail','$_sDepartment')");
		echo 1;
	}
	// if($_GET["querryUsername"]){      //查询数据
	// 	$querryUsername=$_GET["querryUsername"];
	// 	$querrydata=mysql_query("select * from user1 where username='$querryUsername'");
	// 	$querryusers=array();
	// 	while($row=mysql_fetch_row($querrydata)){
	// 		$querryusers[]=$row;
	// 	}
	// 	echo json_encode($querryusers);
	// }
	if($_GET["uUsername"]){
		$uUsername=$_GET["uUsername"];
		$uCredit=$_GET["updateCredit"];
		$uTel=$_GET["updateTel"];
		$uEmail=$_GET["updateEmail"];
		$uDepartment=$_GET["updateDepartment"];
		mysql_query("update user1 set ")
	}
?>