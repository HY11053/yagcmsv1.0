<?php
$mysqli =new mysqli('localhost', 'root', '', 'shipinjm');
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$mysqli->set_charset("utf8");
//获取附加表字段数据
$brand_key='亲亲';
$sql="SELECT dede_archives.description,dede_archives.title,dede_archives.litpic,dede_archives.id,dede_arctype.typedir FROM dede_archives,dede_arctype WHERE dede_archives.typeid=dede_arctype.id  AND dede_arctype.id<>14 AND dede_archives.arcrank<>-2 AND  dede_archives.title LIKE '%{$brand_key}%' ORDER  BY id desc LIMIT 1,14";

$rows=$mysqli->query($sql);
while ($row = $rows->fetch_assoc()){
    $res[]=$row;
}

if(count($res)>0){
    $strs='';
    for ($i=0;$i<count($res); $i++){
        $typeidr=str_replace('{cmspath}','',$res[$i]['typedir']);
        $res[$i]['description']=mb_substr($res[$i]['description'],0,22,'utf-8');
        $strs .= <<<"EOD"
<li><a href="{$typeidr}/{$res[$i]['id']}.html" title="{$res[$i]['title']}">{$res[$i]['title']}</a></li>
EOD;
    }

    echo $strs;
}
$num=14-count($res);
$num2=count($res);
if($num>0){
    $sql2="SELECT dede_archives.title,dede_archives.litpic,dede_archives.id,dede_arctype.typedir FROM dede_archives,dede_arctype WHERE dede_archives.typeid=dede_arctype.id  AND dede_arctype.id<>14 AND dede_archives.arcrank<>-2  ORDER  BY id desc LIMIT $num2,$num";

    $rows2=$mysqli->query($sql2);
    while ($row2 = $rows2->fetch_assoc()){
        $res2[]=$row2;
    }
}
if(count($res2)>0) {
    $strs2 = '';
    for ($i = 0; $i < count($res2); $i++) {
        $typeidr = str_replace('{cmspath}', '', $res2[$i]['typedir']);
        $strs2 .= <<<"EOD"
<li><a href="{$typeidr}/{$res2[$i]['id']}.html" title="{$res2[$i]['title']}">{$res2[$i]['title']}</a></li>
EOD;
    }
    echo $strs2;
}