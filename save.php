<?php
date_default_timezone_set('Asia/Jakarta');
require_once('wr.php');
$file = "akun.txt";
echo color::red("
           ╭∩╮（︶︿︶）╭∩╮\n");
echo"           ################
           # AKBAR MAULANA#
           ################\n";
echo color::red('           ╭∩╮（︶︿︶）╭∩╮');
echo "\n";
echo color::purple("#____________________________________#
");
echo color::light_green("TOOLS PRIBADI MENYIMPAN DATA FACEBOOK
");
echo color::cyan("*Facebook: fb.me/mrk1d5
");
echo color::cyan("*Whatsapp: 083861316825
");
echo color::cyan("*Github: https://github.com/akbarsx
");
echo color::cyan("*Blog: singa-media.blogspot.com
");
echo color::purple("#____________________________________#
");
echo "\n\n";
echo color::light_green("Nama Akun : ");
$nama = trim(fgets(STDIN));
echo color::light_green("Email Akun : ");
$email = trim(fgets(STDIN));
echo color::light_green("Tgl Lahir Akun : ");
$tgl = trim(fgets(STDIN));
echo color::light_green("Username : ");
$username = trim(fgets(STDIN));
echo color::light_green("Jumlah Followers : ");
$nom = trim(fgets(STDIN));
$today = date('d-m-Y H:i:s');
$handle = fopen($file, 'a');
fwrite($handle, "___________________________________________");
fwrite($handle, "\n");
fwrite($handle, "Nama: ");
fwrite($handle, "$nama");
fwrite($handle, "\n");
fwrite($handle, "Email: ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "TTL: ");
fwrite($handle, "$tgl");
fwrite($handle, "\n");
fwrite($handle, "Username: ");
fwrite($handle, "$username");
fwrite($handle, "\n");
fwrite($handle, "Jumlah Followers: ");
fwrite($handle, "$nom: ");
fwrite($handle, "\n");
fwrite($handle, "Date Submitted: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fwrite($handle, "\n");
fwrite($handle, "___________________________________________");
fwrite($handle, "\n");
fwrite($handle, "\n");
fclose($handle);
echo '
Akun '.$nama.' telah disimpan di file '.$file.'
';
echo "\n";
echo color::red("[x] Exit
");
?>