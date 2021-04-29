<?php
if($result == -1)
    echo "Error occured when trying to add new category!";
else echo "New category added!";
echo '</br>';
echo $html->link('Back','categories/viewall');
?>