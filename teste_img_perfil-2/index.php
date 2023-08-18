<?php
// Step 1: Use constantes para informações sensíveis
define('DB_HOST', 'localhost');
define('DB_NAME', 'image');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

$dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";

try {
    $conn = new PDO($dsn, DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

session_start();
// Step 2: Valide a entrada do usuário
$sessionId = $_SESSION["id"] = 2;

// Step 3: Use prepared statements para buscar os dados do usuário
$query = "SELECT * FROM tb_user WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(":id", $sessionId, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Image</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style media="screen">
    .upload{
      width: 140px;
      position: relative;
      margin: auto;
      text-align: center;
    }
    .upload img{
      border-radius: 50%;
      width: 125px;
      height: 125px;
    }
    .upload .rightRound{
      position: absolute;
      bottom: 0;
      right: 0;
      background: #00B4FF;
      width: 32px;
      height: 32px;
      line-height: 33px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .leftRound{
      position: absolute;
      bottom: 0;
      left: 0;
      background: red;
      width: 32px;
      height: 32px;
      line-height: 33px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .fa{
      color: white;
    }
    .upload input{
      position: absolute;
      transform: scale(2);
      opacity: 0;
    }
    .upload input::-webkit-file-upload-button, .upload input[type=submit]{
      cursor: pointer;
    }
  </style>
  <body>
    <form class="form" id = "form" action="" enctype="multipart/form-data" method="post">
      <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
      <div class="upload">
        <img src="img/<?php echo $user['image']; ?>" id = "image">

        <div class="rightRound" id = "upload">
          <input type="file" name="fileImg" id = "fileImg" accept=".jpg, .jpeg, .png">
          <i class = "fa fa-camera"></i>
        </div>

        <div class="leftRound" id = "cancel" style = "display: none;">
          <i class = "fa fa-times"></i>
        </div>
        <div class="rightRound" id = "confirm" style = "display: none;">
          <input type="submit">
          <i class = "fa fa-check"></i>
        </div>
      </div>
    </form>

    <script type="text/javascript">
      document.getElementById("fileImg").onchange = function(){
        document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

        document.getElementById("cancel").style.display = "block";
        document.getElementById("confirm").style.display = "block";

        document.getElementById("upload").style.display = "none";
      }

      var userImage = document.getElementById('image').src;
      document.getElementById("cancel").onclick = function(){
        document.getElementById("image").src = userImage; // Back to previous image

        document.getElementById("cancel").style.display = "none";
        document.getElementById("confirm").style.display = "none";

        document.getElementById("upload").style.display = "block";
      }
    </script>

<?php
if (isset($_FILES["fileImg"]["name"])) {
    $id = $_POST["id"];

    // Step 6: Renomeie os arquivos de upload de forma mais segura
    $originalFileName = $_FILES["fileImg"]["name"];
    $randomValue = uniqid(mt_rand(), true); // Valor aleatório baseado no tempo atual
    $extension = pathinfo($originalFileName, PATHINFO_EXTENSION); // Obter a extensão do arquivo original

    // Criar um nome único usando sha1 (outras funções hash também podem ser usadas)
    $imageName = sha1($originalFileName . $randomValue) . '.' . $extension;

    $target = "img/" . $imageName;
    move_uploaded_file($_FILES["fileImg"]["tmp_name"], $target);

    $query = "UPDATE tb_user SET image = :image WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":image", $imageName, PDO::PARAM_STR);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();

    header("Location: index.php");
    exit();
}
?>

  </body>
</html>