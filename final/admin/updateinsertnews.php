<?php
include 'member.php';
// Show MyGuests Data

require 'dbcon.php';

// define variables and set to empty values

$newsautor = "";
$newsdate = "";
$newsimage = "";
$newsdetails = "";
$newsheadline = "";
$id = "";
$id = $_POST['id'];
$newsheadline = $_POST['hl'];
$newsdetails = $_POST['de'];
$newsimage = $_POST['im'];
$newsdate = $_POST['da'];
$newsautor = $_POST['au'];
echo $id;
echo "<BR>";
echo $newsheadline;
echo "<BR>";
echo $newsdetails;
echo "<BR>";
echo $newsimage;
echo "<BR>";
echo $newsdate;
echo "<BR>";
echo $newsautor;


$sql = "update tblnews set catname='$newsheadline' Where newsid=$id";
$conn->query($sql);

$conn->close();


header('Location: displaynews.php');

?>