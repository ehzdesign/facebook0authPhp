<?php

  //this file will connect our facebook app and get 0 auth link

  //Start the Session

  session_start();


  //Include the Facebook PHP SDK
  include('php-graph-sdk-5.0.0/src/Facebook/autoload.php');

  //Set out Facebook App ID
  $fb = new Facebook\Facebook([
    'app_id' => '1121560184548631',
    'app_secret' => '8e82fc87ff600b223a3764f18042d802',
    'default_graph_version' => 'v2.2'
  ]);

  //Get and 0Auth redirect object
  $helper = $fb->getRedirectLoginHelper();

  //Set level of permissions
  $permissions = ['email'];

  //get the 0auth URL
  $loginUrl = $helper->getLoginUrl('http://localhost:8080/Sites/phpFacebook/facebook-callback.php', $permissions);

  // print_r($loginUrl);

 ?>

 <html>
   <head>
     <meta charset="utf-8">
     <title>Facebook 0Auth</title>
   </head>
   <body>
     <h1>Facebok Link</h1>
     <a href="<?php echo loginUrl; ?>">Login with Facebook</a>
   </body>
 </html>
