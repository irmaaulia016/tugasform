<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pendaftaran</title>
</head>
<center>
<body>
    <h2>Pendaftaran Siswa Baru</h2>
    <h2>SMK N 1 Sayung</h2>
    <form action="Proses.php" method="post">
        <table border="0">
            <tr>
                <td> Nama Lengkap: </td>
                <td><input type="text" name="nama" /> </td>
           </tr> 

           <tr>
                <td> Tempat Lahir: </td>
                <td><input type="text" name="tempat" /> </td>
           </tr> 

           <tr>
                <td> Tanggal Lahir: </td>
                <td><input type="date" name="tanggal" /> </td>
           </tr> 

           <tr>
                <td> Jenis Kelamin: </td>
                <td><input type="radio" name="sex" value="Perempuan" /> Perempuan </td>
                <td> <input type="radio" name="sex" value="Laki-Laki" /> Laki-Laki </td>
 </tr> 

           <tr>
                <td> Alamat: </td>
                <td><textarea name="alamat"> </textarea> </td>
           </tr> 

           <tr>
                <td> Agama: </td>
                <td>
                <select name="Agama">
                    <option> Islam </option>
                    <option> Kristen</option>
                    <option> Hindu</option>
                    <option> Budha </option>
                    <option> Konghucu </option>
                </select>
                </td>
                </tr> 

                <tr>
                    <td><input type="submit" value="Ulangi" /> 
</td>
<td>
                    <input type="submit" value="Submit" />
</td>
</tr>
</table>
</form>
</body>
</center>
</html>