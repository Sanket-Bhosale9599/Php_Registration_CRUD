<html>

<head>
    <ttile>list of users</ttile>
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        body {
            font-family: Arial, sans-serif;
        }

        table {
            animation: fadeIn 1s ease-out;
            width: 100%;
            border: 5px solid solid-white
        }

        .table-container {

            justify-content: center;
        }

        th,
        td {
            background-color: grey;
            border: 2px solid white;
            padding: 10px;
            text-align: center;
            font-weight: bold;
        }

        th {
            background-color: red;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #444;

        }

        tr:hover {
            background-color: palegreen;
        }
    </style>
</head>


<body background="Capture1.PNG">
    <div class="table-container">
        <table style="border: solid-white" mt>
            <tr>
                <th>Id</th>
                <th>UserName</th>
                <th>userPassword</th>
                <th>userEmail</th>
                <th>userAddress</th>
                <th>Action</th>
            </tr>

            <?php
            require 'database.php';
            $sql = "select * from user";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

                    echo "<tr>";
                    echo "<td>" . $row['Id'] . "</td><td>" . $row['userName'] . "</td><td>" . $row['userPassword'] . "</td><td>" . $row['userEmail'] . "</td><td>" . $row['userAddress'] . "</td>";
                    echo "<td><a href='edit.php?Id=$row[Id]'> edit</a><span>   </span><a href='delete.php?Id=$row[Id]'>Delete</a></td>";
                    echo "</tr>";

                }
            } else {
                echo "failed to load";
            }

            ?>

        </table>
    </div>
</body>

</html>