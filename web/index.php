<html> 
    <head> 
        <title>Cerca pizzerie</title> 
   </head> 
  <body> 
    <?php 
        echo (<p>"Ecco tutte le pizzerie di bergamo:"</p>)
        $r = new HttpRequest('api.foursquare.com/v2/venues/49d51ce3f964a520675c1fe3?v=20171203&client_id=3AGUTWIPEQWCBRFCAHIN104WCY0IAPETGLTQIJUDP0JMIC5W&client_secret=NH1JI30DQ4YSF5PBSWMCTGPWLHBR1Z11VHYI5ELMV2MNAXNV
', HttpRequest::METH_POST);
       // $r->setOptions(array('cookies' => array('lang' => 'de')));
       // $r->addPostFields(array('user' => 'mike', 'pass' => 's3c|r3t'));
       // $r->addPostFile('image', 'profile.jpg', 'image/jpeg');
        try {
            echo $r->send()->getBody();
        } catch (HttpException $ex) {
            echo $ex;
        }
        
 
      ?> 
   </body> 
</html>






