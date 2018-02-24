
<?php
if (isset($_POST['search'])) {
	//Prevent SQL injection by only allowing specific values for $_POST['field']
	if ($_POST['field'] == 'firstname' || $_POST['field'] == 'email' || $_POST['field'] == 'surname') {
	 $stmt = $list->find($_POST['field'].$_POST['search']);
	}	
}
else {
$stmt = $list->findAll();

}
?>