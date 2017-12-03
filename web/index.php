<html> 
    <head> 
        <title>Cerca pizzerie</title> 
   </head> 
  <body> 
    <?php 
        echo ("Ecco tutte le pizzerie di bergamo:");
        $r = new HttpRequest('api.foursquare.com/v2/venues/49d51ce3f964a520675c1fe3?v=20171203&client_id=3AGUTWIPEQWCBRFCAHIN104WCY0IAPETGLTQIJUDP0JMIC5W&client_secret=NH1JI30DQ4YSF5PBSWMCTGPWLHBR1Z11VHYI5ELMV2MNAXNV
', HttpRequest::METH_POST);
       $r->setOptions(array('lastmodified' => filemtime('local.rss')));
        $r->addQueryData(array('category' => 3));
        try {
            $r->send();
            if ($r->getResponseCode() == 200) {
                file_put_contents('local.rss', $r->getResponseBody());
            }
        } catch (HttpException $ex) {
            echo $ex;
        }
        
 
      ?> 
   </body> 
</html>






