<html>
<head><title>Akor Uji Lab Test</title>
</head>
<body>
<?php
//create new connection
$con=mysqli_connect("localhost","root","","employees");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"select * from employees inner join dept_emp on dept_emp.emp_no = employees.emp_no where dept_no='d004'");

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['emp_no'] . "</td>";
echo "<td>" . $row['birth_date'] . "</td>";
echo "<td>" . $row['first_name'] . "</td>";
echo "<td>" . $row['last_name'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['hire_date'] . "</td>";
echo "<td>" . $row['emp_no'] . "</td>";
echo "<td>" . $row['dept_no'] . "</td>";
echo "</tr>";
}

echo "<table border='1'>
<tr>
<th>Employee No</th>
<th>Birth Date</th>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Hire Date</th>
<th>Employee No</th>
<th>Department No</th>
</tr>";
echo "</table>";

mysqli_close($con);
?>