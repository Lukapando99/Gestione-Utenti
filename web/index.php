<html> 
    <head> 
        <title>Cerca pizzerie</title> 
   </head> 
  <body> 
    <?php 
        echo ("Ecco tutte le pizzerie di bergamo:");
        $r = new HttpRequest('Http:://google.it?bose', HttpRequest::METH_POST);
      // $r->setOptions(array('lastmodified' => filemtime('local.rss')));
       // $r->addQueryData(array('category' => 3));
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






