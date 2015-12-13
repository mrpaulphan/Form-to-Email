<?php 

# Include the Autoloader (see "Libraries" for install instructions)
require '../vendor/autoload.php';
use Mailgun\Mailgun;

// Mailgun Sandbox API Key and Domain
$mgClient = new Mailgun('key-43deec8f2e5725a3c383bf0999cc60d9');
$domain = "sandboxb124b1de59a14ed38f8829231a236902.mailgun.org";

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];

# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'    => $name . '<' . $email . '>',
    'to'      => 'Paul <paul@mrpaulphan.com>',
    'subject' => 'Hello',
    'text'    => 'Testing some Mailgun awesomness! $name' 
));
