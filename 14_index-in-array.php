<?php
function index_of_array($arr,$search){
    for($i=0;$i<count($arr);$i++){
        if($arr[$i]==$search)
            return $i;
    }
    return -1;
}
$arr=["ram","shyam","hari","prasun","sita"];
$search = "prasun";
$index = index_of_array($arr,$search);
if($index != -1){
    echo("'$search' is in index $index of the array");
}
else{
    echo("$search not found");
}
?>