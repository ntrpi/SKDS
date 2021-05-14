<!doctype html>
<html lang="en">
<head>
    <?php include_once "./php/head.php"; ?>
    <link rel="stylesheet" href="./css/mazeGame.css">
    <script src="./js/mazeGame.js" async defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ranchers&display=swap" rel="stylesheet">
</head>
<body>

    <?php include_once "./php/header.php"; ?>

    <!-- Call To Action Start -->
    <section class="cta" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left">
                <div class="content" data-aos="fade-right" data-aos-delay="200">
                    <h2>Maze Game: Chase the Cheese</h2>
                    <p>Use the arrow buttons or your arrow keys to help the mouse eat all the cheese and finish the maze!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action End -->

    <section id="mazeSection" class="maze pageWrapper">
      <h2>Chase the Cheese</h2>
      <div id="mazeDiv">
        <div id="mazeDiv" class="mazeDiv">
          <img id="cheese1" class="cheese" src="./img/mazeGame/cheese.gif" alt="cheese clip art." height="30">
          <img id="cheese2" class="cheese" src="./img/mazeGame/cheese.gif" alt="cheese clip art." height="30">
          <img id="cheese3" class="cheese" src="./img/mazeGame/cheese.gif" alt="cheese clip art." height="30">
          <img id="mouse" class="mouse" src="./img/mazeGame/mouse.png" alt="Mouse clip art." height="38">
          <div>
            <table id="maze"></table>
          </div>
        </div>
        <div id="buttonsDiv">
          <!-- <button id="utilitity">utilitity</button> -->
          <div id="movesDiv">
            <div class="upDownBtns">
              <button class="recurse upBtn"><span class="arrowBtn up"></span></button>
              <button class="recurse arrowBtn bottom up upBtn"></button>
              <button class="upBtn"><span class="arrowBtn up"></span></button>
            </div>
            <div class="centerRow">
              <div class="leftRightBtns">
                <div class="leftRightBtns">
                    <button class="recurse leftBtn"><span class="arrowBtn left"></span></button>
                    <button class="recurse arrowBtn left leftBtn2"></button>
                <!-- </div>
                <div class="leftRightBtns"> -->
                    <button class="leftBtn"><span class="arrowBtn left"></span></button>
                    <button class="arrowBtn center"></button>
                    <button class="rightBtn"><span class="arrowBtn right"></span></button>
                <!-- </div>
                <div class="leftRightBtns"> -->
                    <button class="recurse arrowBtn right rightBtn2"></button>
                    <button class="recurse rightBtn"><span class="arrowBtn right"></span></button>
                </div>
              </div>
            </div>
            <div class="upDownBtns">
                <button class="downBtn"><span class="arrowBtn down"></span></button>
                <button class="recurse arrowBtn top down downBtn"></button>
                <button class="recurse downBtn"><span class="arrowBtn down"></span></button>
            </div>
            <div class="message" id="message"></div>
          </div>
          <div>
            <input type="button" name="restart" id="restart" value="New Maze">
          </div>
        </div>
      </div>
    </section>




    <?php include_once "./php/footer.php"; ?>

    <?php include_once "./php/bodyScripts.php"; ?> -->
</body>
</html>