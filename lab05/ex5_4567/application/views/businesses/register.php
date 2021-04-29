    <div><h1><strong>Business Registration</strong></h1>
    <form action="../businesses/add" method="POST">
        <div class="content">
        <table>
            <tr>
                <th style="width:200px;">Clicks on one, or control-click on mutiple categories</th>
            </tr>
            <tr>
                <td>
                    <div>
                        <label for="cats">Cick one or ctrl + click to multil choice</label><br>
                        <select id="cats" name="cats" size="4" multiple require>
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
                    <input type="text" name="name"  class="input-content">
                </div>
            </tr>
            <tr>
                <div class="form-content">
                    <p>Address:</p>
                    <input type="text" name="address" class="input-content">
                </div>
            </tr>
            <tr>   
                <div class="form-content">
                    <p>City:</p>
                    <input type="text" name="city" class="input-content">
                </div>
            </tr>
            <tr>
                <div class="form-content">
                    <p>Telephone:</p>
                    <input type="text" name="telephone" class="input-content">
                </div>
            </tr>
            <tr>
                <div class="form-content">
                    <p>URL:</p>
                    <input type="text" name="url" class="input-content">
                </div>
            </tr>
            </div>
        </table>
        </div>
    <div class="submit">
        <button type="submit" class="submit-btn">Add business</button>
    </div>
    </form>
</body>
</html>