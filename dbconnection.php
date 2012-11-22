<?php
	// database config
	$database_host = "localhost";
	$database_user = "root";
	$database_pass = "password";
	$database_name = "test";

	$database_link = mysql_connect( $database_host, $database_user, $database_pass );

	if ( ! $database_link ) {
		die( "This sample requires a Mysql database. Please edit the configuration file: <b>dbconnection.php</b>. <hr><b>Mysql error</b>: " . mysql_error() );
	}

	$db_selected = mysql_select_db( $database_name );

	if ( ! $db_selected ) {
		die( "This sample requires a Mysql database. Please edit the configuration file: <b>dbconnection.php</b>. <hr><b>Mysql error</b>: " . mysql_error() );
	}

	function mysql_query_excute( $sql ){
		$result = mysql_query($sql);

		if (!$result) {
			$message  = 'Invalid query: ' . mysql_error() . "\n";
			$message .= 'Whole query: ' . $sql;
			die($message);
		}

		return $result;
	}

    function find_by_provider_uid( $provider, $provider_uid ){
        $sql = "SELECT * FROM users WHERE provider = '$provider' AND provider_uid = '$provider_uid' LIMIT 1";

        $result = mysql_query_excute($sql);

        return mysql_fetch_assoc($result);
    }

    function create_new_user( $provider, $provider_uid, $display_name, $profile_url, $photo_url, $seat_id ){
        $sql = "INSERT INTO users ( provider, provider_uid, display_name, profile_url, photo_url, seat_id) VALUES ( '$provider', '$provider_uid', '$display_name', '$profile_url', '$photo_url', '$seat_id') ";
        mysql_query_excute($sql);

        return mysql_insert_id();
    }

    function find_by_user_id( $user_id ){
        $sql = "SELECT * FROM users WHERE user_id = '$user_id' LIMIT 1";

        $result = mysql_query_excute($sql);

        return mysql_fetch_assoc($result);
    }

    function find_all_users(){
        $sql = "SELECT * FROM users";
        $result = mysql_query($sql);
        return $result;
    }