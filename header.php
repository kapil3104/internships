<?php

      session_start();
      ?>
<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><h1 id="logo_title">SEEKERS</h1></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a href="index.php?work=true">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <?php
                          if(isset($_SESSION['userid'])){
                        ?>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account Panel <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php?add_intern=true" >Submit advertisement for internship</a></li>
                <li><a href="#">Account Settings</a></li>
                <li><a onclick="<?php session_destroy(); ?>" href="index.php">Logout</a></li>
              </ul>
            </li>

              <?php
                } else{
              ?>

              <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Log In</button>

                <!-- Modal -->
                <?php include ("login.php"); ?>
                </li>
                <li><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Register</button>

                <!-- Modal -->
                <?php include ("register.php"); ?>
                </li>
                <?php
                  }
              ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>