<?php
get_header(); //recupération du header de theme

?>

<?php
    if (have_posts()):
        while(have_posts()) : the_post();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1><?php the_title(); ?></h1>


<?php 
$affiche=get_field('image_du_film');
if($affiche){
    echo '<img src=" ' . esc_url($affiche['url']) . '" alt=" ' . esc_attr($affiche['alt']) . '">';
}

?>
<p><?php the_content() ; ?></p>

<p class="realisateur"> <stong>Réalisateur: </stong> <?php the_field('realisateur'); ?></p>


<?php 
        endwhile;
    endif;
?>

<?php
get_footer();//recupération du footer de theme


?>
</body>
</html>