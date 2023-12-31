<header>
  <nav class="navbar navbar-expand-xl bg-light navbar-light fixed-top ">
    <div class="container-fluid">
      <a class="a_navbar navbar-brand logo_a_navbar" href="/">
        <img id="logo" src="./images/logo.jpg" alt="Logo" style="width: 195px; height: 60px;" title="Easy Home">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar" style="display: flex; justify-content: flex-end;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class=" a_navbar a_selected nav-link" href="../about.php">Despre noi</a>
          </li>
          <li class="nav-item">
            <a class="a_navbar nav-link" href="../#avantaje">Avantaje</a>
          </li>
          <li class="nav-item">
            <a class="a_navbar nav-link" href="../#asistenta">Asistenta</a>
          </li>
          <li class="nav-item">
            <a class="a_navbar nav-link" href="../#contact">Contact</a>
          </li>

          <?php
            if(isset($_SESSION['my_account_info'])) {
              $username = $_SESSION['my_account_info']['username'];
              $profile_picture = $_SESSION['my_account_info']['profile_picture'];

              $profile_picture_src = "/images/client_profile_pictures";
              if($profile_picture === '') {
                $profile_picture_src = $profile_picture_src . "/avatar.png";
              } else {
                $profile_picture_src = $profile_picture_src . "/$username/$profile_picture";
              }

              echo "                
                <li>
                  <div class='avatar-dropdown'>
                    <img src='$profile_picture_src' alt='Avatar' class='avatar-profile-picture class='avatar-dropdown-btn' />
                    <span class='avatar-dropdown-btn' style='font-weight: bold;'>$username</span>
                    
                    <div class='avatar-dropdown-content'>
                      <a href='./lucrarile_mele.php'>Lucrarile mele</a>
                      <a href='./lucrari_anterioare.php'>Lucrari anterioare</a>
                      <a href='./my_account.php'>Contul meu</a>
                      <a href='./logout.php'>Deconectare</a>
                    </div>
                  </div>
                </li>
              ";              
            } else {
              echo "
                <li style='padding-top: 7px;'>
                  <div class='avatar-dropdown'>
                    <span class='avatar-dropdown-btn' style='font-weight: bold; font-size: 16px;'>Contul meu <span style='font-size: 11px;'>▼</span></span>
                    
                    <div class='avatar-dropdown-content'>
                      <a href='/login.php'>Login</a>
                      <a href='/signup.php'>Signup</a>
                    </div>
                  </div>
                </li>
              ";              
            }
          ?>
      </div>
      </ul>
    </div>
    </div>
  </nav>
</header>