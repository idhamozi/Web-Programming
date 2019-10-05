<?php
  include ('connection.php');

  $npm = $desc_diri = $sd = $smp = $sma = $univ = $nama = $ig = $github = $linkedin = $twitter = "";

  if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['npm'])) {
      $npm = $_GET['npm'];
      $query = "SELECT * FROM `biodata` WHERE `npm` = '$npm'";
      $received_data = mysqli_query(connection(), $query);
      $result = mysqli_fetch_array($received_data);

      $npm = $result['npm'];
  		$desc_diri = $result['desc_diri'];
  		$sd = $result['sd'];;
  		$smp = $result['smp'];
  		$sma = $result['sma'];
  		$univ = $result['univ'];
  		$nama = $result['nama'];
  		$ig = $result['ig'];
  		$github = $result['github'];
  		$linkedin = $result['linkedin'];
  		$twitter = $result['twitter'];
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Biodata Diri </title>
    <link rel="stylesheet" href="styles/css/mystyle.css">
    <link rel="stylesheet" href="styles/css/960_12_col.css">
  </head>
  <body>
    <div class="container_12">
      <nav class="container_12">
        <ul>
          <center> <li><a href="index.php">Back</a></li> </center>
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
                if (isset($nama)) { ?>
                  <h1 class="nama"><br> <?php echo $nama; ?> </h1>
                  <br><h1 class="npm"> <?php echo $npm; ?> </h1>
                  <tr class="profileteks">
                  <td>
                    <?php echo $desc_diri; ?>
                  </td>
                 </tr>
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
                        <td> 2005 - 2011 </td>
                        <td> Sekolah Dasar </td>
                        <td> <?php echo $sd; ?> </td>
                      </tr>

                          <tr class="h1pe12">
                            <td> 2011- 2014 </td>
                            <td> Sekolah Menengah Pertama </td>
                            <td>  <?php echo $smp; ?>  </td>
                          </tr>

                          <tr class="h1pe12">
                            <td> 2014 - 2017 </td>
                            <td> Sekolah Menengah Atas </td>
                            <td>  <?php echo $sma; ?>  </td>
                          </tr>

                          <tr class="h1pe12">
                            <td> 2017 - Now </td>
                            <td> Perguruan Tinggi </td>
                            <td>  <?php echo $univ; ?>  </td>
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
                          <td>2014 - 2017</td>
                          <td>Institut Ju Jitsu Indonesia</td>
                          <td>Anggota</td>
                        </tr>
                        <tr class="h1pe12">
                          <td>2017 - 2018</td>
                          <td>Kepanitiaan : Building Character Day 2018</td>
                          <td>Ka Div Perkap</td>
                        </tr>
                        <tr class="h1pe12">
                          <td>2018 - 2019</td>
                          <td>Robotics Community UPN JATIM</td>
                          <td>Ka Div Mekanik</td>
                        </tr>
                        <tr class="h1pe12">
                          <td>2019</td>
                          <td>PT. Telkom Indonesia Div Reg 5</td>
                          <td>Magang</td>
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
          <p class="kataskill">HTML</p>
          <div class="container-skill">
            <div class="skills html">60%</div>
          </div>

          <p class="kataskill">CSS</p>
          <div class="container-skill">
            <div class="skills css">50%</div>
          </div>

          <p class="kataskill">Python</p>
          <div class="container-skill">
            <div class="skills python">70%</div>
          </div>

          <p class="kataskill">C</p>
          <div class="container-skill">
            <div class="skills php">60%</div>
          </div>
        </div>
      </div>

      <div id="section4" class="grid_12 alpha omega">
        <h1 class="h1c">Contact</h1>
          <table class="grid_12">
            <tr align="center">
              <td class="ig grid_3">
                <a href="https://www.instagram.com/<?php echo $ig; ?>/">
                  <img src="img\ig.png" alt="Instagram" width="33%">
                </a>
              </td>

              <td class="github grid_3 alpha">
                <a href="https://github.com/<?php echo $github; ?>/">
                  <img src="img\github.png" alt="" width="28%">
                </a>
              </td>

              <td class="in grid_3 alpha omega">
                <a href="https://www.linkedin.com/in/<?php echo $linkedin; ?>/">
                  <img src="img\in.png" alt="" width="25%">
                </a>
              </td>

              <td class="twitter grid_3 omega">
                <a href="https://twitter.com/<?php echo $twitter; ?>/">
                  <img src="img\twitter.png" alt="" width="25%">
                </a>
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
