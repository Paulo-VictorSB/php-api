<?php

# CREDENCIAIS VÁLIDAS:
# cliente_um      -> 4KPd2BEqPteIQrrxoY9TPtnVhsarhKk6
# cliente_dois    -> Eg4gDy8zH9D0dpPeN2pAm9kLYhyKEiS9
# cliente_três    -> JYaDgZyHnHHy40CUGrtNI6Ckf9AILY9Y

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/php-api/test_api_2/03_endpoint_api_key/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array('Api-Key: 4KPd2BEqPteIQrrxoY9TPtnVhsarhKk6'),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
