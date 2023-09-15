
<?php
$name= filter_input(INPUT_POST,'name');
//check
if($name == null){
    $error= 'Invalid category data';
    include('error.php');

}else{
    require_once('database.php');

    $query='INSERT INTO categories (categoryName)
    VALUES (:category_name)';
    $statement= $db->prepare($query);
    $statement->bindValue(':category_name',$name);
    $statement->execute();
    $statement->closeCursor();

    include('category_list.php');
}
?>