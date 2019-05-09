<?php
//Host IP address or hostname of the target Kafka REST Proxy server. default : 127.0.0.1
//Port TCP port of the target Kafka REST Proxy server. Port:8082
//$url = <host>:<port>/<endPoint>
$url = "http://localhost:8082/topics";
//$url = "http://localhost:8082/topics/test_topic";
//$url = "http://localhost:8082/brokers";
       // Open a curl session for making the call
       $curl = curl_init($url);
       // set URL and other appropriate options
       curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
       curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
       curl_setopt($curl, CURLOPT_URL, $url);
       // curl response

       if($data = @curl_exec($curl)) {
        $data = json_decode($data,true);
           var_dump($data['configs']);
       }
