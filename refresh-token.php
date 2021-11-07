<?php

 function generate_refresh_token(){
     $post =[
         'code'    =>'1000.4aea6fc2c3277d763bd4238e3bd087eb.1c01cb0542d9575f7a44c91064e6e7bb',
         'redirect_uri'   => 'http://example.eu/yourcallback',
         'client_id'  =>'1000.1EK2JW10YY765V6FYCGVTBVHM85NBD',
         'client_secret'   => '9d02722b217df834e15e1175204146faeec617f232',
         'grant_type'  =>  'authorization_code'
     ];
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, "https://accounts.zoho.eu/oauth/v2/token");
     curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($post));
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
     curl_setopt($ch,CURLOPT_HTTPHEADER, array('content_Type: application/x-www-from-urlencoded'));

     $response = curl_exec($ch);
     $response = json_encode($response);
     var_dump($response);
    
 }
   generate_refresh_token();
?>