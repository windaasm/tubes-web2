<html>
<title>Bisnis Online Winda</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="pages/w3.css">
<body>
<div id="header">
<center>
<img src="./imagess/_Header.png" width=100% height=40%>
</center>
</div>
<div class="w3-bar w3-aqua">
  <a href="index.php?p=welcome" class="w3-bar-item w3-button">Home</a>
  <a href="index.php" class="w3-bar-item w3-button">Katalog</a>
  <a href="index.php?p=insert" class="w3-bar-item w3-button">Insert</a>
  <a href="index.php?p=select" class="w3-bar-item w3-button">Select</a>
  <a href="index.php?p=update" class="w3-bar-item w3-button">Update</a>
  <a href="index.php?p=delete" class="w3-bar-item w3-button">Delete</a>
  <a href="index.php?p=penjualan" class="w3-bar-item w3-button">Penjualan</a>
  <a href="index.php?p=profile" class="w3-bar-item w3-button">Profile</a>

  <div class="w3-dropdown-hover">
  <button class="w3-button">Dropdown</button>
  <div class="w3-dropdown-content w3-bar-block w3-border w3-aqua">
    <a href="index.php" class="w3-bar-item w3-button">Katalog</a>
    <a href="index.php?p=insert" class="w3-bar-item w3-button">Insert</a>
    <a href="index.php?p=select" class="w3-bar-item w3-button">Select</a>
    <a href="index.php?p=update" class="w3-bar-item w3-button">Update</a>
    <a href="index.php?p=delete" class="w3-bar-item w3-button">Delete</a>
    <a href="index.php?p=penjualan" class="w3-bar-item w3-button">Penjualan</a>
    <a href="index.php?p=profile" class="w3-bar-item w3-button">Profile</a>
  </div>
</div>
</div>
<div id="konten">
<?php
$pages_dir = 'pages';
if(!empty($_GET['p'])){
$pages = scandir($pages_dir, 0);
unset($pages[0], $pages[1]);
$p = $_GET['p'];
if(in_array($p.'.html', $pages)){
include($pages_dir.'/'.$p.'.html');
} else
if(in_array($p.'.php', $pages)){
include($pages_dir.'/'.$p.'.php');
} else
{
echo "$pages_dir Halaman tidak ditemukan! :(";
}
} else {
include($pages_dir.'/home.html');
}
?>
</div>
</body>
</html>