<div><h1><strong>Business Registration</strong></h1>
    <form action="" method="POST">
        <div class="content">
        <table>
            <tr>
                <th style="width:200px;">Record inserted as shown below</th>
            </tr>
            <tr>
                <td>
                    <div class="scroll">
                    <?php 
                        foreach ($categories as $category){
                            echo '<option value='.$category['Category']['id']. '>' . $category['Category']['title']. '</option>';
                        }
                        ?>
                    </div>
                </td>
            </tr>
        </table>
        </div>
        <div class="content">
        </table>
            <tr>
                <div class="form-content">
                    <p>Business name:</p>
                    <input type="text" name="userName"  class="input-content" value = <?php echo $name?> readonly>
                </div>
            </tr>
            <tr>
                <div class="form-content">
                    <p>Address:</p>
                    <input type="text" name="userName" class="input-content" value = <?php echo $address?> readonly>
                </div>
            </tr>
            <tr>   
                <div class="form-content">
                    <p>City:</p>
                    <input type="text" name="userName" class="input-content" value = <?php echo $city?> readonly>
                </div>
            </tr>
            <tr>
                <div class="form-content">
                    <p>Telephone:</p>
                    <input type="text" name="userName" class="input-content" value = <?php echo $telephone?> readonly>
                </div>
            </tr>
            <tr>
                <div class="form-content">
                    <p>URL:</p>
                    <input type="text" name="userName" class="input-content" value = <?php echo $url?> readonly>
                </div>
            </tr>
            </div>
        </table>
        </div>
    <div>
        <?php echo $html->link('Add Another Business','businesses/register')?>
    </div>
    </form>
</body>
</html>