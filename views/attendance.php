<?php
/* 
 * Student Info: Name=Vidit Mody, ID=12602
 * Suject: CS526_HW2_Summer_2015
 * Author: Vidit
 * Filename: attendance.php
 * Project Name: OSCSite
 */
 ?>
 <div class="table_content">
    <form action="index.php?action=save_attendance" method="post">
	<table>
    	<tr>
            <td>Week</td>
            <td>Student ID</td>
            <td>Student Name</td>
            <td>Attendance</td>
        </tr>
        <?php
        if(isset($checkExistAttendance) && $attendanceCount>0 ){ 
	        foreach($checkExistAttendance as $attendance) { ?>
				<tr>
		        	<td><?php echo $attendance->weekNumber; ?></td>
		            <td><?php echo $attendance->stuID; ?></td>
		            <td><?php echo $attendance->stuName; ?></td>
		            <td><?php echo $attendance->attendance; ?></td>
		        </tr>
		<?php 
			}
		} else
        if(isset($studentsName)){ 
	        foreach($studentsName as $students) { ?>
				<tr>
		        	<td>
						<strong><?php echo $week; ?></strong>
                    	<input type="hidden" name="weeknumber[]" id="weeknumber[]" value="<?php echo $week; ?>"/>
                    </td>
		            <td>
						<?php echo $students->stuID; ?>
                    	<input type="hidden" name="studentID[]" id="studentID[]" value="<?php echo $students->stuID; ?>"/>
                    </td>
		            <td>
						<?php echo $students->stuName; ?>
                        <input type="hidden" name="studentName[]" id="studentName[]" value="<?php echo $students->stuName; ?>"/>
                    </td>
		            <td>
                    	<select name="atndnce[]" required>
                        	<option></option>
                        	<option value="P">Present</option>
                        	<option value="A">Absent</option>
                        	<option value="E">Leaving Early</option>
                        	<option value="L">Coming Late</option>
                        </select>
                    <!--<input type="text" name="">-->
                    </td>
		        </tr>
		<?php 
			}
		}
		?>
        <tr>
        	<td colspan="4"><br></td>
        </tr>
        <tr>
            <td colspan="4" align="center"><input type="submit" name="save_attendance" id="save_attendance" value="save" /></td>
        </tr>
    </table>
</form>
</div>