<!-- MENU -->
<section class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>

               <!-- lOGO TEXT HERE -->
               <a href="index.php" class="navbar-brand"><i class="fa fa-h-square"></i>CureCo</a>
          </div>

          <!-- MENU LINKS -->
          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <?php if (isset($_SESSION['name'])) : ?>
                         <li><a href="<?php echo URLROOT; ?>/pages/dashboard" class="smoothScroll">DASHBOARD</a></li>
                         <li class="appointment-btn"><a href="<?php echo URLROOT; ?>/pages/register">new admin</a></li>
                         <li class="appointment-btn"><a href="<?php echo URLROOT; ?>/Users/logout">LOGOUT</a></li>
                         <li class="appointment-btn"><a href="<?php echo URLROOT; ?>/pages/statistique">statistique</a></li>
                         
                    <?php else : ?>
                         <li><a href="<?php echo URLROOT; ?>/pages/index" class="smoothScroll">HOME</a></li>
                         <li><a href="<?php echo URLROOT; ?>/pages/about" class="smoothScroll">ABOUT US</a></li>
                         <li class="appointment-btn"><a href="<?php echo URLROOT; ?>/pages/login">LOGIN</a></li>
                    <?php endif; ?>
               </ul>
          </div>

     </div>
     <div>
          <?php if (isset($_SESSION['name'])) : ?>
              <p>welcome back <?= $_SESSION['name'] ?></p> 
          <?php endif; ?>

     </div>
</section>

<script>
    var bar = document.querySelector('.bar');
    var x=document.querySelector('.navx');
    var nav = document.querySelector('.navUl');
    bar.addEventListener('click',e=>{
        nav.classList.remove('max-md:hidden');
    })
    x.addEventListener('click',e=>{
        nav.classList.add('max-md:hidden');
    });
</script>