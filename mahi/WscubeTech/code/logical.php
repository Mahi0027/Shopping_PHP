<?php
error_reporting(0);
mysql_connect('localhost', 'root','');
mysql_select_db('web1_db');
$cno=$_POST["cno"];
$cname=$_POST["cname"];

if($_REQUEST['page']=="country")
{	
	if($_REQUEST['action']=="insert")
	{	
		if($_POST['id']=="") 
		{
			if($_POST['cno']!="" && $_POST['cname']!="")
			{
				$ins="insert into country set cno = '".$_POST['cno']."', cname= 	'".$_POST['cname']."' ";
				mysql_query($ins);
			}
		}
		else 
		{
			$upd="update country set cno = '".$_POST['cno']."', cname= 	'".$_POST['cname']."' where cid= '".$_POST['id']."' ";
			mysql_query($upd);	
		}	
	}

	if($_REQUEST['action']=="delete")
	{	
		
			$del="delete from country where cid = '".$_GET['delid']."' ";
			mysql_query($del);
	}


	if($_REQUEST['action']=="muldelete")
	{
			$var = $_POST['charray'];
			$imp=implode(',', $var);
			$muldel="delete from country where cid in ($imp)";
			mysql_query($muldel);
	}

	if($_REQUEST['action']=="update")
	{
		$upd="update country set cno = '".$_GET['cno']."', cname = '".$_GET['cname']."' where cid= '".$_GET['editid']."' ";
		mysql_query($upd);
	}

	if ($_REQUEST['action']=="searching") 
	{
		$search="where cname like '".$_POST['cname']."%' ";
	}
if ($_REQUEST['action']=="pagging") 
	{
		$new=$_REQUEST['nnumber']*2;

		$paggindata="limit $new,2";
	}



include "select.php";	
}


if($_REQUEST['page']=="state")
{
	if($_REQUEST['action']=="insert")
	{
		if($_POST['sid']=="") 
		{
			if($_POST['sname']!="" && $_POST['scountry']!="")
			{		
				$ins="insert into state set sname = '".$_POST['sname']."', scountry = '".$_POST['scountry']."' ";
				mysql_query($ins);
			}
		}
		else
		{
			$upd="update state set sname= '".$_POST['sname']."', scountry= '".$_POST['scountry']."' where sid= '".$_POST['sid']."' ";
			mysql_query($upd);	
		}	
	}


	if ($_REQUEST['action']=="delete") 
	{
		$del="delete from state where sid = '".$_GET['delid']."' ";
		mysql_query($del);
	}


	if($_REQUEST['action']=="muldelete")
	{
			$var = $_POST['charray'];
			$imp=implode(',', $var);
			$muldel="delete from state where sid in ($imp)";
			mysql_query($muldel);
	}

	if ($_REQUEST['action']=="searching") 
	{
			$where= "where sname like  '".$_POST['sname']."%' ";
	}


include "stselect.php";



}

?>