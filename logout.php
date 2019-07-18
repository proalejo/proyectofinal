<?php

	session_start();

	session_destroy();

	define('SITE_FOLDER', 'Proyecto-Final');

    define('ROOT_URL', strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http'."://".$_SERVER['HTTP_HOST'] . "/" . SITE_FOLDER);

    header( 'Location: ' . ROOT_URL . '/index.php' );
