<?php
session_start();
include_once "php/config.php";
if (!isset($_SESSION['unique_id'])) {
  header("location: login.php");
}
?>
<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php
        $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
        if (mysqli_num_rows($sql) > 0) {
          $row = mysqli_fetch_assoc($sql);
        } else {
          header("location: users.php");
        }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['fname'] . " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <audio id="messageSound">
          <source src="./Sonido/sonido.mp3" type="audio/mp3">
          Tu navegador no soporta el elemento de audio.
      </audio>

      <button id="emoji-button">😎</button>


          <form action="#" class="typing-area"><!--Área de escritura-->
            <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden />
            <input type="text" name="message" id="input" class="input-field" placeholder="Escribe aquí tu mensaje ..." autocomplete="off"/>
            <button><i class="fab fa-telegram-plane"></i></button>
          </form>


      <script src="javascript/chat.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.0.3/dist/index.min.js"></script>
      <script src="javascript/popup.js"></script> <!-- emojis-->
      </body>

</html>