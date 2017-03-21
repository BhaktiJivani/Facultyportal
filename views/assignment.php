<?php

 ?>
 <div class="table_content">
	<form method="post" action="index.php?action=save_assignment">
	<table border="0">
    	<tr>
        	<td>Week Number: </td>
            <td>
				<strong><?php echo $week; ?></strong>
                <input type="hidden" name="weeknumber" id="weeknumber" value="<?php echo $week; ?>"/>
            </td>
        </tr>
        <tr>
        	<td>Assignment: </td>
            <td><textarea name="assignment_text" id="assignment_text" rows="5" cols="60" required ><?php if(isset($checkExistAssignment)){ echo $checkExistAssignment[1];} ?></textarea></td>
        </tr>
        <tr>
        	<td>Total Marks: </td>
            <td><input type="number" name="total_marks" id="total_marks" required value="<?php if(isset($checkExistAssignment)){ echo $checkExistAssignment[2];} ?>"/></td>
        </tr>
        <tr>
        	<td>Due Date: </td>
            <td><input type="date" name="due_date" id="due_date" required value="<?php if(isset($checkExistAssignment)){ echo $checkExistAssignment[3];} ?>"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="save_assignment" id="save_assignment" value="save"/></td>
        </tr>
    </table>
</form>
</div>