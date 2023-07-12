<?php 

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../src/helpers/dbhelper.php";

$plan = $_GET['plan'];
$start_date = $_GET['start_date'];



try {
    $con = getDatabaseConnection();

    $query = $con->prepare("SELECT id FROM USERS WHERE email = :email");
    $query->execute([":email" =>  $_SESSION['email']]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $id = (int) $result['id'];

    $query = $con->prepare("SELECT * FROM subscription WHERE id_user = :id_user");
    $query->execute([":id_user" => $id]);
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if($result) {
        $query = $con->prepare("UPDATE subscription SET id_subscription = :id_subscription, date_debut = :date_debut WHERE id_user = :id_user");
        $query->execute([
            ":id_subscription" => $plan,
            ":date_debut" => $start_date,
            ":id_user" => $id
        ]);
    } else {
        $query = $con->prepare("INSERT INTO subscription (id_subscription, id_user, date_debut) VALUES (:id_subscription, :id_user, NOW())");
        $query->execute([
            ":id_subscription" => $plan,
            ":id_user" => $id
        ]);
        $info = $query->errorInfo();

        if ($info[2] == NULL) {
            echo "good";
        } else {
            var_dump($info);
        }
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>



<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <p>We received your purchase request;<br/> we'll be in touch shortly!</p>
      </div>

      <script>
        setTimeout(function () {
           window.location.href= 'http://localhost/CookMaster/index.php';
        },3000);
      </script>
    </body>
</html>