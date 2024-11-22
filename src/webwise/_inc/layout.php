---
site_title: WebWise
content_placeholder: CONTENT GOES HERE
stylesheets: /webwise/assets/css/webwise.css
---
<?php include 'src/_inc/header.php'; ?>

<header class="webwise">
    <div class="container">
        <h1><a href="/webwise">WebWise</a></h1>
    </div>
</header>

<input id="webwise-navbar-toggle" type="checkbox">
<label for="webwise-navbar-toggle" id="webwise-navbar-toggle-label">Menu</label>

<nav class="webwise">
    <div class="container">
        <a href="/webwise"--- if( webwise_nav_item == "home" ) --- class="current"--- endif --->Home</a>
        <a href="/webwise/courses"--- if( webwise_nav_item == "courses" ) --- class="current"--- endif --->Courses</a>
    </div>
</nav>

CONTENT GOES HERE

<?php include 'src/_inc/footer.php'; ?>
