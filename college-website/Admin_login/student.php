<html>
<head>
    <title>STUDENT DETAILS</title>
    <style>
        .table-faculty{
            border-collapse: collapse;
        }
        td, th{
            padding: 4px 8px;
        }
        table{
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <h3>ABOVE DETAILS OF ALL THE STUDENTS</h3>

    <table border="2" bordercolor="Black" class="table-faculty">
        <thead>
            <tr>
            
				<th>ID</th>
                <th>Enrollnment no.</th>
                <th>Name</th>
                <th>Semester</th>
				<th>Gender</th>
				<th>Department</th>
				<th>Backlogs</th>
				<th>DOB</th>
				<th>Address</th>
				<th>City</th>
				<th>State</th>
				<th>Pincode</th>
				<th>Phone no.</th>
				<th>Email</th>
            </tr>
        </thead>
        <body>
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"college");

                $query = mysqli_query($connection,"SELECT id,Username,Name,sem,gender,dept,back,dob,address,city,state,pincode,phone_no,mail_id FROM student");

                if (mysqli_num_rows($query)==0)
                {
                    echo "<tr>
                            <td colspan='4'> No rows returned </td> 
                        </tr>";
                }
                else
                {
                    while($row=mysqli_fetch_row($query))
                    {
                        echo "<tr>
                                <td> $row[0] </td> 
                                <td> $row[1] </td>
                                <td> $row[2] </td> 
                                <td> $row[3] </td>
                                <td> $row[4] </td>
                                <td> $row[5] </td>
                                <td> $row[6] </td>
                                <td> $row[7] </td>
                                <td> $row[8] </td>
                                <td> $row[9] </td>
                                <td> $row[10] </td>
                                <td> $row[11] </td>
                                <td> $row[12] </td> 
                                <td> $row[13] </td>
                                
                                
    
                            </tr> ";
                    }
                }
            ?>
        </tbody>
    </table>

</body>
</html>