<?php
    //debug.php
    ini_set('display_errors', 1);
    error_reporting(E_ALL|E_STRICT);

    //session_start();
	// config and includes
   	$config = dirname(__FILE__) . '/library/hybridauth/config.php';
    require_once( "library/hybridauth/Hybrid/Auth.php" );
    //require_once("dbconnection.php");
    $provider_name = $_GET['provider'];

	try{
		$hybridauth = new Hybrid_Auth( $config );
		$adapter = $hybridauth->authenticate( $provider_name );

		// return TRUE or False before getting user profile.
		$is_user_logged_in = $adapter->isUserConnected();

        if ($is_user_logged_in){
            // get the user profile
            $user_profile = $adapter->getUserProfile();

            // access user profile data
            // echo "Ohai there! U are connected with: <b>{$adapter->id}</b><br />";
           // echo "As: <b>{$user_profile->displayName}</b><br />";
           // echo "display name :($user_profile->displayName)";
           // echo "And your provider user identifier is: <b>{$user_profile->identifier}</b><br />";
           // echo "profile :($user_profile->profileURL)";

            // check if user exist in db;
            $user_id = find_by_provider_uid($provider_name, $user_profile->identifier);
            echo "user_id > ($user_id)";

            if( $user_id ){ // if user exist on database
                       // create a session for the user whithin your application
                       // and redirect him back to the profile or dashboard page
                // 2.1 - store user_id in session
                $_SESSION["user"] = $user_id;

                // 2.2 - redirect to user/profile
                header( "Location: 404.html" );
            }
            else{ // if not, create a new one

                // assign a seat, get from ajax
                /*
                $json_obj = $_POST['postData'];
                $sid = $json_obj['seatId'];
                error_log('I obtain sid as' + $sid);

                //$sid = json_decode($_POST['seatId']);
                error_log(print_r($_POST, true));

                echo json_encode(
                    array("status" => $sid)
                );
                */

                $sid = $_GET['seatId'];
                error_log('sid  is -->'.$sid);
                create_new_user( $provider_name, $user_profile->identifier, $user_profile->displayName, $user_profile->profileURL, $user_profile->photoURL, $sid);

                header( "Location: index.php" );
            }

            // logout
            echo "Logging out..";
            $adapter->logout();
        }
	}
	catch( Exception $e ){  
		// In case we have errors 6 or 7, then we have to use Hybrid_Provider_Adapter::logout() to 
		// let hybridauth forget all about the user so we can try to authenticate again.

		// Display the recived error, 
		// to know more please refer to Exceptions handling section on the userguide
		switch( $e->getCode() ){ 
			case 0 : echo "Unspecified error."; break;
			case 1 : echo "Hybridauth configuration error."; break;
			case 2 : echo "Provider not properly configured."; break;
			case 3 : echo "Unknown or disabled provider."; break;
			case 4 : echo "Missing provider application credentials."; break;
			case 5 : echo "Authentification failed. " 
					  . "The user has canceled the authentication or the provider refused the connection."; 
				   break;
			case 6 : echo "User profile request failed. Most likely the user is not connected "
					  . "to the provider and he should to authenticate again."; 
				   $adapter->logout();
				   break;
			case 7 : echo "User not connected to the provider."; 
				   $adapter->logout();
				   break;
			case 8 : echo "Provider does not support this feature."; break;
		} 

		// well, basically your should not display this to the end user, just give him a hint and move on..
		echo "<br /><br /><b>Original error message:</b> " . $e->getMessage();

		echo "<hr /><h3>Trace</h3> <pre>" . $e->getTraceAsString() . "</pre>"; 

		/*
			// If you want to get the previous exception - PHP 5.3.0+ 
			// http://www.php.net/manual/en/language.exceptions.extending.php
			if ( $e->getPrevious() ) {
				echo "<h4>Previous exception</h4> " . $e->getPrevious()->getMessage() . "<pre>" . $e->getPrevious()->getTraceAsString() . "</pre>";
			}
		*/
	}