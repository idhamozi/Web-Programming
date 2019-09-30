<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/mystyle.css">
    <title>Generate Data Kolom</title>
  </head>
  <body>
    <?php if (isset($_POST['Data'])) { ?>
      <table border="2">
        <tr>
          <th>NO</th>
          <th>NPM</th>
          <th>NAMA</th>
          <th>ALAMAT</th>
        </tr>
        <tbody>
          <?php
            $loop_data = array();
            for ($i = 1; $i <= $_POST['Data'] ; $i++)
              $loop_data[$i] = array('NO' => "$i", 'NPM' => "170810100$i", 'NAMA' => "Lorem Dolor $i", 'ALAMAT' => "JL. Petemon 4 No. $i");

              foreach ($loop_data as $looping) {
                echo "<tr>";
                foreach ($looping as $key => $value)
                  echo "<td>$value</td>";
                echo "</tr>";
              }
          ?>
        </tbody>
      </table>

      <?php
    } else { ?>
      <h1>Tugas 4 : Generate Data</h1>
      <form action="index.php" method="post">
        <input type="text" name="Data" placeholder="Banyak Data">
        <button type="submit">Generate Data</button>
      </form>
    <?php } ?>
  </body>
</html>
