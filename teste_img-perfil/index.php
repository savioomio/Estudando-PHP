<?php
require 'connection.php';
session_start();
$_SESSION["id"] = 1; // User's session
$sessionId = $_SESSION["id"];

try {
    $conn = new PDO("mysql:host=localhost;dbname=profile", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch user data using prepared statement
    $stmt = $conn->prepare("SELECT * FROM tb_user WHERE id = :id");
    $stmt->bindParam(":id", $sessionId, PDO::PARAM_INT);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Image Profile</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <form class="form" id="form" action="" enctype="multipart/form-data" method="post">
      <div class="upload">
        <?php
        $id = $user["id"];
        $name = $user["name"];
        $image = $user["image"];
        ?>
        <img src="img/<?php echo $image; ?>" width="125" height="125" title="<?php echo $image; ?>">
        <div class="round">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="hidden" name="name" value="<?php echo $name; ?>">
          <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
          <i class="fa fa-camera" style="color: #fff;"></i>
        </div>
      </div>
    </form>
    <script type="text/javascript">
      document.getElementById("image").onchange = function() {
          document.getElementById("form").submit();
      };
    </script>
    <?php
    if(isset($_FILES["image"]["name"])) {
      $id = $_POST["id"];
      $name = $_POST["name"];

      $imageName = $_FILES["image"]["name"];
      $imageSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];

      // Image validation
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $imageName);
      $imageExtension = strtolower(end($imageExtension));
      if (!in_array($imageExtension, $validImageExtension)) {
        echo
        "
        <script>
          alert('Invalid Image Extension');
          document.location.href = '../teste_img-perfil';
        </script>
        ";
      } elseif ($imageSize > 1200000) {
        echo
        "
        <script>
          alert('Image Size Is Too Large');
          document.location.href = '../teste_img-perfil';
        </script>
        ";
      } else {
        $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
        $newImageName .= '.' . $imageExtension;
        $query = "UPDATE tb_user SET image = :newImageName WHERE id = :id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":newImageName", $newImageName, PDO::PARAM_STR);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        move_uploaded_file($tmpName, 'img/' . $newImageName);
        echo
        "
        <script>
        document.location.href = '../teste_img-perfil';
        </script>
        ";
      }
    }
    ?>
  </body>
</html>
