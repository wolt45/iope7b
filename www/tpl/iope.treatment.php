<div id="IOPETreat">
			<div class="panel panel-default">	
				<div class="panel-heading btn btn-warning btn-block">
					<a href="#">TREATMENT</a>
				</div>
				<div class="panel-body">
					<table class="table table-bordered">
						<tr class="active">
							<td>Medications</td>
							<td>Analgesics (pain meds)</td>
							<td><input type="text" class="form-control" id="treatment_medi_analgesics" value="<%= treatment_medi_analgesics %>" placeholder="Pain-meds" tabindex="51"></td>
							<td></td>
						</tr>
						<tr class="active">
							<th>&nbsp;</th>
							<td>Anti- inflammatory meds</td>
							<td><input type="text" class="form-control" id="treatment_medi_antiinflam" value="<%= treatment_medi_antiinflam %>" placeholder="Anti-inflammatory" tabindex="52"></td>
							<td></td>
						</tr>
						<tr class="active">
							<th>&nbsp;</th>
							<td>Others</td>
							<td><input type="text" class="form-control" id="treatment_medi_others" value="<%= treatment_medi_others %>" placeholder="Other" tabindex="53"></td>
							<td></td>
						</tr>
						<tr class="active">
							<td >Joint Injection</b></td>
							<td>1. Steroids, how many</td>
							<td><input type="text" class="form-control" id="treatment_joint_steroids" value="<%= treatment_joint_steroids %>" placeholder="How many Steroids" tabindex="54"></td>
							<td><input type="text" class="form-control" id="treatment_joint_when" value="<%= treatment_joint_when %>" placeholder="When" tabindex="55"></td>
						</tr>
						<tr class="active">
							<td>&nbsp;</td>
							<td>Result: </td>
							<td><input type="checkbox" id="treatment_joint_result" tabindex="56"> Y </td>
							<td><input type="text" class="form-control" id="treatment_joint_details" value="<%= treatment_joint_details %>" placeholder="Details" tabindex="57"></td>
							
						</tr>
						<tr class="active">
							<th>&nbsp;</th>
							<td>2. Hyaluronic acid</td>
							<td colspan="3"><input type="radio" id = "treatment_joint_hyal_result" name="treatment_joint_hyal_result" value="Supartz" tabindex="58" checked> Supartz 
									<input type="radio" id="treatment_joint_hyal_result" name="treatment_joint_hyal_result" value="Synvisc" tabindex="9"> Synvisc
									<input type="radio" id="treatment_joint_hyal_result" name="treatment_joint_hyal_result" value="Go On"> Go On 
									<input type="radio" id="treatment_joint_hyal_result" name="treatment_joint_hyal_result"  value="Others"> Others</td>
						</tr>
						<tr class="active">
							<th>&nbsp;</th>
							<td>Result: </td>
							<td><input type="checkbox" id="treatment_joint_hyal_result" value="1" tabindex="59" > Y</td>
							<td><input type="text" class="form-control" id="treatment_joint_hyal_details"  value="" placeholder="Details" tabindex="60"></td>
							
						</tr>
					</table>
				</div>
				</div>
			</div>