( function( api ) {

	// Extends our custom "charitable-non-profit" section.
	api.sectionConstructor['charitable-non-profit'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );