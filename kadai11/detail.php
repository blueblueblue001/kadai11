<?php
session_start();
require_once('funcs.php');
loginCheck();

class DiveLogDetail {
    private $pdo;
    private $id;
    private $result;
    
    public function __construct($id) {
        $this->pdo = db_conn();
        $this->id = $id;
    }
    
    public function getDiveLogData() {
        $stmt = $this->pdo->prepare('SELECT * FROM gs_dive_table WHERE id = :id');
        $stmt->bindValue(':id', $this->id, PDO::PARAM_INT);
        $status = $stmt->execute();

        if ($status === false) {
            $error = $stmt->errorInfo();
            exit('SQLError:' . print_r($error, true));
        }

        $this->result = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function displayDiveLogDetail() {
        // 4. データ表示
        require_once('templates/detail.php');
    }
}

// IDパラメータの取得
$id = $_GET['id'];

// DiveLogDetailのインスタンス化
$diveLogDetail = new DiveLogDetail($id);

// getDiveLogDataメソッドの呼び出し
$diveLogDetail->getDiveLogData();

// displayDiveLogDetailメソッドの呼び出し
$diveLogDetail->displayDiveLogDetail();

// デバッグメッセージを追加
// echo "Debug message";
