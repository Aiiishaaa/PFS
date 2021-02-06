( function( api ) {

	// Extends our custom "spintech" section.
	api.sectionConstructor['spintech'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );