<?php

if(isset($_GET["term"])) {
  $term = $_GET["term"];
} else {
  exit("You must enter a search term");
}

$type = isset($_GET["type"]) ? $_GET["type"] : "sites";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Welcome to Foofle</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>

  <div class="wrapper">

   <div class="header">

    <div class="header-content">

      <div class="logo-container">
        <a href="index.php">
          <img src="assets/img/logo.png" alt="logo">
        </a>
      </div>

      <div class="search-container">

        <form action="search.php" method="GET">

          <div class="search-bar-container">

            <input name="term" type="text" class="search-box">
            <button class="search-button">
              <img src="assets/img/icons/search.png" alt="search icon">
            </button>
          </div>

        </form>

      </div>

    </div>

    <div class="tabs-container">

      <ul class="tab-list">

        <li class="<?php echo $type == 'sites' ? 'active' : '' ?>">
          <a href='<?php echo "search.php?term=$term&type=sites"; ?>'>Sites</a>
        </li>
        <li class="<?php echo $type == 'images' ? 'active' : '' ?>">
          <a href='<?php echo "search.php?term=$term&type=images"; ?>'>Images</a>
        </li>

      </ul>

    </div>

   </div>

  </div>

</body>
</html>