<form action="api/add_invoice.php" method="post" style="color:#804040;">
            <div style="color:#804040;">日期:<input type="date" name="date"></div>
            期別:<select name="period">
                <option value="1">1,2</option>
                <option value="2">3,4</option>
                <option value="3">5,6</option>
                <option value="4">7,8</option>
                <option value="5">9,10</option>
                <option value="6">11,12</option>
            </select>
            <div style="color:#804040;">發票號碼:
                <input type="text" name="code" style="width:50px" pattern="[A-Z]{2}$" required maxlength="2" minlength="2">
                <input type="number" name="number" style="width:150px" pattern="[0-9]{8}$" maxlength="8" minlength="8">
                <?php errFeedBack('number');?>
            </div>
            <div style="color:#804040;">
                發票金額:<input type="number" name="payment" pattern="^[0-9]*$">
            </div>
            <div class="text-center">
                <input type="submit" value="送出">
            </div>
        </form>