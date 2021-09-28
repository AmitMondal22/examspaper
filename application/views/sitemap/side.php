<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php 
header('Content-Type: application/xml; charset=utf-8');
echo '<!--?xml version="1.0" encoding="UTF-8"?-->'.PHP_EOL; 

echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemalocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;


$base_url=base_url();


echo '<url>' . PHP_EOL;

    echo '<loc>'.$base_url.'</loc>' . PHP_EOL;
    echo"<priority>1.00</priority>".PHP_EOL;
    echo '<changefreq>daily</changefreq>' . PHP_EOL;

echo '</url>' . PHP_EOL;



echo '<url>' . PHP_EOL;

    echo '<loc>'.$base_url.'about</loc>' . PHP_EOL;
    echo"<priority>0.90</priority>".PHP_EOL;
    echo '<changefreq>daily</changefreq>' . PHP_EOL;

echo '</url>' . PHP_EOL;
echo '<url>' . PHP_EOL;

    echo '<loc>'.$base_url.'contact</loc>' . PHP_EOL;
    echo"<priority>0.90</priority>".PHP_EOL;
    echo '<changefreq>daily</changefreq>' . PHP_EOL;

echo '</url>' . PHP_EOL;
echo '<url>' . PHP_EOL;

    echo '<loc>'.$base_url.'login</loc>' . PHP_EOL;
    echo"<priority>0.90</priority>".PHP_EOL;
    echo '<changefreq>daily</changefreq>' . PHP_EOL;

echo '</url>' . PHP_EOL;
echo '<url>' . PHP_EOL;

    echo '<loc>'.$base_url.'create-account</loc>' . PHP_EOL;
    echo"<priority>0.90</priority>".PHP_EOL;
    echo '<changefreq>daily</changefreq>' . PHP_EOL;

echo '</url>' . PHP_EOL;
echo '<url>' . PHP_EOL;

    echo '<loc>'.$base_url.'forgot-account</loc>' . PHP_EOL;
    echo"<priority>0.90</priority>".PHP_EOL;
    echo '<changefreq>daily</changefreq>' . PHP_EOL;

echo '</url>' . PHP_EOL;





foreach ($i_id as $key) {
    

echo '<url>' . PHP_EOL;

    echo '<loc>'.$base_url.'institute/'.$key->institute_id.'</loc>' . PHP_EOL;
    echo"<priority>0.80</priority>".PHP_EOL;
    echo '<changefreq>daily</changefreq>' . PHP_EOL;

echo '</url>' . PHP_EOL;

}





foreach ($i_id as $key) {
    foreach ($r_year as $year) {
       foreach ($r_str as $str) {
       
    

    echo '<url>' . PHP_EOL;
    
        echo '<loc>'.$base_url.'quastions/'.$key->institute_id.'/'.$year->year_id.'/'.$str->stream_id.'</loc>' . PHP_EOL;
        echo"<priority>0.64</priority>".PHP_EOL;
        echo '<changefreq>daily</changefreq>' . PHP_EOL;
    
    echo '</url>' . PHP_EOL;
    
}
}}

    


  echo '</urlset>' . PHP_EOL;

?>






