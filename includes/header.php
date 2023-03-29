  <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="main.php"><h2>Blog Site<em>.</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <?php while($getall=mysqli_fetch_assoc($getcat)){ ?>
              <li class="nav-item">
                <a class="nav-link" href="index.html">
                  <?php echo $getall['name']; ?>
                </a>
              </li> 
            <?php } ?>
            </ul>
          </div>
        </div>
      </nav>
    </header>