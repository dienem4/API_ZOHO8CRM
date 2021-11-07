<?php
  function insert_leads(){

      $access_token = ' 1000.a132a24f60a0293fff4d2fcef1019ed7.aff3869a6a5a51b74c4060af0d63ac79';


      $post_data =[
          'data' =>[
              [
                  "Company" => "Personal",
                  "Last_Name" => "Cisse",
                  "First_Name" => "Alfousseyni",
                  "Email" => "cissealfousseyni@gmail.com",
                  "State" => "Villeurbanne",
                  "Phone" => "0512554555",
                  "Description" => "Etudiant en mathématique et informatique"
              ]
            ],

            'trigger'=>[
                "approval",
                "workflow",
                "blueprint"
            ]
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.zohoapis.eu/crm/v2/Leads");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,0);
        curl_setopt($ch,CURLOPT_HTTPHEADER, array('Authorization: Zoho-oauthtoken'. $access_token,'content_Type: application/x-www-from-urlencoded'));
   
        $response = curl_exec($ch);
        $response = json_encode($response);
        

        var_dump($response);
   }

      insert_leads();
?>