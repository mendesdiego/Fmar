<?php
/* ----------------------------------------------------- */
/* Post Types */
/* ----------------------------------------------------- */
/* Criando um Post Type Personalizado */
add_action('init', 'docentes_register');
function docentes_register() {
	 $labels = array(
			'name' => 'Docentes',
			'singular_name' => 'Post',
			'all_items' => 'Todos Docentes',
			'add_new' => 'Adicionar Docentes',
			'add_new_item' => 'Adicionar Docentes',
			'edit_item' => 'Editar Docentes',
			'new_item' => 'Novo Docentes',
			'view_item' => 'Ver Docentes',
			'search_items' => 'Procurar Docentes',
			'not_found' =>  'Nada encontrado',
			'not_found_in_trash' => 'Nada encontrado no lixo',
			'parent_item_colon' => '',
			'menu_icon'   => 'teste',
	);
	$args = array(
 			'menu_icon' => 'dashicons-portfolio',
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => true,
			'has_archive' => true,
			'taxonomy' => array('categoria-docente'),
			'menu_position' => 6,
			'supports' => array('title','editor','comments','thumbnail','category','gallery','page-attributes'),
			'rewrite' => array('slug' => 'docente')
	  );
	register_post_type('docente',$args);
}


/* ----------------------------------------------------- */
/* Taxonomias */
/* ----------------------------------------------------- */
/* Criando uma Taxonomia Personalizada
register_taxonomy("categoria-Produto", array("produto"),
	array(
		"hierarchical" => true,
		"label" => "categoria",
		"singular_label" => "categoria Produto",
		'rewrite' => array( 'slug' => 'categoria-produto' )
	)
);*/

/*******************************************************/


add_action( 'restrict_manage_posts', 'my_restrict_manage_posts' );
function my_restrict_manage_posts() {
	global $typenow;
	$taxonomy = 'categoria-Produto';
	if( $typenow == 'produto' ){
		$filters = array($taxonomy);
		foreach ($filters as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);
			echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
			echo "<option value=''>Mostrar tudo</option>";
			foreach ($terms as $term) { echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>'; }
			echo "</select>";
		}
	}
}

// ADD COLUNA DE CUSTOM FIELD AO ADMIN
add_filter('manage_edit-cardapio_columns', 'minha_coluna'); // Altere o 'portifolio' pelo nome do seu custom-post-type
function minha_coluna($colunas) { // Inicia a função
	$colunas['categoria-Produto'] = 'categoria'; // Cria coluna Serviços
	return $colunas; // Exibe as colunas
}

add_action( 'manage_posts_custom_column' , 'custom_columns', 10, 2 );

function custom_columns( $column, $post_id ) {
	switch ( $column ) {
		case 'categoria-Produto':
			$terms = get_the_term_list( $post_id, 'categoria-servico', '', ',', '' );
			if ( is_string( $terms ) ) {
				echo $terms;
			} else {
				_e( 'Nenhuma Categoria adicionada' );
			}
			break;
	}
}

/******************REGISTRANDO POST TYPE SOLUÇÕES********************************/

$arrLabelsSolucoes= array(
  'name' => 'Todas as soluções',
  'add_new' => 'Adicionar solução',
  'add_new_item' => 'Nova solução',
  'edit_item' => 'Editar solução',
  'new_item' => 'Ver solução',
  'search_items' => 'Procurar pela solução',
  'not_found' => 'Nenhum registro encontrado',
  'not_found_in_trash' => 'Nada encotnrado na lixeira',
  'menu_name' => 'Soluções'
);
// registrando post type soluções
register_post_type('solucoes',  array(
  'labels' => $arrLabelsSolucoes,
  'public' => true,
  'rewrite' => true,
  'hierarchical' => true
)) ;

// registrando taxonomy para solucoes
register_taxonomy("categorias-solucoes", "solucoes", array(
  'label' => 'Categorias Solução',
  'rewrite' => true,
  'hierarchical' => true
)) ;


/*******************************************************************************/
