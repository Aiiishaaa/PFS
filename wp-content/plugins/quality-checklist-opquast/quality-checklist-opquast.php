<?php
/*
 * Plugin Name:       Quality Checklist Opquast
 * Plugin URI:        https://jeanbaptisteaudras.com/portfolio/wordpress-reading-progressbar-indicator-plugin/
 * Description:       Checklist qualité web Opquast pour WordPress
 * Version:           0.2
 * Author:            audrasjb
 * Author URI:        https://jeanbaptisteaudras.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text-domain:       quality-checklist-opquast
 */
 
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*
 * Settings page
 */

// Styles
function qco_admin_body_class( $classes ) {
	$current_screen = get_current_screen();
	if ( 'tools_page_opquast' === $current_screen->id ) {
		$classes .= ' site-health ';
	}
	return $classes;	
}
add_filter( 'admin_body_class', 'qco_admin_body_class' );

function qco_load_admin_styles( $hook ) {
	if ( 'tools_page_opquast' === $hook ) {
		wp_enqueue_style( 'site-health' );
		wp_register_style( 'opquast-styles', plugin_dir_url( __FILE__ ) . '/css/opquast-styles.css' );
		wp_enqueue_style( 'opquast-styles' );
		wp_enqueue_script( 'site-health' );
		wp_register_script( 'opquast-scripts', plugin_dir_url( __FILE__ ) . '/js/opquast-scripts.js', 'jquery' );
		wp_enqueue_script( 'opquast-scripts' );
	}
}
add_action( 'admin_enqueue_scripts', 'qco_load_admin_styles' );

function qco_submenu_page() { 
	add_submenu_page( 'tools.php', esc_html__( 'Checklist Opquast', 'quality-checklist-opquast' ), esc_html__( 'Checklist Opquast', 'quality-checklist-opquast' ), 'manage_options', 'opquast', 'qco_submenu_page_callback' );
}
add_action( 'admin_menu', 'qco_submenu_page' );

function qco_submenu_page_callback() {
	?>
	<form action="" method="post">
		<input type="hidden" name="nonce" value="<?php echo wp_create_nonce( 'qco_nonce' ) ?>">

		<div class="health-check-header">
			<div class="health-check-title-section">
				<h1>
					<img src="<?php echo plugin_dir_url( __FILE__ ); ?>/data/opquast-logo.png" alt="" />
					Checklist qualité web Opquast
					<input type="submit" class="button button-primary opquast-button" value="<?php esc_html_e( 'Enregistrer les modifications', 'quality-checklist-opquast' ); ?>">
				</h1>
			</div>
		</div>
	
		<hr class="wp-header-end" />
	
		<div class="notice notice-error hide-if-js">
			<p><?php esc_html_e( 'This screen requires JavaScript.', 'quality-checklist-opquast' ); ?></p>
		</div>

			<?php
			$current_criteria = get_option( 'opquast-checklist' );
			if ( isset( $_POST ) && ! empty( $_POST ) ) {
				if ( wp_verify_nonce( $_POST['nonce'], 'qco_nonce' ) ) {
					$received_criteria = $_POST['opquast-checklist'];
					$current_criteria = array();
					foreach ( $received_criteria as $key => $value ) {
						$current_criteria[intval($key)] = sanitize_text_field( $value );
					}
					update_option( 'opquast-checklist', $current_criteria );
					?>
					<div class="notice notice-success is-dismissible">
						<p>Critères mis à jour</p>
					</div>
					<?php
				}
			}
			?>
	
		<div class="health-check-body hide-if-no-js">
			<div class="site-status-has-issues">
				<img class="logo-opquast" src="<?php echo plugin_dir_url( __FILE__ ); ?>/data/opquast-logo-full.png" alt="" />
				<h3 class="site-health-issue-count-title">Statut de la vérification Opquast</h3>

				<div class="opquast-stats">
					<?php display_qco_stats(); ?>
				</div>
				
			</div>
	
		<?php qco_list_criteria( 'unverified', $current_criteria ); ?>
	
	</form>
	<?php
}

/*
 * Core functions
 */
function qco_get_criteria_from_json() {
	$get_json = file_get_contents( __DIR__ . '/data/data-fr.json' );
	$criteria = json_decode( $get_json );
	return $criteria;
}
function qco_get_criteria_content_from_json() {
	$get_json = file_get_contents( __DIR__ . '/data/data-fr-content.json' );
	$criteria_content = json_decode( $get_json );
	return $criteria_content;
}

function qco_get_thematiques_from_json() {
	$get_json = file_get_contents( __DIR__ . '/data/data-fr-thematiques.json' );
	$thematiques = json_decode( $get_json );
	return $thematiques;
}

function display_qco_stats() {
	?>
	<ul class="opquast-stats">
	<?php if ( get_qco_stats_count( 'ok' ) ) : ?>
		<li>
			<span class="dashicons dashicons-yes-alt opquast-stat-green"></span>
			<?php 
			$count_stat = get_qco_stats_count( 'ok' );
			echo sprintf( _n( '%s critère conforme.', '%s critères conformes.', $count_stat, 'quality-checklist-opquast' ), $count_stat );
			?>
		</li>
	<?php endif; ?>
	<?php if ( get_qco_stats_count( 'ko' ) ) : ?>
		<li>
			<span class="dashicons dashicons-warning opquast-stat-red"></span>
			<?php 
			$count_stat = get_qco_stats_count( 'ko' );
			echo sprintf( _n( '%s critère non conforme.', '%s critères non conformes.', $count_stat, 'quality-checklist-opquast' ), $count_stat );
			?>
		</li>
	<?php endif; ?>
	<?php if ( get_qco_stats_count( 'na' ) ) : ?>
		<li>
			<span class="dashicons dashicons-dismiss opquast-stat-blue"></span>
			<?php 
			$count_stat = get_qco_stats_count( 'na' );
			echo sprintf( _n( '%s critère non applicable.', '%s critères non applicables.', $count_stat, 'quality-checklist-opquast' ), $count_stat );
			?>
		</li>
	<?php endif; ?>
	<?php if ( get_qco_stats_count( 'nv' ) ) : ?>
		<li>
			<span class="dashicons dashicons-marker opquast-stat-grey"></span>
			<?php 
			$count_stat = get_qco_stats_count( 'nv' );
			echo sprintf( _n( '%s critère non vérifié pour l’instant.', '%s critères non vérifiés pour l’instant.', $count_stat, 'quality-checklist-opquast' ), $count_stat );
			?>
		</li>
	<?php endif; ?>
	</ul>
	<p class="opquast-licence">
		Les bonnes pratiques Opquast sont proposées sous licence <a href="https://creativecommons.org/licenses/by-sa/2.0/fr/" title="Creative Commons - Attribution - Partage dans les Mêmes Conditions (CC BY-SA 2.0 FR)" target="_blank" rel="noopener noreferrer">CC BY-SA <span class="screen-reader-text">(ce lien s'ouvre dans un nouvel onglet)</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a>
		<br />
		Les moyens de contrôle et de mise en œuvre sous licence <a href="https://creativecommons.org/licenses/by-nc-sa/2.0/fr/" title="Creative Commons - Attribution - Pas d’Utilisation Commerciale - Partage dans les Mêmes Conditions (CC BY-NC-SA 2.0)" target="_blank" rel="noopener noreferrer">CC BY-NC-SA <span class="screen-reader-text">(ce lien s'ouvre dans un nouvel onglet)</span><span aria-hidden="true" class="dashicons dashicons-external"></span></a>
	</p>
	<p class="opquast-licence">
		<a href="https://checklists.opquast.com/fr/" target="_blank" rel="noopener noreferrer">
			En savoir plus sur les checklists Opquast
			<span class="screen-reader-text"> (s’ouvre dans un nouvel onglet)</span>
			<span aria-hidden="true" class="dashicons dashicons-external"></span>
		</a>
	</p>
	<?php
}

function get_qco_stats_count( $status = '' ) {
	if ( empty( $status ) ) {
		return;
	}
	$criteria = qco_get_criteria_from_json(); 
	
	$existing_criteria = array();
	if ( ! empty( get_option( 'opquast-checklist' ) ) ) {
		$existing_criteria = get_option( 'opquast-checklist' );
	}
	
	$corresponding_criteria = array();
	if ( $status === 'nv' ) {
		return count( $criteria ) - count( $existing_criteria );		
	} else {
		foreach ( $existing_criteria as $key => $value ) {
			if ( $value === $status ) {
				$corresponding_criteria[] = $key;
			}
		}
		return count( $corresponding_criteria );
	}
}

function qco_list_criteria( $verified = '', $current_criteria = array() ) {
	$criteria = qco_get_criteria_from_json(); 
	$criteria_content = (array) qco_get_criteria_content_from_json();
	$i = 0;
	?>
	<div class="site-health-issues-wrapper <?php // hidden ?>" id="health-check-issues-<?php echo $verified; ?>">
		<h3 class="site-health-issue-count-title" id="health-check-issues-general-title"><span class="issue-count"><?php echo count( $criteria ); ?></span> critères <span class="issue-type">au total</span></h3>
		
		<p>
			Filtrer par thématique :
			<?php
			$thematiques = qco_get_thematiques_from_json();
			if ( $thematiques ) :
				?>
					<select id="opquast-filter-thematiques">
						<option value="">Toutes les thématiques</option>
					<?php foreach ( $thematiques as $thematique ) : ?>
						<option value="thematique-<?php echo sanitize_title( $thematique ); ?>"><?php echo $thematique; ?></option>
					<?php endforeach; ?>
					</select>
				<?php 
			endif;
			?>
			<strong>ou</strong> par statut : 
			<select id="opquast-filter-status">
				<option value="">Tous les statuts</option>
				<option value="filter-ok">Conforme</option>
				<option value="filter-ko">Non conforme</option>
				<option value="filter-na">Non applicable</option>
				<option value="filter-nv">Non vérifié</option>
			</select>
		</p>		
		
		<div id="health-check-site-status-<?php echo $verified; ?>" class="health-check-accordion issues">
	<?php
	foreach ( $criteria as $item ) :
		$tags = explode( ',', $item->tags );
		$sanitized_tags = array();
		foreach ( $tags as $tag ) :
			$sanitized_tags[] = 'thematique-' . sanitize_title( $tag );
		endforeach;
		
		if ( 'ok' === $current_criteria[$item->id] ) :
			$status_label = 'Conforme';
			$status_value = 'filter-ok';
			$color = 'green';
		elseif ( 'ko' === $current_criteria[$item->id] ) :
			$status_label = 'Non conforme';
			$status_value = 'filter-ko';
			$color = 'red';
		elseif ( 'na' === $current_criteria[$item->id] ) :
			$status_label = 'Non applicable';
			$status_value = 'filter-na';
			$color = 'blue';
		else :
			$status_label = 'Non vérifié';
			$status_value = 'filter-nv';
			$color = 'grey';
		endif;
		?>
		<h4 class="health-check-accordion-heading <?php echo implode( ' ', $sanitized_tags ); ?> <?php echo $status_value; ?>">
			<button aria-expanded="false" class="health-check-accordion-trigger" aria-controls="health-check-accordion-block-<?php echo $i; ?>" type="button">
				<span class="title"><?php echo $item->id; ?>. <?php echo $item->title; ?></span>
				<span class="badge <?php echo $color; ?>"><?php echo $status_label; ?></span>
				<span class="icon"></span>
			</button>
		</h4>
		<div id="health-check-accordion-block-<?php echo $i; ?>" class="health-check-accordion-panel" hidden="hidden">
			<fieldset class="opquast-verification">
				<span>Statut :</span>
				<input type="radio" name="opquast-checklist[<?php echo $item->id; ?>]" id="input-ok-<?php echo $item->id; ?>" value="ok" <?php checked( $current_criteria[$item->id], 'ok' ); ?> />
				<label for="input-ok-<?php echo $item->id; ?>">Conforme</label>
				
				<input type="radio" name="opquast-checklist[<?php echo $item->id; ?>]" id="input-ko-<?php echo $item->id; ?>" value="ko" <?php checked( $current_criteria[$item->id], 'ko' ); ?> />
				<label for="input-ko-<?php echo $item->id; ?>">Non conforme</label>
				
				<input type="radio" name="opquast-checklist[<?php echo $item->id; ?>]" id="input-na-<?php echo $item->id; ?>" value="na" <?php checked( $current_criteria[$item->id], 'na' ); ?> />
				<label for="input-na-<?php echo $item->id; ?>">Non applicable</label>
			</fieldset>

			<div class="actions">
				<?php echo $criteria_content[$item->id]; ?>
				<p>
					<a href="<?php echo 'https://checklists.opquast.com' . $item->link ?>" target="_black" rel="noopener noreferrer">
						Consulter la fiche Opquast
						<span class="screen-reader-text"> (s’ouvre dans un nouvel onglet)</span>
						<span aria-hidden="true" class="dashicons dashicons-external"></span>
					</a>
				</p>
			</div>

			<?php
			$tags = explode( ',', $item->tags ); 
			if ( ! empty( $tags ) ) :
				?>
				<p class="opquast-tags">
					<?php foreach ( $tags as $tag ) : ?>
					<span class="badge blue"><?php echo $tag; ?></span>
					<?php endforeach; ?>
				</p>
				<?php 
			endif; 
			?>

		</div>
		<?php
		$i++;
	endforeach;
	?>
		</div>
	</div>
	<?php
}