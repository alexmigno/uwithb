<?php
/**
 * @name crimsonFilterPostTypeByTaxonomyIntoAdmin
 * Funzione che crea un menu a tendina col quale filtrare i contenuti inseriti in base alla tassonomia di appartenenza. 
 * Può essere applicata a tutti i post type (custom e non) e alle taxonomy del sito (custom e non). 
 * @param null
 * @return null
 * 
 */
 
function crimsonFilterPostTypeByTaxonomyIntoAdmin() {
		global $typenow;
		$post_type = 'strutture'; // change HERE
		$taxonomy = 'tipologia-struttura'; // change HERE
		if ($typenow == $post_type) {
			$selected = isset($_GET[$taxonomy]) ? $_GET[$taxonomy] : '';
			$info_taxonomy = get_taxonomy($taxonomy);
			wp_dropdown_categories(array(
				'show_option_all' => __("Show All {$info_taxonomy->label}"),
				'taxonomy' => $taxonomy,
				'name' => $taxonomy,
				'orderby' => 'name',
				'selected' => $selected,
				'show_count' => true,	
				'hide_empty' => true,
			));
		};
	}

	add_action('restrict_manage_posts', 'crimsonFilterPostTypeByTaxonomyIntoAdmin');



/**
 * @name crimsonConvertIdToTermInQuery
 * Funzione che sostituisce l'id della tassonomia con il suo slug nella query generata dal filtraggio
 * @param null
 * @return null
 * 
 */

	function crimsonConvertIdToTermInQuery($query) {
		global $pagenow;
		$post_type = 'strutture'; // change HERE
		$taxonomy = 'tipologia-struttura'; // change HERE
		$q_vars = &$query->query_vars;
		if ($pagenow == 'edit.php' && isset($q_vars['post_type']) && $q_vars['post_type'] == $post_type && isset($q_vars[$taxonomy]) && is_numeric($q_vars[$taxonomy]) && $q_vars[$taxonomy] != 0) {
			$term = get_term_by('id', $q_vars[$taxonomy], $taxonomy);
			$q_vars[$taxonomy] = $term->slug;
		}
	}

	add_filter('parse_query', 'crimsonConvertIdToTermInQuery');


?>