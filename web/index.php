<?php
$r = new HttpRequest('https://api.foursquare.com/v2/venues/explore', HttpRequest::METH_GET);
//$r->setOptions(array('lastmodified' => filemtime('local.rss')));
$r->addQueryData(array('client_id' => AGUTWIPEQWCBRFCAHIN104WCY0IAPETGLTQIJUDP0JMIC5W));
$r->addQueryData(array('client_secret' => NH1JI30DQ4YSF5PBSWMCTGPWLHBR1Z11VHYI5ELMV2MNAXNV));
$r->addQueryData(array('v' => 20170801 ));
$r->addQueryData(array('query' => "pizza"));

try {
    $r->send();
    if ($r->getResponseCode() == 200) {
        file_put_contents('local.rss', $r->getResponseBody());
    }
} catch (HttpException $ex) {
    echo $ex;
}
?> 
