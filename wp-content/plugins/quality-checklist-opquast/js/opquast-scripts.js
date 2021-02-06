( function( $ ) {
	'use strict';
	jQuery(document).ready(function() {

		$( '#opquast-filter-thematiques' ).on( 'change', function() {
			var selected_thematique_slug = $( this ).val();
			var selected_thematique_title = $( this ).children( 'option:selected' ).text();
			var count = 0;
			$( '.health-check-accordion-heading' ).each( function() {
				$( this ).removeClass( 'hidden' );
				$( this ).next().attr( 'hidden', 'hidden' );
				if ( ! $( this ).hasClass( selected_thematique_slug ) && selected_thematique_slug !== '' ) {
					$( this ).addClass( 'hidden' );
				} else {
					count++;
				}
			});
			$( '#health-check-issues-general-title > .issue-count' ).text( count );
			if ( selected_thematique_slug === '' ) {
				$( '#health-check-issues-general-title > .issue-type' ).text( 'au total' );
			} else {
				$( '#health-check-issues-general-title > .issue-type' ).text( 'dans la rubrique : « ' + selected_thematique_title + ' »' );
			}
			$( '#opquast-filter-status > option[value=""]' ).prop( 'selected', true );
		});
		
		$( '#opquast-filter-status' ).on( 'change', function() {
			var selected_status_slug = $( this ).val();
			var selected_status_title = $( this ).children( 'option:selected' ).text();
			var count = 0;
			$( '.health-check-accordion-heading' ).each( function() {
				$( this ).removeClass( 'hidden' );
				$( this ).next().attr( 'hidden', 'hidden' );
				if ( ! $( this ).hasClass( selected_status_slug ) && selected_status_slug !== '' ) {
					$( this ).addClass( 'hidden' );
				} else {
					count++;
				}
			});
			$( '#health-check-issues-general-title > .issue-count' ).text( count );
			if ( selected_status_slug === '' ) {
				$( '#health-check-issues-general-title > .issue-type' ).text( 'au total' );
			} else {
				$( '#health-check-issues-general-title > .issue-type' ).text( 'avec le statut : « ' + selected_status_title + ' »' );
			}
			$( '#opquast-filter-thematiques > option[value=""]' ).prop( 'selected', true );
		});


	});
})( jQuery );
