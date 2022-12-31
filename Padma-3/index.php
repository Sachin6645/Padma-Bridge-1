<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    <!-- header part start -->
    <header class="container-fluid slider">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <?php
        $cate = new WP_Query([
            'post_type'=>'post',
            'category_name'=>'slide1'
        ])

        
        ?>
  <div class="carousel-inner">
    <?php 
    $x = 0;
    while($cate->have_posts()){$cate->the_post();
        $x++;

    ?>
    <div class="carousel-item <?=($x==1)?'active':''?>">
     <?php the_post_thumbnail();?>
    </div>
  <?php }?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </header>
    <!-- header part end -->
    <!-- logo part start -->
    <section class="container-fluid logo">
        <div class="row">
            <div class="col-sm-6">
                <?php the_custom_logo();?>
            </div>
            <div class="col-sm-6 text-end">
                <?php dynamic_sidebar('bdlogo1');?>
            </div>
        </div>
    </section>
    <!-- logo part end -->
    <!-- menu part start -->
    <section class="container  navbar-expand bg-light menu">
        <?php 
        wp_nav_menu([
            'theme_location'=>'PM',
            'menu_class'=>'navbar-nav'
        ])
        ?>

    </section>
    <!-- menu part end -->
    <!-- hero part start -->
    <section class="container hero text-center mt-5">
        <div class="row">
            <?php dynamic_sidebar('herotitle');?>
        </div>
        <div class="row mt-5">
            <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('card1');?>

            </div>
            </div>
            <div class="col-sm-4"> 
                <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('card1');?>

            </div></div>
            <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
            <?php dynamic_sidebar('card1');?>

            </div>
            </div>
        </div>
    </section>
    <!-- hero part end -->
    <!-- photo part start -->
    <section class="container photo">
        <div class="row text-center mt-5">
            <div class="col-sm-5">
                <?php dynamic_sidebar('lineleft');?>
            </div>
            <div class="col-sm-2 tt">
            <?php dynamic_sidebar('phototitle');?>
            </div>
            <div class="col-sm-5">
            <?php dynamic_sidebar('lineright');?>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
            <?php dynamic_sidebar('photocard1');?>

            </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
            <?php dynamic_sidebar('photocard1');?>

            </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
            <?php dynamic_sidebar('photocard1');?>

            </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 16rem;">
            <?php dynamic_sidebar('photocard1');?>

            </div>
            </div>
        </div>
    </section>
    <!-- photo part end -->
    <!-- news part start -->
    <section class="container news">
        <div class="row text-center mt-5">
        <div class="col-sm-5">
                <?php dynamic_sidebar('lineleft');?>
            </div>
            <div class="col-sm-2 tt">
            <?php dynamic_sidebar('newstitle');?>
            </div>
            <div class="col-sm-5">
            <?php dynamic_sidebar('lineright');?>
            </div>
            
        </div>
        <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <?php
        $cate = new WP_Query([
            'post_type'=>'post',
            'category_name'=>'slide1'
        ])

        
        ?>
  <div class="carousel-inner">
    <?php 
    $x = 0;
    while($cate->have_posts()){$cate->the_post();
        $x++;

    ?>
    <div class="carousel-item <?=($x==1)?'active':''?>">
     <?php the_title();?>
    </div>
  <?php }?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
    </section>
    <!-- news part end -->
    <!-- footer part start -->
    <footer class="container-fluid foot">
        <section class="container">
        <div class="row ft">
            <div class="col-sm-8 ft_left">
                <?php dynamic_sidebar('ftleft');?>
            </div>
            <div class="col-sm-4 ft_right">
            <?php dynamic_sidebar('ftright');?>
            </div>
        </div>
        <div class="row fb">
            <div class="col-sm-6 fb_left">
            <?php dynamic_sidebar('fbleft');?>

            </div>
            <div class="col-sm-6 fb_right">
            <?php dynamic_sidebar('fbright');?>
            </div>

        </div>
        </section>
   
    </footer>
    <!-- footer part end -->
    <?php wp_footer();?>
</body>
</html>