<?php
include "conn.php";

$sql = "INSERT INTO `table`(`nama`, `kamar`, `check_in`, `check_out`, `durasi`) VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $nama, $kamar, $check_in, $check_out, $durasi);

$nama = $_POST['nama'];
$kamar = $_POST['kamar'];
$check_in = $_POST['checkInDate'];
$check_out = $_POST['checkOutDate'];
$durasi = $_POST['durasi'];
$tipeId = $_POST['tipeId'];
$idNumber = $_POST['idnumber'];

$stmt->execute();

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Pesanan</title>
</head>

<body>

    <div class="container">
        <a href="index.php">
            <h6>Dashbodard</h6>
        </a>
        <div class="row">
        </div>
        <div class="row">
            <div class="col mt-4">
                <h1>Invoice</h1>
                <hr>
                <a href="history.php">
                    <h6>lihat daftar pesanan lainnya</h6>
                </a>
                <p>Welcome <?= $nama ?></p>
                <p>Your ID Type is <?= $tipeId ?>, your ID number is <?= $idNumber ?></p>
                <p>Your room type is <?php echo $kamar ?></p>
                <p>You book this room for <?php echo $durasi ?> night(s) at <?php echo $check_in ?></p>
                <img src="images/<?php
                                    if ($kamar == "Superior") {
                                        echo "superior.jpg";
                                    }
                                    if ($kamar == "Presidential Suite") {
                                        echo "presidential.jpg";
                                    }
                                    if ($kamar == "King Suite") {
                                        echo "king.jpg";
                                    }
                                    ?>" alt="" width="800px">
                <hr>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

