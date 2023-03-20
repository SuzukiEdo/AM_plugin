<?php
/**
 * Ajax class.
 *
 * @package    EdoAM
 * @subpackage Ajax
 * @author     SuzukiEdo <edo.suzuki@hotmail.com>
 */

namespace Edo\AMTable\Inc\Ajax;

Class EdoAjax
{

    // The API endpoint.
    protected $endpointUrl = 'https://miusage.com/v1/challenge/1/ ';

    public function __construct()
    {

        add_action( 'wp_ajax_edo_get_table', [ $this, 'edo_get_table' ] );
        add_action( 'wp_ajax_nopriv_edo_get_table', [ $this, 'edo_get_table' ] );

    }

    public function edo_get_table () {

        $table = wp_cache_get( 'edo_am_table_cache' );

        // Let's check if we have the table on cache before sending a new request.
        if ( $table === false ) {

            $json    = wp_safe_remote_get( $this->endpointUrl );
            $table   = json_decode( $json[ 'body' ] );
            $isValid = false;

            // We shall not trust any source.

        }

        return $table;
    }

}
