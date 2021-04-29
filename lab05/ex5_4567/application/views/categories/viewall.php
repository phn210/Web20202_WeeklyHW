<div><h2><strong>Category Administration</strong></h2>
</div>

<?php if (!empty($categories)): ?>
<?php foreach ($categories as $category):?>
<div class="category">

<?php echo $category['Category']['id'] . ' --- ' . $category['Category']['title'] . ' --- ' . $category['Category']['description'].'</br>'?>

</div>
<?php endforeach?>
</div>
<?php endif?>