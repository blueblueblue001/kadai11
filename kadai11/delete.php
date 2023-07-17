<?php
session_start();
require_once('funcs.php');
loginCheck();

class DeleteData {
    private $pdo;
    
    public function __construct() {
        $this->pdo = db_conn();
    }
    
    public function deleteData($id) {
        $stmt = $this->pdo->prepare('DELETE FROM gs_dive_table WHERE id = :id');
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $status = $stmt->execute();
        
        if ($status === false) {
            $error = $stmt->errorInfo();
            exit('SQLError:' . print_r($error, true));
        } else {
            header('Location: select.php');
            exit();
        }
    }
}

// IDパラメータの取得
$id = $_GET['id'];

// DeleteDataクラスのインスタンス化
$deleteData = new DeleteData();

// データの削除
$deleteData->deleteData($id);
?>
