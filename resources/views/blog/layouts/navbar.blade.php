 <!-- Mobile Navbar and Header -->
 <ul class="side-nav" id="nav-mobile">
    <li><a href="#"><i class="material-icons">camera</i>{{ env('APP_NAME') }}</a></li>
    <li><a href="#"><i class="material-icons">school</i>Home</a></li>
    <li class="active"><a href="#"><i class="material-icons">edit</i>Blog</a></li>
    
    
  </ul>
<!-- Navbar and Header -->
<nav class="nav-extended nav-full-header z-depth-0 blue-grey darken-3">
  <div class="nav-background">
    <img class="active" src="http://placehold.it/1400x600" alt="control room">
  </div>
  <div class="nav-wrapper container">
    <a href="index.html" class="brand-logo"><i class="material-icons">camera</i>{{ env('APP_NAME') }}</a>
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="#">Home</a></li>
      <li class="active"><a href="#">Blog</a></li>
      <li><a class='dropdown-button' href='#' data-activates='feature-dropdown' data-belowOrigin="true" data-constrainWidth="false">Features<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
    <!-- Dropdown Structure -->
    <ul id='feature-dropdown' class='dropdown-content'>
      <li><a href="full-header.html">Fullscreen Header</a></li>
      <li><a href="horizontal.html">Horizontal Style</a></li>
      <li><a href="no-image.html">No Image Expand</a></li>
    </ul>

  </div>

  <div class="nav-header valign-wrapper">
    <div class="center">
      <h1>I make things</h1>
      <div class="tagline">Portfolio</div>
    </div>
  </div>
</nav>
<!-- /. end Navbar and Header -->
