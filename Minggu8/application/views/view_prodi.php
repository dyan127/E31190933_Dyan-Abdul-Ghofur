 <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Studi</title>
    <h1> POLITEKNIK NEGERI JEMBER</h1>
    <h3>Program Studi Jurusan Teknologi Informasi</h3>
    <style>
      table, td, th, td {
        border: 2px solid black;
        padding: 10px;
        border-collapse: collapse;
      }
      </style>
  </head>
  <body>
    <table>
    <th>No</th>
    <th>Prodi</th>
    <th>Keterangan</th>
    <?php $no=1; foreach ($Prodi as $row) : ?>
      <tr>
        <td><?= $no?></td>
        <td><?= $row['Prodi'] ?></td>
        <td><?= $row['Keterangan'] ?></td>
      </tr>
    <?php $no++; endforeach ?>
  </table>
  </body>
  </html>