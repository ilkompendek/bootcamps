<?php
$db_host = 'localhost'; // Nama Server
$db_user = 'root'; // User Server
$db_pass = ''; // Password Server
$db_name = 'gudang'; // Nama Database

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <title>Inventory</title>
</head>

<body>
    <h1>GUDANG</h1>
    <div id="tables">
        <div class="card">
            <h3>Catagories</h3>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Catagories Name</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
					$sql = 'SELECT * FROM catagories';
					$query = mysqli_query($conn, $sql);
					if (!$query) { die ('SQL Error: ' . mysqli_error($conn));}
					$no = 1;
					while ($row = mysqli_fetch_array($query)){?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['name']?></td>
                    </tr>
                    <?php $no++;}?>
                </tbody>
            </table>
            <hr>
            <h4>Add Catagory </h4>
            <div>
                <div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">ID Catagories</span>
                        </div>
                        <input type="text" class="form-control" length="50">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Catagories Name</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <button type="submit" class="btn btn-info" value="Add">Add</button>

                </div>
            </div>
        </div>
        <div class="card">
            <h3>Products</h3>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Catagory ID</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
					$sql = 'SELECT * FROM products';
					$query = mysqli_query($conn, $sql);
					if (!$query) { die ('SQL Error: ' . mysqli_error($conn));}
					$no = 1;
					while ($row = mysqli_fetch_array($query)){?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['catagory_id']?></td>
                    </tr>
                    <?php $no++;}?>
                </tbody>
            </table>
            <hr>
            <h4>Add Product </h4>
            <div>
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"> Product ID</span>
                        </div>
                        <input type="text" class="form-control" length="50" id="product_ID">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Product Name's</span>
                        </div>
                        <input type="text" class="form-control" id="productname">
                    </div>
                    <div class="input-group mb-3">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Catagory
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php 
					            $sql = 'SELECT * FROM catagories';
					            $query = mysqli_query($conn, $sql);
					            if (!$query) { die ('SQL Error: ' . mysqli_error($conn));}
					            $no = 1;
					            while ($row = mysqli_fetch_array($query)){?>
                                <a class="dropdown-item" id="catagory_id"><?php echo $row['name']?></a>
                                <?php $no++;}?>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info" value="add">Add</button>

                </form>
                <?php
                    $sql = "insert into products values (".$_POST['product_ID']",'".$_POST["productname"]"',".$_POST["catagory_id"]")";
                    $query = mysqli_query($conn, $sql);
                    if (!$query) { die ('SQL Error: ' . mysqli_error($conn));}
                ?>
            </div>
        </div>
    </div>


</body>

</html>