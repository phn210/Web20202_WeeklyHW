    <div><h1><strong>Category Administration</strong></h1></div>
    <form action="../categories/add" method="POST">
        <table>
            <tr>
                <th>Cat ID</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
            <?php if (!empty($categories)): ?>
            <?php foreach ($categories as $category):?>
            <tr>
                <th><?php echo $category['Category']['id']?></th>
                <th><?php echo $category['Category']['title']?></th>
                <th><?php echo $category['Category']['description']?></th>
            </tr>
            <?php endforeach?>
            <?php endif?>
            <tr>
                <td><input type="text" placeholder = "ID.." class="input-text" name="id"></td>
                <td><input type="text" placeholder = "Title.."class="input-text" name="title"></td>
                <td><input type="text" placeholder = "Description.."class="input-text" name="description"></td>
            </tr>
        </table>
        <button type="submit" class="submit-btn">Add category</button>
    </form>
</body>
</html>