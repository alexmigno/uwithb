<?php

//ricavo l'id del genitore della pagina corrente
$gerarchia = array_reverse(get_post_ancestors($post->ID));

$numeroAntenati = count($gerarchia);

if ($numeroAntenati == 0) {
    $idPaginaPadre = $post->ID;
}
if ($numeroAntenati == 1) {
    $idPaginaPadre = $gerarchia[0];
}
if ($numeroAntenati == 2) {
    $idPaginaPadre = $gerarchia[0];
}


$children = get_pages('child_of=' . $idPaginaPadre);
if (count($children) != 0):

    echo '<div class="box-menu-subpage">
    <ul class="noList">';

    echo '<li>';
    echo '<a href="' . get_permalink($idPaginaPadre) . '">' . get_the_title($idPaginaPadre) . '</a>';
    echo '</li>';

    $args = array(
        'child_of' => $idPaginaPadre,
        'title_li' => __(''),
        'echo' => 1,
        'depth' => 1,
        'sort_column' => 'menu_order, post_title',
        'link_before' => ' ',
        'link_after' => '',
        'walker' => '',
        'post_type' => 'page',
        'post_status' => 'publish'
    );
    wp_list_pages($args);




    echo '</ul>
</div><!--subpage-->';


endif;
?>
    