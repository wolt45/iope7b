
<div id="IOPEMedHist">
	<div class="panel panel-default">
		<div class="panel-body">
			
			<div class="panel-heading btn btn-warning btn-block">
				<a href="#">MEDICAL HISTORY</a>
			</div>
			
			<table class="table table-bordered">
				<tr class="active">
					<td>1. Heart</td>
					<td>Medication</td>
					<td><input type="checkbox" id="medhist_heart" <% if(medhist_heart==1) print("CHECKED"); %> value="1" tabindex="76"> Y</td>
					<td colspan="2"><input type="text" id="medhist_heart_what" value="<%= medhist_heart_what%>" class="form-control" placeholder="Details of Medication" tabindex="77"></td>
				</tr>
				<tr class="active">
					<td>&nbsp;</td>
					<td>Surgery</td>
					<td><input type="checkbox" id="medhist_heart_surgery" <% if(medhist_heart_surgery==1) print("CHECKED"); %> value="1" tabindex="78"> Y</td>
					<td colspan="2"><input type="date" id="medhist_heart_surgery_date" value="<%= medhist_heart_surgery_date%>" class="form-control"  tabindex="79"> </td>
				</tr>
				<tr class="active">
					<td>2. Hypertension</td>
					<td><input type="checkbox" id="medhist_hypertension" <% if(medhist_hypertension==1) print("CHECKED"); %> value="1" tabindex="80"> Y </td>
					<td colspan="2"><input type="text" id="medhist_hypertension_meds" value="<%= medhist_hypertension_meds%>" class="form-control" placeholder="Meds" tabindex="8"></td>
				</tr>
				
				<tr class="active">
					<td>3.Diabetes</td>
					<td><input type="checkbox" id="medhist_diabetes" <% if(medhist_diabetes==1) print("CHECKED"); %> value="1" tabindex="81"> Y </td>
					<td colspan="2"><input type="text" id="medhist_diabetes_meds" value="<%= medhist_diabetes_meds%>"class="form-control" placeholder="Meds" tabindex="82"></td>
				</tr>
				
				<tr class="active">
					<td>4. Kidney</td>
					<td><input type="checkbox" id="medhist_kidney" <% if(medhist_kidney==1) print("CHECKED"); %> value="1" tabindex="83"> Y </td>
					<td colspan="2"><input type="text" id="medhist_kidney_meds" value="<%= medhist_kidney_meds%>" class="form-control" placeholder="Meds" tabindex="84"></td>
				</tr>
				
				<tr class="active">
					<td>5. GI(ulcer etc.)</td>
					<td><input type="checkbox" id="medhist_GI" <% if(medhist_GI==1) print("CHECKED"); %> value="1" tabindex="85"> Y </td>
					<td colspan="2"><input type="text" id="medhist_GI_meds" value="<%= medhist_GI_meds %>" class="form-control " placeholder="Meds" tabindex="86"></td>
				</tr>
				
				<tr class="active">
					<td>6.Allergies</td>
					<td><input type="checkbox" id="medhist_allergies" <% if(medhist_allergies==1) print("CHECKED"); %> value="1" tabindex="87"> Y </td>
					<td colspan="2"><input type="text" id="medhist_allergies_meds" value="<%= medhist_allergies_meds %>" class="form-control" placeholder="Meds" tabindex="88"></td>
				</tr>
				
				<tr class="active">
					<td>7.History of Infection</td>
					<td><input type="checkbox" id="medhist_infection" <% if(medhist_allergies==1) print("CHECKED"); %> value="1" tabindex="89"> Y</td>
					<td colspan="2"><input type="text" id="medhist_infection_meds" value="<%= medhist_infection_meds %>" class="form-control" placeholder="Meds" tabindex="90"></td>
				</tr>
				
				<tr class="active">
					<td>8.Previous Sergeries</td>
					<td><input type="checkbox" id="medhist_previous_surgeries" <% if(medhist_previous_surgeries==1) print("CHECKED"); %> value="1" tabindex="91"> Y</td>
					<td colspan="2"><input type="text" id="medhist_previous_surgeries_details" value="<%= medhist_previous_surgeries_details %>" class="form-control" placeholder="Meds" tabindex="92"></td>
				</tr>
				<tr class="active">
					<td>9.Lungs</td>
					<td><input type="checkbox" id="medhist_lungs" <% if(medhist_lungs==1) print("CHECKED"); %> value="1" tabindex="93"> Y</td>
					<td colspan="2"><input type="text" id="medhist_lungs_details" value="<%= medhist_lungs_details %>" class="form-control" placeholder="Meds" tabindex="94"></td>
				</tr>
				<tr class="active">
					<td>10.Trauma</td>
					<td><input type="checkbox" id="medhist_trauma" <% if(medhist_trauma==1) print("CHECKED"); %> value="1" tabindex="95"> Y</td>
					<td colspan="2"><input type="text" id="medhist_trauma_details" value="<%= medhist_trauma_details %>" class="form-control" placeholder="Meds" tabindex="96"></td>
				</tr>
				<tr class="active">
					<td>11.CNS</td>
					<td><input type="checkbox" id="medhist_CNS" <% if(medhist_CNS==1) print("CHECKED"); %> value="1" tabindex="95">value="1" tabindex="97"> Y</td>
					<td colspan="2"><input type="text" id="medhist_CNS_details" value="<%= medhist_CNS_details %>" class="form-control" placeholder="Meds" tabindex="98"></td>
				</tr>
				<tr class="active">
					<td>12.Others</td>
					<td colspan="6"><textarea rows="5" id="medhist_others" value="<%= medhist_others%>"class = "form-control" placeholder="Others" tabindex="99"></textarea></td>
				</tr>
			</table>
		</div>
	</div>
</div>