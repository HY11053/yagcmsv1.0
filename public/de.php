<?php
header("Content-type: text/html; charset=utf-8");

//GBK编码的请删除上面的head头信息启用下面的head头信息

//header("Content-type: text/html; charset=gb2312");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$urlXML='sitemap.xml';

$filename="url.txt";

$resourTxt='';

//定义对应的xml文件地址

$xmlPath='http://www.51xxsp.com/sitemap.xml';

$ownResource=file_get_contents($xmlPath);



if(!empty($ownResource)){

    file_put_contents($urlXML, $ownResource);

}else{

    echo 'XML文件读取失败，请检查路径是否正确或php.ini配置文件中allow_url_fopen = On是否开启';

}



if(file_exists($urlXML)){

    $xmlObj = simplexml_load_file($urlXML,'SimpleXMLElement', LIBXML_NOCDATA);


    for($i=0;$i<count($xmlObj->url);$i++){

        $resourTxt =trim($xmlObj->url[$i]->loc).' '. trim(str_replace('www.51xxsp.com/','m.51xxsp.com/index.php/',$xmlObj->url[$i]->loc)).'<br/>';
        echo $resourTxt;



    }




}else{

    echo"XML文件读取错误";


}



