<?php
require_once '../../class/Crud.php';

$obj = new Crud();
if(empty($_POST['category_name']))
{
    $data['msg_error'] = 'Please Fill the Category field';
    $data['status'] = 0;
}
else{
$data = [
    'category_name' => $_POST['category_name'],
    'category_slug_url' => $obj->slugify($_POST['category_name'],'category_slug_url','category'),

];

if($obj->insert('category', $data))
{
    $data['status'] = 1;
}
else{
    $data['status'] = 0;
}}
echo json_encode($data);
?>