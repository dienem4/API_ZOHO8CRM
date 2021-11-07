<?php
   function get_records(){
    
    $access_token='  1000.a132a24f60a0293fff4d2fcef1019ed7.aff3869a6a5a51b74c4060af0d63ac79';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://www.zohoapis.eu/crm/v2/Leads");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch,CURLOPT_HTTPHEADER, array('Authorization: Zoho-oauthtoken'. $access_token,'Content_Type: application/x-www-from-urlencoded'));

    $response = curl_exec($ch);
    print_r($response);
    

   }
         get_records();
?>