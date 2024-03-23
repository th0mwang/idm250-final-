<!DOCTYPE HTML>
<html lang='en'>

<body>
     <div class="content">
     <?php get_header(); ?>
        <h1 id="title" class="text-center text-[20vh] text-white underline underline-offset-[20px]">
            <?php echo get_the_title(); ?>
        </h1>
     <?php echo
          <h1>page2</h1>
     get_the_content(); ?>
    </div>
<?php get_footer(); ?> 
</body>
</html>