
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h2>List of clients</h2>
        <a class="btn btn-primary" href="./create.php" role="button">New Clients</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Create At</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once 'connection.php';
                    
                    //read all row from database table
                    $sql = "SELECT * FROM clients";
                   
                    $result = $connection->query($sql);
                    
                    if(!$result) {
                        die("Invalid query :" . $connection->error);
                    }
                   

                    //read data of each row
                    while($row = $result->fetch_assoc()) {
                        echo"
                            <tr>
                                <td>$row[id]</td>
                                <td>$row[name]</td>
                                <td>$row[email]</td>
                                <td>$row[phone]</td>
                                <td>$row[address]</td>
                                <td>$row[create_at]</td>
                                <td>
                                    <a class='btn btn-primary btn-sm' href='edit.php?id=$row[id]'>Edit</a>
                                    <a class='btn btn-danger btn-sm' href='delete.php?id=$row[id]'>Delete</a>
                                </td>
                            </tr>
                        ";
                    }
                ?>
                
            </tbody>
        </table>
    </div>
</body>

</html>