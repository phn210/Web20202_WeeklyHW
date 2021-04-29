<div><h2><strong>Business Listings</strong></h2>
</div>

<?php if (!empty($businesses)): ?>
<?php foreach ($businesses as $business):?>
<div class="category">

<?php echo $business['id'] . ' --- ' . $business['name'] . ' --- ' . $business['address'].'</br>'?>

</div>
<?php endforeach?>
</div>
<?php endif?>

</hr>

<?php if (!empty($categories)): ?>
<?php foreach ($categories as $category):?>
<div class="category">

<?php echo $category['Category']['id'] . ' --- ' . $category['Category']['title'] . ' --- ' . $category['Category']['description'].'</br>'?>

</div>
<?php endforeach?>
</div>
<?php endif?>