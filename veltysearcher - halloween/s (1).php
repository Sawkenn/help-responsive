<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./style/main2.css" />
    <link rel="icon" href="https://cdn.discordapp.com/attachments/1006863924190269520/1033313519040483369/Velty-icon-removebg-preview.png" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fanwood+Text:ital@0;1&family=Tenor+Sans&display=swap"
      rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>

  <script src="./js/main.js"></script>

  <div class="box">
    <h1 class="search">
      Searcher
    </h1>

    <div class="btn">
      <form action="s.php" method="POST">
        <table>
                <tr>
                        <td><input type="text" name="s" value="<?php echo isset($_GET['s']) ? $_GET['s'] : ''; ?>" placeholder="Enter your search keywords" /></td>
                </tr>
        </table>
        <input class="boutton" type="submit" value="Rechercher"></p>

      </form>
  </div>
  </div>
	
	<?php
$cdb = array();
$num = 0;
$d = dir("db");

while (false !== ($entry = $d->read())) {
   if($entry != "." and ".."){
     if($entry != ".."){
       $entry = explode(".", $entry);
       $nameondb = $entry[0];
       array_push($cdb, $nameondb);
       ++$num;
     }
   }
}
$d->close();
?>
</body>
</html>