<?php

 ?><div class="table_content">
    <form action="index.php?action=save_handout" method="post">
        <table border="0">
            <tr>
                <td>Week Number:</td>
                <td>
                    <strong><?php echo $week; ?></strong>
                    <input type="hidden" name="weeknumber" id="weeknumber" value="<?php echo $week; ?>"/>
                </td>
            </tr>
            <tr>
                <td>Handouts</td>
                <td><textarea name="handout_text" id="handout_text" rows="5" cols="60" required ><?php if(isset($checkExistHandout)){ echo $checkExistHandout[1];} ?></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="save_handout" id="save_handout" value="save"/></td>
            </tr>
        </table>
    </form>
</div>