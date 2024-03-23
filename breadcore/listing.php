<!DOCTYPE HTML>
<html lang='en'>

<body>
    <?php get_header(); ?>
     <div class="content">
     <h1 id="title" class="text-center text-[20vh] text-white underline underline-offset-[20px]">
    <?php echo get_the_title();?>
    </h1>
     <?php echo get_the_posts(); ?>
     <h1>this is listing</h1>
    </div>
<?php get_footer(); ?> 
</body>
</html>