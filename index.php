<html>
   <head>
      <title>tugas praktikum basis data</title>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #FFD700; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>
      <h3>Inner Join</h3>
      <h4> (menggabungkan 2 tabel, tabel kota dan nama )</h4>
      <table>
         <thead>
            <tr>
               <th>ID</th>
               <th>Nama </th>
               <th>nama kota </th>
               <th>kode pos</th>
            
            </tr>
         </thead>
         <?php
           include 'kon.php';
            $sql = 'SELECT n.id, nama_lengkap, nama_kota, kode_pos
            FROM tbl_nama n
            JOIN tblkota k USING(id)';
            $query = mysqli_query($kon, $sql);		
            while ($row = mysqli_fetch_assoc($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id'] ?></td>
               <td><?php echo $row['nama_lengkap'] ?></td>
               <td><?php echo $row['nama_kota'] ?></td>
               <td><?php echo $row['kode_pos'] ?></td>

            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      </table>
      </table>
      <h3>left outer Join </h3>
      <h4> (menampilkan semua data dari tabel nama dan tabel kota )</h4>
      <table>
         <thead>
            <tr>
            <th>ID</th>
               <th>Nama </th>
               <th>nama kota </th>
               <th>kode pos </th>
            </tr>
         </thead>
         <?php
        include 'kon.php';
         $sql = 'SELECT n.id, nama_lengkap, nama_kota, kode_pos
         FROM tbl_nama n
         LEFT JOIN tblkota k USING(id)';
         $query = mysqli_query($kon, $sql);		
         while ($row = mysqli_fetch_assoc($query))
         {
            ?>
         <tbody>
            <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['nama_lengkap'] ?></td>
            <td><?php echo $row['nama_kota'] ?></td>
            <td><?php echo $row['kode_pos'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
   </body>
</html>