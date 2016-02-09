<?php 
include('child.php');
class subchildclass extends childclass {
	/* hybrid or hierarchical type of inheritance example begin */
	
	public function sub_combine_c() {
		
		echo 'Subchild begin-bring from childclass-> '.parent::combine_child().' <-subchild end';
	}
	public function sub_combine_p() {
		echo 'Subchild begin-bring from parentclass-> '.parent::combine_parent().' <-subchild end.';
	}
	/* hybrid or hierarchical type of inheritance example end */
}

$objsubchild = new subchildclass();
echo $objsubchild->sub_combine_c();
// $objsubchild->sub_combine_p();
?>