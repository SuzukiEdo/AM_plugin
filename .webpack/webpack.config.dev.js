/**
 * This file defines the development build configuration.
 */
const { helpers, externals, plugins, presets } = require( '@humanmade/webpack-helpers' );
const { choosePort, cleanOnExit, filePath } = helpers;

// Clean up manifests on exit.
cleanOnExit( [
	filePath( 'build/asset-manifest.json' ),
] );

module.exports = choosePort( 8080 ).then( port => {
	return presets.development({
		externals,
		entry: {
			'editor': filePath( 'editor/editor.js' ),
			'editor-frontend': filePath( 'editor/frontend.js' ),
			'theme': filePath( 'assets/theme.js' ),
			'admin': filePath( 'assets/admin.js' ),
			'editor-styles': filePath( 'assets/editor-styles.js' ),
		},
		devServer: {
			port,
		},
		output: {
			path: filePath( 'build' ),
			publicPath: `http://localhost:${ port }/build/`,
		},
		plugins: [
			plugins.clean(),
		],
	} );
} );
