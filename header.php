<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stellarum</title>
    <link rel="stylesheet" href="scss/bower_components/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css" />
    <script src="bower_components/modernizr/modernizr.js"></script>
  </head>
  <body>
  <div id="fuckyou" class="contain-to-grid fixed  hide-for-small-down">
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Stellarum</a></h1>
        </li>
         <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right main-nav">
          <li data-page="index.php"><a href="index.php"><i class="fa fa-lg fa-home"></i> Home</a></li>
          <li data-page="about.php"><a href="about.php"><i class="fa fa-lg fa-firefox"></i> About</a></li>
          <li data-page="portfolio.php"><a href="portfolio.php"><i class="fa fa-lg fa-gg"></i> Portfolio</a></li>
          <li data-page="blog.php"><a href="blog.php"><i class="fa fa-lg fa-group"></i>  Blog</a></li>
          <li data-page="contact.php"><a href="contact.php"><i class="fa fa-lg fa-mobile"></i> Contact</a></li>
          <li class="has-dropdown">
            <a href="">Dropdown</a>

            <ul class="dropdown">
              <li data-page="single.php"><a href="single.php">Single Post</a></li>
              <li data-page="page.php"><a href="page.php">Single Page</a></li>
              <li data-page="full-width.php"><a href="full-width.php">Full Width Page</a></li>
            </ul>
          </li>
        </ul>

        <!-- Left Nav Section -->
        <!-- <ul class="left">
          <li><a href="#">Left Nav Button</a></li>
        </ul> -->
      </section>
      
    </nav>
  </div>
  <nav class="off-canvas-wrap" data-offcanvas>
      <div class="inner-wrap">
        <nav class="tab-bar">
          <section class="left-small">
            <a class="left-off-canvas-toggle menu-icon " href="#"><span></span></a>
          </section>

          <section class="middle tab-bar-section">
            <h1 class="title">Foundation</h1>
          </section>

          <section class="right-small">
            <a class="right-off-canvas-toggle menu-icon" href="#"><span></span></a>
          </section>
        </nav>

        <aside class="left-off-canvas-menu">
          <ul class="off-canvas-list">
            <li><label>Foundation</label></li>
            <li><a href="#">The Psychohistorians</a></li>
            <li><a href="#">The Psychohistorians</a></li>
            <li><a href="#">The Psychohistorians</a></li>
            <li><a href="#">The Psychohistorians</a></li>
            <li><a href="#">The Psychohistorians</a></li>
            <li><a href="#">...</a></li>
          </ul>
        </aside>

        <aside class="right-off-canvas-menu">
          <ul class="off-canvas-list">
            <li><label>Users</label></li>
            <li><a href="#">Hari Seldon</a></li>
            <li><a href="#">...</a></li>
          </ul>
        </aside>

        <section class="main-section">
          <!-- content goes here -->
        </section>

        <a class="exit-off-canvas"></a>



