/**
 * BLOCK: post-selector
 *
 * Registering a basic block with Gutenberg.
 * Simple block, renders and saves the same content without any interactivity.
 */

//  Import CSS.
import './editor.scss';
import './style.scss';
//https://developer.wordpress.org/block-editor/packages/packages-api-fetch/
import apiFetch from '@wordpress/api-fetch';

const { __ } = wp.i18n; // Import __() from wp.i18n
const { registerBlockType } = wp.blocks; // Import registerBlockType() from wp.blocks
registerBlockType( 'cgb/block-post-selector', {
	title: __( 'News Related' ), // Block title.
	icon: 'shield',
	category: 'common',
	attributes: {
		url: { type:'string' }
	},
	keywords: [
		__( 'News Related' )
	],

	edit: ( props ) => {
		function updateContent( event ) {
			props.setAttributes( { url: event.target.value } );
		}
		return wp.element.createElement(
			'div',
			'null',
			wp.element.createElement( 'h3', null, 'News Related' ),
			wp.element.createElement( 'input', { type: 'text', class: 'news__related__object', value: props.attributes.url, onChange: updateContent } )
		);
	},
	/*
	save: ( props ) => {
	},*/
} );
