<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Biodata Diri </title>
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/960_12_col.css">
  </head>
  <body>

    <div class="container_12">

      <nav class="container_12">
        <ul>
          <center> <li><a href="#section1">Profile</a></li> </center>
          <center> <li><a href="#section2">Edu & Exp</a></li> </center>
          <center> <li><a href="#section3">Skill</a></li> </center>
          <center> <li><a href="#section4">Contact</a></li> </center>
        </ul>
      </nav>

      <div id="section1" class="grid_12 alpha omega">
        <h1 class="h1p">Profile</h1>

        <div class="grid_12 alpha omega">

          <div class="grid_3">
            <img class="fotodiri" src="img\Picture1.jpg" alt="Foto Diri" width="200px" align="left">
          </div>

            <div class="profilediri grid_9 alpha omega">
              <table>

                <?php
                  if (isset($_POST['nama'])) { ?>
                <h1 class="nama"><br> <?php echo $_POST['nama']; ?> </h1>
                 <br><h1 class="npm"> <?php echo $_POST['npm']; ?> </h1>
                 <tr class="profileteks">
                   <td>
                   <?php echo $_POST['desc']; ?>
                   </td>
                 </tr>

                <?php } else { ?>

                <div class="push_3">
                  <form action="index.php" method="post" id="forms">
                    <input style="width: 30%; margin-top: 10px;" class="nama" type="text" name="nama" placeholder="NAMA" ><br>
                    <input style="width: 30%; margin-top: 10px;" class="npm" type="text" name="npm" placeholder="NPM" ><br>
                  </form>
                </div>
                <br><textarea style="margin-left: 3.5%; text-align: center;" name="desc" rows="8" cols="90%" form="forms" placeholder="DESCRIPTION"></textarea><br><br>

                <?php } ?>

              </table>
            </div>

        </div>

      </div>

      <div id="section2" class="grid_12 alpha omega">
        <h1 class="h1pe">Education & Experience</h1>
          <div>
              <table width="100%" align="center">
                <tr>
                  <td class="pendidikan grid_6">
                    <table class="kontenpendidikan">
                      <tr class="h1pe12">
                        <td><strong>Masa Studi</strong></td>
                        <td><strong>Jenjang</strong></td>
                        <td><strong>Nama Instansi</strong></td>
                      </tr>

                          <tr class="h1pe12">
                            <td> <?php if (isset($_POST['ms1'])) { ?>
                              <?php echo $_POST['ms1']; ?>  <?php } else { ?>
                                <form action="index.php" method="post">
                                  <input style="width: 80%; text-align: center;" type="text" name="ms1" form="forms" placeholder="Tahun Studi">
                                </form> <?php } ?>
                            </td>
                            <td> <?php if (isset($_POST['jjg1'])) { ?>
                              <?php echo $_POST['jjg1']; ?>  <?php } else { ?>
                                <form action="index.php" method="post">
                                  <input style="width: 80%; text-align: center;" type="text" name="jjg1" form="forms" placeholder="Jenjang">
                                </form> <?php } ?>
                            </td>
                            <td> <?php if (isset($_POST['ins1'])) { ?>
                              <?php echo $_POST['ins1']; ?>  <?php } else { ?>
                                <form action="index.php" method="post">
                                  <input style="width: 80%; text-align: center;" type="text" name="ins1" form="forms" placeholder="Nama Instansi">
                                </form> <?php } ?>
                            </td>
                          </tr>

                          <tr class="h1pe12">
                            <td> <?php if (isset($_POST['ms2'])) { ?>
                              <?php echo $_POST['ms2']; ?>  <?php } else { ?>
                                <form action="index.php" method="post">
                                  <input style="width: 80%; text-align: center;" type="text" name="ms2" form="forms" placeholder="Tahun Studi">
                                </form> <?php } ?>
                            </td>
                            <td> <?php if (isset($_POST['jjg2'])) { ?>
                              <?php echo $_POST['jjg2']; ?>  <?php } else { ?>
                                <form action="index.php" method="post">
                                  <input style="width: 80%; text-align: center;" type="text" name="jjg2" form="forms" placeholder="Jenjang">
                                </form> <?php } ?>
                            </td>
                            <td> <?php if (isset($_POST['ins2'])) { ?>
                              <?php echo $_POST['ins2']; ?>  <?php } else { ?>
                                <form action="index.php" method="post">
                                  <input style="width: 80%; text-align: center;" type="text" name="ins2" form="forms" placeholder="Nama Instansi">
                                </form> <?php } ?>
                            </td>
                          </tr>

                          <tr class="h1pe12">
                            <td> <?php if (isset($_POST['ms3'])) { ?>
                              <?php echo $_POST['ms3']; ?>  <?php } else { ?>
                                <form action="index.php" method="post">
                                  <input style="width: 80%; text-align: center;" type="text" name="ms3" form="forms" placeholder="Tahun Studi">
                                </form> <?php } ?>
                            </td>
                            <td> <?php if (isset($_POST['jjg3'])) { ?>
                              <?php echo $_POST['jjg3']; ?>  <?php } else { ?>
                                <form action="index.php" method="post">
                                  <input style="width: 80%; text-align: center;" type="text" name="jjg3" form="forms" placeholder="Jenjang">
                                </form> <?php } ?>
                            </td>
                            <td> <?php if (isset($_POST['ins3'])) { ?>
                              <?php echo $_POST['ins3']; ?>  <?php } else { ?>
                                <form action="index.php" method="post">
                                  <input style="width: 80%; text-align: center;" type="text" name="ins3" form="forms" placeholder="Nama Instansi">
                                </form> <?php } ?>
                            </td>
                          </tr>

                          <tr class="h1pe12">
                            <td> <?php if (isset($_POST['ms4'])) { ?>
                              <?php echo $_POST['ms4']; ?>  <?php } else { ?>
                                <form action="index.php" method="post">
                                  <input style="width: 80%; text-align: center;" type="text" name="ms4" form="forms" placeholder="Tahun Studi">
                                </form> <?php } ?>
                            </td>
                            <td> <?php if (isset($_POST['jjg4'])) { ?>
                              <?php echo $_POST['jjg4']; ?>  <?php } else { ?>
                                <form action="index.php" method="post">
                                  <input style="width: 80%; text-align: center;" type="text" name="jjg4" form="forms" placeholder="Jenjang">
                                </form> <?php } ?>
                            </td>
                            <td> <?php if (isset($_POST['ins4'])) { ?>
                              <?php echo $_POST['ins4']; ?>  <?php } else { ?>
                                <form action="index.php" method="post">
                                  <input style="width: 80%; text-align: center;" type="text" name="ins4" form="forms" placeholder="Nama Instansi">
                                </form> <?php } ?>
                            </td>
                          </tr>

                    </table>
                  </td>

                  <td class="organisasi grid_6 alpha omega">
                    <table class="kontenorganisasi">
                        <tr class="h1pe12">
                          <td><strong>Tahun</strong></td>
                          <td><strong>Nama Instansi</strong></td>
                          <td><strong>Jabatan</strong></td>
                        </tr>

                        <tr class="h1pe12">
                          <td> <?php if (isset($_POST['thn1'])) { ?>
                            <?php echo $_POST['thn1']; ?>  <?php } else { ?>
                              <form action="index.php" method="post">
                                <input style="width: 80%; text-align: center;" type="text" name="thn1" form="forms" placeholder="Tahun">
                              </form> <?php } ?>
                          </td>
                          <td> <?php if (isset($_POST['nins1'])) { ?>
                            <?php echo $_POST['nins1']; ?>  <?php } else { ?>
                              <form action="index.php" method="post">
                                <input style="width: 80%; text-align: center;" type="text" name="nins1" form="forms" placeholder="Nama Instansi">
                              </form> <?php } ?>
                          </td>
                          <td> <?php if (isset($_POST['jbtn1'])) { ?>
                            <?php echo $_POST['jbtn1']; ?>  <?php } else { ?>
                              <form action="index.php" method="post">
                                <input style="width: 80%; text-align: center;" type="text" name="jbtn1" form="forms" placeholder="Jabatan">
                              </form> <?php } ?>
                          </td>
                        </tr>

                        <tr class="h1pe12">
                          <td> <?php if (isset($_POST['thn2'])) { ?>
                            <?php echo $_POST['thn2']; ?>  <?php } else { ?>
                              <form action="index.php" method="post">
                                <input style="width: 80%; text-align: center;" type="text" name="thn2" form="forms" placeholder="Tahun">
                              </form> <?php } ?>
                          </td>
                          <td> <?php if (isset($_POST['nins2'])) { ?>
                            <?php echo $_POST['nins2']; ?>  <?php } else { ?>
                              <form action="index.php" method="post">
                                <input style="width: 80%; text-align: center;" type="text" name="nins2" form="forms" placeholder="Nama Instansi">
                              </form> <?php } ?>
                          </td>
                          <td> <?php if (isset($_POST['jbtn2'])) { ?>
                            <?php echo $_POST['jbtn2']; ?>  <?php } else { ?>
                              <form action="index.php" method="post">
                                <input style="width: 80%; text-align: center;" type="text" name="jbtn2" form="forms" placeholder="Jabatan">
                              </form> <?php } ?>
                          </td>
                        </tr>
                        <tr class="h1pe12">
                          <td> <?php if (isset($_POST['thn3'])) { ?>
                            <?php echo $_POST['thn3']; ?>  <?php } else { ?>
                              <form action="index.php" method="post">
                                <input style="width: 80%; text-align: center;" type="text" name="thn3" form="forms" placeholder="Tahun">
                              </form> <?php } ?>
                          </td>
                          <td> <?php if (isset($_POST['nins3'])) { ?>
                            <?php echo $_POST['nins3']; ?>  <?php } else { ?>
                              <form action="index.php" method="post">
                                <input style="width: 80%; text-align: center;" type="text" name="nins3" form="forms" placeholder="Nama Instansi">
                              </form> <?php } ?>
                          </td>
                          <td> <?php if (isset($_POST['jbtn3'])) { ?>
                            <?php echo $_POST['jbtn3']; ?>  <?php } else { ?>
                              <form action="index.php" method="post">
                                <input style="width: 80%; text-align: center;" type="text" name="jbtn3" form="forms" placeholder="Jabatan">
                              </form> <?php } ?>
                          </td>
                        </tr>
                        <tr class="h1pe12">
                          <td> <?php if (isset($_POST['thn4'])) { ?>
                            <?php echo $_POST['thn4']; ?>  <?php } else { ?>
                              <form action="index.php" method="post">
                                <input style="width: 80%; text-align: center;" type="text" name="thn4" form="forms" placeholder="Tahun">
                              </form> <?php } ?>
                          </td>
                          <td> <?php if (isset($_POST['nins4'])) { ?>
                            <?php echo $_POST['nins4']; ?>  <?php } else { ?>
                              <form action="index.php" method="post">
                                <input style="width: 80%; text-align: center;" type="text" name="nins4" form="forms" placeholder="Nama Instansi">
                              </form> <?php } ?>
                          </td>
                          <td> <?php if (isset($_POST['jbtn4'])) { ?>
                            <?php echo $_POST['jbtn4']; ?>  <?php } else { ?>
                              <form action="index.php" method="post">
                                <input style="width: 80%; text-align: center;" type="text" name="jbtn4" form="forms" placeholder="Jabatan">
                              </form> <?php } ?>
                          </td>
                        </tr>

                    </table>
                  </td>
                </tr>
              </table>
          </div>
      </div>

      <div id="section3" class="grid_12 alpha omega">
        <h1 class="h1s">Skill</h1>
        <div class="container">

          <?php
          if (isset($_POST['kataskill1'])) {
          ?>
          <p class="kataskill"><?php echo $_POST['kataskill1']; ?></p>
          <div class="container-skill">
            <div class="skills" style="text-align: right; padding-top: 10px; padding-bottom: 10px; color: white; border-radius: 50px; width: <?php echo (int)$_POST['skilper1']; ?>%; background: #4CAF50">
            <?php echo (int)$_POST['skilper1']; ?>%</div></div>

          <?php
          }else {
          ?>
          <form action="index.php" method="post">
            <input style="margin-left: 15%; text-align: center; width: 30%; margin-top: 40px;" type="text" name="kataskill1" placeholder="Input Skill 1 Here" form="forms">
            <input style="margin-left: 10%; text-align: center; width: 30%; margin-top: 10px;" type="text" name="skilper1" placeholder="Input Percentage Here" form="forms">
          </form> <?php
          }?>

          <?php
          if (isset($_POST['kataskill1'])) {
          ?>
          <p class="kataskill"><?php echo $_POST['kataskill2']; ?></p>
          <div class="container-skill">
            <div class="skills" style="text-align: right; padding-top: 10px; padding-bottom: 10px; color: white; border-radius: 50px; width: <?php echo (int)$_POST['skilper2']; ?>%; background: green">
            <?php echo (int)$_POST['skilper2']; ?>%</div></div>

          <?php
          }else {
          ?>
          <form action="index.php" method="post">
            <input style="margin-left: 15%; text-align: center; width: 30%; margin-top: 10px;" type="text" name="kataskill2" placeholder="Input Skill 2 Here" form="forms">
            <input style="margin-left: 10%; text-align: center; width: 30%; margin-top: 10px;" type="text" name="skilper2" placeholder="Input Percentage Here" form="forms">
          </form> <?php
          }?>

          <?php
          if (isset($_POST['kataskill1'])) {
          ?>
          <p class="kataskill"><?php echo $_POST['kataskill3']; ?></p>
          <div class="container-skill">
            <div class="skills" style="text-align: right; padding-top: 10px; padding-bottom: 10px; color: white; border-radius: 50px; width: <?php echo (int)$_POST['skilper3']; ?>%; background: green">
            <?php echo (int)$_POST['skilper3']; ?>%</div></div>

          <?php
          }else {
          ?>
          <form action="index.php" method="post">
            <input style="margin-left: 15%; text-align: center; width: 30%; margin-top: 10px;" type="text" name="kataskill3" placeholder="Input Skill 3 Here" form="forms">
            <input style="margin-left: 10%; text-align: center; width: 30%; margin-top: 10px;" type="text" name="skilper3" placeholder="Input Percentage Here" form="forms">
          </form> <?php
          }?>

          <?php
          if (isset($_POST['kataskill1'])) {
          ?>
          <p class="kataskill"><?php echo $_POST['kataskill4']; ?></p>
          <div class="container-skill">
            <div class="skills" style="text-align: right; padding-top: 10px; padding-bottom: 10px; color: white; border-radius: 50px; width: <?php echo (int)$_POST['skilper4']; ?>%; background: green">
            <?php echo (int)$_POST['skilper4']; ?>%</div></div>

          <?php
          }else {
          ?>
          <form action="index.php" method="post">
            <input style="margin-left: 15%; text-align: center; width: 30%; margin-top: 10px;" type="text" name="kataskill4" placeholder="Input Skill 4 Here" form="forms">
            <input style="margin-left: 10%; text-align: center; width: 30%; margin-top: 10px;" type="text" name="skilper4" placeholder="Input Percentage Here" form="forms">
          </form> <?php
          }?>

          <button style="margin-left: 45%; margin-top: 5%;" class="button" type="submit" form="forms" ><b>APPLY</b></button>

        </div>
      </div>

      <div id="section4" class="grid_12 alpha omega">
        <h1 class="h1c">Contact</h1>
          <table class="grid_12">
            <tr align="center">
              <td class="ig grid_3">
                <?php
                if (isset($_POST['ig'])) {
                ?>
                <a href="https://www.instagram.com/<?php echo $_POST['ig'] ?>/">
                  <img src="img\ig.png" alt="Instagram" width="33%">
                </a>
                <?php
                }else{
                ?><input style="text-align: center; width: 100%; margin-top: 10px;" type="text" name="ig" placeholder="Input User Instagram Here" form="forms">
                <?php
                }?>
              </td>

              <td class="github grid_3 alpha">
                <?php
                if (isset($_POST['github'])) {
                ?>
                <a href="https://github.com/<?php echo $_POST['github'] ?>/">
                  <img src="img\github.png" alt="" width="28%">
                </a>
                <?php
                }else{
                ?><input style="text-align: center; width: 100%; margin-top: 10px;" type="text" name="github" placeholder="Input User GitHub Here" form="forms">
                <?php
                }?>
              </td>

              <td class="in grid_3 alpha omega">
                <?php
                if (isset($_POST['in'])) {
                ?>
                <a href="https://www.linkedin.com/in/<?php echo $_POST['in'] ?>/">
                  <img src="img\in.png" alt="" width="25%">
                </a>
                <?php
                }else{
                ?><input style="text-align: center; width: 100%; margin-top: 10px;" type="text" name="in" placeholder="Input User Linkedin Here" form="forms">
                <?php
                }?>
              </td>

              <td class="twitter grid_3 omega">
                <?php
                if (isset($_POST['twitter'])) {
                ?>
                <a href="https://twitter.com/<?php echo $_POST['twitter'] ?>/">
                  <img src="img\twitter.png" alt="" width="25%">
                </a>
                <?php
                }else{
                ?><input style="text-align: center; width: 100%; margin-top: 10px;" type="text" name="twitter" placeholder="Input User Twitter Here" form="forms">
                <?php
                }?>
              </td>

            </tr>
          </table>
      </div>

      <footer>
        <div class="copyright container_12">
          <p>&copy Build with <i class="heart">❤</i> by Idham </p>
        </div>
      </footer>

    </div>

  </body>
</html>
