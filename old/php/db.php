<?php

function query($query) {
	#$usr = "root";
	#$pwd = "";
	$usr = "shinzon";
	$pwd = "whorebiscuit";
	$db = "nemesis";
	$host = "localhost";

	$cid = mysql_connect($host,$usr,$pwd);
	if (!$cid) { echo("ERROR: " . mysql_error() . "\n"); }

	$SQL = $query;
	$retid = mysql_db_query($db, $SQL, $cid);
	if (!$retid) { echo( mysql_error()); }
	return $retid;
}

function insert($name,$image){
	//$name = str_replace("'","\'",$name);
	//$image= str_replace("'","\'",$image);
	$SQL="insert into players values(0,'$name','$image',0,0)";
	return query($SQL);
	
}

function getMaxId(){
	$SQL = "select max(id) as id from dict";
	$retid = query($SQL);
	$row = mysql_fetch_array($retid);
	return $row[0];
	
}

function getRowById($table,$id){
	$SQL = "select * from $table where id = $id";
	$retid = query($SQL);
	$row = mysql_fetch_array($retid);
	return $row;
}

function getWord($id){
	$row = getRowById("dict",$id);
	return $row['word'];
}

	
?>

