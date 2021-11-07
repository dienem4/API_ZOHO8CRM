<?php
function generate_access_token(){
    $post =[
        'refresh_token' => '1000.4b07df75c9c799db4984ffe64d242193.1c066d7b5b4839ae951261b634a21c9c',
        'client_id' => '1000.1EK2JW10YY765V6FYCGVTBVHM85NBD',
        'client_secret' => '9d02722b217df834e15e1175204146faeec617f232',
        'grant_type' => 'refresh_token'
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://accounts.zoho.eu/oauth/v2/token");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($post));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch,CURLOPT_HTTPHEADER, array('content_Type: application/x-www-from-urlencoded'));

    $response = curl_exec($ch);
    $response = json_decode($response);
    //return $response->acces_token;
    echo'<pre>';print_r($response );
}
   generate_access_token();
?>