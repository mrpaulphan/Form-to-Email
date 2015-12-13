<?php

# Include the Autoloader (see "Libraries" for install instructions)
require '../vendor/autoload.php';
use Mailgun\Mailgun;

// Mailgun Sandbox API Key and Domain
$mgClient = new Mailgun('key-43deec8f2e5725a3c383bf0999cc60d9');
$domain   = "sandboxb124b1de59a14ed38f8829231a236902.mailgun.org";

$name  = $_POST['name'];
$email = $_POST['email'];

if (isset($_POST)) {
    if (empty($_POST['name'])) {
        echo "empty name";
        
    } else {
        //form validation successful - process data here!!!!
        //Make the call to the client.
        $result = $mgClient->sendMessage($domain, array(
            'from' => 'Testing <no-reply@mrpaulphan.com>',
            'to' => 'Paul <paul@mrpaulphan.com>',
            'subject' => 'Hello',
            'text' => 'Testing some Mailgun awesomness! $name'
        ));
        echo "Email Submitted";
        
    }
}