<?php
session_start();
require_once("autoload.php");
require_once( 'Facebook/FacebookSession.php' );
require_once( 'Facebook/FacebookRedirectLoginHelper.php' );
require_once( 'Facebook/FacebookRequest.php' );
require_once( 'Facebook/FacebookResponse.php' );
require_once( 'Facebook/FacebookSDKException.php' );
require_once( 'Facebook/FacebookRequestException.php' );
require_once( 'Facebook/FacebookAuthorizationException.php' );
require_once( 'Facebook/GraphObject.php' );
require_once( 'Facebook/GraphUser.php' );
require_once('Facebook/Entities/AccessToken.php');
require_once( 'Facebook/HttpClients/FacebookHttpable.php' );
require_once( 'Facebook/HttpClients/FacebookCurl.php' );
require_once( 'Facebook/HttpClients/FacebookCurlHttpClient.php' );

use Facebook\HttpClients\FacebookHttpable;
use Facebook\HttpClients\FacebookCurl;
use Facebook\HttpClients\FacebookCurlHttpClient;
use Facebook\FacebookSession;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\FacebookResponse;
use Facebook\FacebookSDKException;
use Facebook\FacebookRequestException;
use Facebook\FacebookOtherException;
use Facebook\FacebookAuthorizationException;
use Facebook\GraphObject;
use Facebook\GraphSessionInfo;
use Facebook\GraphUser;
// init app with app id (APPID) and secret (SECRET)
FacebookSession::setDefaultApplication('1593771740836973','a7684509d803f9cfa97e4856f6edf52b');

// login helper with redirect_uri
if(isset($_GET['redirect_url']))
{
    $url=$_GET['redirect_url'];
    $helper = new FacebookRedirectLoginHelper( 'http://localhost/PrintBuddies/flatro/'.$url );

try {
    $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
    // When Facebook returns an error
} catch( Exception $ex ) {
    // When validation fails or other local issues
}

// see if we have a session
if ( isset( $session ) ) {
    // graph api request for user data
    $request = new FacebookRequest( $session, 'GET', '/me' );
    $response = $request->execute();
    // get response
    $graphObject = $response->getGraphObject(GraphUser::className());
    echo "hi ".$graphObject->getName();

    // print data
    echo  print_r( $graphObject, 1 );
} else {
    // show login url
    echo '<a href="' . $helper->getLoginUrl(array('scope'=>'public_profile,email'));
}

}
?>
