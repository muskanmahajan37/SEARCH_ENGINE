<?php
include 'connect.php';
if(isset($_POST['search_name'])){
    $search_name=$_POST['search_name'];
    if(!empty($search_name)){
        $query="select 'name' from 'rohan' where 'name' like '%$search_name%'";
        $query_run=mysql_query($query);
        $query_num_row=mysql_num_rows($query_run);
        if(strlen($search_name)>=4){
        if($query_num_row>=1){
            echo $query_num_row."results found : ";
            while($query_res = mysql_fetch_assoc($query_run)){
                echo "$query_res".'<br>';
            }
        }
        else
        {
            echo "not found";
         }
        }
}
    else
    {
        echo "please use the search keywoard greater or equal to 4";
     }
}
?>

<form action="search_engine.php" method="POST">
search: <input type="text" name="search_name">
<input type="submit" value="submit">
</form>