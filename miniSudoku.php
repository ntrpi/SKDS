<!doctype html>
<html lang="en">
<head>
    <?php include_once "./php/head.php"; ?>
    <link rel="stylesheet" href="./css/miniSudoku.css">
    <script src="./js/miniSudoku.js" async defer></script>
</head>
<body>

    <?php include_once "./php/header.php"; ?>

    <!-- Call To Action Start -->
    <section class="cta" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left">
                <div class="content" data-aos="fade-right" data-aos-delay="200">
                    <h2>Mini Sudoku</h2>
                    <p class="w-75 mx-auto">A smaller version of the popular puzzle game for when you only have a couple of minutes to play!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action End -->

    <section  id="main" class="pageWrapper my-5">
      <div id="messageDiv" ></div>
      <form action="#" method="post" id="gameForm" name="gameForm">
        <div class="formDiv">
          <input type="submit" name="startGame" id="startGame" value="Start Game">
        </div>
      </form>

      <div class="tableDiv" style="min-height: 200px;">
        <div>
          <table id="gameTable" class="my-3"></table>
        </div>
        <div>
          <input type="button" name="restart" id="restart" value="Restart" style="display: none;">
        </div>
      </div>
    </section>


    <?php include_once "./php/footer.php"; ?>

    <?php include_once "./php/bodyScripts.php"; ?> -->
</body>
</html>