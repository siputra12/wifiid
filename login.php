<?php
function q($url,$postfields=null,$optional=null){
$ch = curl_init();$options = array(
                                CURLOPT_URL=>$url,
                                CURLOPT_RETURNTRANSFER=>TRUE,
                                CURLOPT_USERAGENT=>"Mozilla/5.0 (Window$
                                CURLOPT_SSL_VERIFYPEER=>FALSE,);
                if($postfields!==null){
                        $options[CURLOPT_POST] = TRUE;
                        $options[CURLOPT_POSTFIELDS] = $postfields;
                }
                if($optional!==null){
                        foreach ($optional as $key => $value) {
                                $options[$key] = $value;
                        }
                }
curl_setopt_array($ch,$options);
$ch_out = curl_exec($ch);
curl_close($ch);
unset($ch,$options);
return $ch_out;
}
echo "Your Url :        ";
$url = trim(fgets(STDIN));
$x = explode("landing2.wifi.id",q($url));
for($a=0;$a<10000000;$a++):
if(count($x)>1){
if($a%10==0):
        echo "#########################################################$
        echo"untuk berhenti ketik ctrl+z jika dari pc, dan\nVolume down$
        echo "#########################################################$
endif;
        echo "Sukses Login!!\n";
}else{
        die("Gagal Gan!!\n");
}
