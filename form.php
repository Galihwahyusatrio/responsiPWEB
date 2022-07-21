<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <nav>
    <div class="menu">
      <div class="logo">
      <img src="img/logokost.png" alt="Image" height="48" width="60"> 
      </div>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
       
      </ul>
    </div>
  </nav>
  <div class="form">
  <div align="center"><strong><font size="6" face="Courier New, Courier,mono">Form Ketertarikan </font></strong></div>
    <form name="form1" method="post" action="proses.php">
        <table  border="0" >
            <tr>
                <td>Nama Lengkap</td>
                <td><input name="nama" type="text" id="nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input name="alamat" type="text" id="alamat"></td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td><input name="email" type="text" id="email"></td> </tr>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input name="nohp" type="text" id="nohp"></td> </tr>
            </tr>

            <tr>
                <td>Status</td>
                <td><select name="status" id="status">
                <option>Menikah</option>
                <option>Single</option>
                </select></td>
            </tr>
            <tr>
                <td>Daerah Kost</td>
                <td><select name="daerah" id="daerah">
                  <option>Bantul</option>
                  <option>Seleman</option>
                  <option>Kota Yogyakarta</option>
                </select></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><textarea name="catatan" id="catatan"></textarea></td> </textarea>
            </tr>

            <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="Submit" value="Kirim"><input type="reset"
            name="Submit2" value="Batal">
            </td>
            </tr>
        </table>
    </form>
    
  </div>
</body>
</html>