<?php

if ( ! isset( $_SERVER['HTTP_X_GITHUB_EVENT'] ) || ! isset( $_SERVER['HTTP_X_GITHUB_DELIVERY'] ) ) {
        die();
}

if ( ! isset( $_GET['deploy_package'] ) || 'lists.web.wsu.edu' !== $_GET['deploy_package'] ) {
        die();
}

$payload = json_decode( $_REQUEST['payload'] );

if ( 'create' === $_SERVER['HTTP_X_GITHUB_EVENT'] && 'tag' === $payload->ref_type ) {
        $tag = $payload->ref;
        if ( 0 === preg_match( '|^([a-zA-Z0-9-.])+$|', $tag ) ) {
                die( 'Invalid tag format' );
        }

        shell_exec( 'sh /home/www-data/deploy-lists.sh' . $tag . ' > /var/www/lists/deploy-results.txt' );
        die( 'Deploy ' . $tag );
} else {
        die();
}

