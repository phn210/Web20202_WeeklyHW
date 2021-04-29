<div><h1><strong>Business Listings</strong></h1>
</div>

<section>

<?php if (!empty($categories)): ?>
<?php foreach ($categories as $category):?>
<div class="category">

<?php echo $html->link($category['Category']['title'],'businesses/list/'.$category['Category']['id']).'</br'?>

</div>
<?php endforeach?>
</div>
<?php endif?>

</section>

<section>
<?php if (!empty($businesses)): ?>
<?php $match_businesses = array();
        foreach ($businesses as $business):
            if($business['Category']['id'] == $categoryId):
                array_push($match_businesses, $business);
            endif;
        endforeach;
        
        foreach ($match_businesses as $business):
            echo $business['Business']['id'] . $business['Business']['name'] . $business['Business']['address'];
        endforeach; ?>

</div>
<?php ?>
</div>
<?php endif?>

</section>

<script>
    function showBusiness(categoryId){
        var fields = {
            id: categoryId
        };

        $.ajax({
            url: '../businesses/list',
            type: 'POST',
            data: fields,
            dataType:'JSON',
            success: function(result){
                console.log(result);
            }
        });
    }
</script>
