<?php
include 'member.php';
// Show MyGuests Data

require 'dbcon.php';

// define variables and set to empty values
$id = "";

$id = $_GET['nid'];
$sql = "SELECT * FROM  tblnews where newsid=$id";
$result = $conn->query($sql);
$conn->query($sql);
$row = $result->fetch_assoc();

echo "<Center>";
echo "<H1> Update News Data </H1>";
echo "<Form action=updateinsertnews.php method=post>";
echo "<input type=hidden name=id value=$id>";

echo "<H3> Headline <Input type=text name=hl value=". $row['newsheadline'] ."> <Br>";
echo "<H3> Author <Input type=text name=au value=". $row['newsautor'] ."> <Br>";
echo "<H3> Date <Input type=date name=da value=". $row['newsdate'] ."> <Br>";
echo "<H3> Image <Input type=text name=im value=". $row['newsimage'] ."> <Br>";
echo "<H3> Details <Textarea cols=50 rows=15 name=de value=". $row['newsdetails'] ."> </Textarea> <Br>";
echo "<Input type=submit value=Submit>";
echo "</Form>";
echo "</Center>";

$conn->close();

?>