<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>judul</title>
  </head>
  <body>
    <?php
        $number = 68;
     ?>
     <?php $number = 68; ?>
    <table border="1">
      <tr>
        <td>variabel</td>
        <td>value</td>
        <td>value-min</td>
      </tr>
      <tr>
        <td>var</td>
        <td><?php echo $number?></td>
        <td><?=$number?></td>
      </tr>
    </table>
  </body>
</html>
