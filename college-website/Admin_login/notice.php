<html>
<head>
    <title>NOTICE DETAILS</title>

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

    <h3>ABOVE DETAILS OF ALL THE NOTICE_BOARD</h3>

    <table border="2" bordercolor="Black" class="table-faculty">
        <thead>
            <tr>
            
				<th>ID</th>
                <th>Notice</th>
                
            </tr>
        </thead>
        <body>
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"college");

                $query = mysqli_query($connection,"SELECT * FROM notice_board");

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
                                
                                
                                
    
                            </tr> ";
                    }
                }
            ?>
        </tbody>
    </table>

</body>
</html>