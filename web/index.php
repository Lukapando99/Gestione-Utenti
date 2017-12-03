<html> 
    <head> 
        <title>Cerca pizzerie</title> 
   </head> 
  <body> 
    <?php 
        echo ("Ecco tutte le pizzerie di bergamo:");
        $r = new HttpRequest('Http:://google.it//search?source=hp&ei=7PsjWr_OFtOiUvOjjPgJ&q=bose&oq=bose&gs_l=psy-ab.3..0i131k1j0j0i131k1l2j0l6.3164.3989.0.4387.7.4.0.0.0.0.135.489.0j4.4.0....0...1c.1.64.psy-ab..3.4.487.0...0.M_dAQ6kpKlo', HttpRequest::METH_POST);
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






