<?php
if (isset($_POST['submit'])){
$imdb_url = 'http://imdb.wemakesites.net/api/search?api_key=f342c80c-62f0-487e-bf9d-7e2f9f15bdd9&q=' . $_POST['tvshow'];
$res_imdb = file_get_contents($imdb_url);
$arr = json_decode($res_imdb,true);
foreach($arr["data"]["results"]["titles"] as $rec){
        echo $rec["title"];
        echo "            ";
        echo '<img src="'.$rec["thumbnail"].'" alt=""/>'."<br>";
}
}
else
{
    print "no record found";
}
?>


