 <?php 

     $app_id = "224170954274036";

     $canvas_page = "http://apps.facebook.com/make_rupiah/";

     $auth_url = "https://www.facebook.com/dialog/oauth?client_id=224170954274036
     &redirect_uri=http://apps.facebook.com/make_rupiah/&scope=email,read_stream

     $signed_request = $_REQUEST["signed_request"];

     list($encoded_sig, $payload) = explode('.', $signed_request, 2); 

     $data = json_decode(base64_decode(strtr($payload, '-_', '+/')), true);

     if (empty($data["user_id"])) {
            echo("<script> top.location.href='" . $auth_url . "'</script>");
     } else {
            echo ("Welcome User: " . $data["user_id"]);
     } 
 ?>