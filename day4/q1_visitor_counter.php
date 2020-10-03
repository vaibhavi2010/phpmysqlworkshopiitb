<form action="q1.php" method='POST'>
<h3>Enter Your Details</h3>
Name of Student: <input type='text' name='name' ><br/><br>

<legend>Marks in each Subject (out of 100)</legend><br>
Subject 1: <input type='number' name='m1' ><br/><br>
Subject 2: <input type='number' name='m2' ><br /><br>
Subject 3: <input type='number' name='m3' ><br /><br>
Subject 4: <input type='number' name='m4' ><br /><br>
Subject 5: <input type='number' name='m5' ><br /><br>
<input type='submit' value='submit'/>
</form>

<?php

require("connect.php");
//grab POST data
@$name = $_POST['name'];
@$sub1 =$_POST['m1'];
@$sub2 =$_POST['m2'];
@$sub3 =$_POST['m3'];
@$sub4 =$_POST['m4'];
@$sub5 =$_POST['m5'];

$total_obtain = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
$percent = (float)($total_obtain/500)*100;
if($name && $sub1 && $sub2 && $sub3 && $sub4 && $sub5){
    echo "
    <h3>Report</h3>
    <label>Student Name:</labe>$name<br>
    <label>Subject 1: </label>$sub1<br>
    <label>Subject 2: </label>$sub2<br>
    <label>Subject 3: </label>$sub3<br>
    <label>Subject 4: </label>$sub4<br>
    <label>Subject 5: </label>$sub5<br>
    <label>Total Marks Obtained:</label>$total_obtain<br>
    <label>Total Marks: </label>500<br>
    <label>Percentage: </label>$percent%<br>";
    $write = "INSERT INTO class1 VALUES('', '$name', '$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$total_obtain', '500', '$percent')";
    if ($conn->query($write) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $write . "<br>" . $conn->error;
    }
}

$file =file_get_contents("count.txt");
$vistors=$file;
$visitorsnew=$vistors+1;
$filenew=fopen("count.txt","w");
fwrite($filenew,$visitorsnew);
echo "You've had $visitorsnew vistors ";

$connect->close();
?>