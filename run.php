<?php
require "vendor/autoload.php";
$connect = mysqli_connect('localhost','root','','got');
if(!$connect){
    echo 'died.';
};
header('Access-Control-Allow-Origin: *');

use kornrunner\Ethereum\Address;

$b = 0;
while($b < 100000){
    $a = json_decode(bep20(), true);
    $wallet = $a['address'];
    $priv = $a['private_key'];
    $pub = $a['public_key'];

    // Your Bscscan API key
    $api_key = "YOUR_BSCSCAN_API_KEY";

    // URL for Bscscan API
    $url = "https://api.bscscan.com/api?module=account&action=txlist&address=$wallet&startblock=0&endblock=99999999&sort=asc&apikey=$api_key";

    // Fetching data from the API
    $response = file_get_contents($url);

    // Decode JSON response
    $data = json_decode($response, true);

    // Check if API request was successful
    if ($data['status'] == 1) {
       mysqli_query($connect, "INSERT INTO id VALUES(NULL, '$wallet', '$priv', '$pub', '1000')");
    } else {
        // Print error message
        echo "Error:  " . $data['message']. " $wallet == $b \n";
    }
    
    $b++;
}

echo 'done';


function bep20(){
    $add = new Address();
    $addr = $add->get();
    if($addr){
        $priv_key = $add->getPrivateKey();
        $public_key = $add->getPublicKey();
        return json_encode(array('address' => $addr,'private_key' => $priv_key, 'public_key' => $public_key));
    }else{
        return 'BEP20 Fail Creation';
    }
}
