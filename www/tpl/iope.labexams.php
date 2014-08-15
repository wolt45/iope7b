
	<div id="IOPELabs">
		<div class="panel panel-default">
			<div class="panel-heading btn btn-warning btn-block">
				<a href="#">
					LABORATORY EXAMINATION
				</a>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<tr class="active">
						<td>A. X-Rays</td>
						<td><center>Date</center></td>
						<td><input type="date" class="form-control" id="lab_xrays" value="<%= lab_xrays %>" tabindex="67"></td>
						<td>Report</td>
						<td><textarea rows="3" id="lab_xrays_report" value="<%= lab_xrays_report%>" placeholder="Result" class = "form-control" tabindex="68"></textarea></td>
					</tr>
					<tr class="active">
						<td>B. MRI</td>
						<td><center>Date</center></td>
						<td><input type="date" class="form-control" id="lab_MRI" value="<%= lab_MRI %>" tabindex="69"></td>
						<td>Report</td>
						<td><textarea rows="3" id="lab_MRI_report" value="<%= lab_MRI_report %>" class = "form-control" placeholder="Result" tabindex="70"></textarea></td>
					</tr>
					<tr class="active">
						<td>C. CT-SCAN</td>
						<td><center>Date</center></td>
						<td><input type="date" class="form-control" id="lab_CT_Scan" value="<%= lab_CT_Scan %>" tabindex="71"></td>
						<td>Report</td>
						<td><textarea rows="3" id="lab_CT_Scan_report" value="<%= lab_CT_Scan_report %>"class = "form-control" placeholder="Result" tabindex="72"></textarea></td>
					</tr>
					<tr class="active">
						<td>D. Blood Exams</td>
						<td colspan="2">
								<input type="radio" name="BloodSel" id="BloodSel" value="0" tabindex="73" checked> CBC 
								<input type="radio" name="BloodSel" id="BloodSel" value="1"> ESR
								<input type="radio" name="BloodSel" id="BloodSel" value="2"> CRP</td>
						<td><center>Where</center></td>
						<td><input type="text" class="form-control" id="lab_blood_exams_where" value="<%=lab_blood_exams_where%>" placeholder="Where" tabindex="74"></td>

					</tr>
					<tr class="active">
						<td>&nbsp;</td>
						<td><center>Reports</center></td>
						<td colspan="3"><Textarea rows="3" id="lab_blood_exams_reports" value="<%= lab_blood_exams_reports %>" class = "form-control" placeholder="Reports" tabindex="75"></textarea></td>

					</tr>
				</table>
			</div>
		</div>
	</div>