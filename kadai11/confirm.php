<?php
require_once('funcs.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_GET['id'])) {
    header('Location: select.php');
    exit();
}

$id = $_GET['id'];

// 2. DB接続
$pdo = db_conn();

// 3. データ取得SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_dive_table WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status === false) {
    $error = $stmt->errorInfo();
    exit("ErrorQuery:" . $error[2]);
}

$result = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/sample.css">
    <title>Planet Earth & Divers</title>
</head>
<body>
    <div class="h2__wrapper">
        <h2>Delete Confirmation</h2>
    </div>
    <div >
        <p>Are you sure you want to delete this dive log?</p>
    </div>
    <div class="dive-log">
        <div class="dive-log-box">
            <div class="dive-log-info">
                <p>Diving Number: <?php echo h($result['divingNumber']); ?></p>
                <p>Date: <?php echo h($result['date']); ?></p>
                <p>Location: <?php echo h($result['location']); ?></p>
                <p>Dive Site: <?php echo h($result['diveSite']); ?></p>
                <p>Rating: <?php echo h($result['rating']); ?></p>
                <p>Comment: <?php echo h($result['comment']); ?></p>
            </div>

            <div class="form-actions">
            <form action="delete.php?id=<?php echo $id; ?>" method="POST">
                <input type="submit" name="delete" value="Yes">
                <a href="select.php">No</a>
            </div>
        </div>   

    </div>
    </form>
</body>
</html>
