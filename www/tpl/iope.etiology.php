<div id="IOPEEtio">
<div class="panel panel-default">
				<div class="panel-heading btn btn-warning btn-block">
					<a href="#">ETHIOLOGY</a>
				</div>
				<div class="panel-body">
					<table class="table table-bordered ">
						<tr class="active">
							<td>Injury</td>
							<td><input type="checkbox" name="InjuryYN" value="1" tabindex="41"> Y</td>
							<td>
								<div class="form-inline">
									Date:
									<input type="date" id="etio_injury_date" value="<%= etio_injury_date %>"class="form-control " tabindex="42">
								</div>
							</td>
						</tr>
						
						<tr class="active">
							<td></td>
							<td>
								<div class="form-inline">
									Work Related:
									<input type="checkbox" name="Onset" value="1" tabindex="44"> Y
								</div>
							</td>
							<td>
								<textarea rows="3" class="form-control" id=" etio_work_related_details " value="<%= etio_work_related_details%>"placeholder="Work Related"></textarea>
							</td>
						</tr>
						
						<tr class="active">
							<td>Onset</td>
							<td colspan="3"><input type="radio" name="WorkChoice" value="Sudden"tabindex="46" checked> Sudden <input type="radio" name="WorkChoice" value="Gradual" tabindex="47"> Gradual</td>
						</tr>
						
						<tr class="active">
							<td>Duration</td>
							<td colspan="3">
								<div class="form-inline">
									<input type="text" class="form-control" id="etio_Onset_duration" value="<%= etio_Onset_duration%>"style=" width:80px;"placeholder="Duration" tabindex="48">
									<select name="" style=" width:110px;" class="form-control">
										<option value="Days">DAYS</option>
										<option value="Weeks">WEEKS</option>
										<option value="Months">MONTHS</option>
										<option value="Years">YEARS</option>
									</select>
								</div>
							</td>
						</tr>
						<tr class="active">
							<td>Sevirity</td>
							<td colspan="3">
								<select name="Sevirity" style=" width:30%;"class="form-control">
									<option value="MILD">MILD</option>
									<option value="MODERATE">MODERATE</option>
									<option value="SEVERE">SEVERE</option>
									<option value="INCREASING">INCREASING</option>
								</select> 
							</td>
						</tr>
					</table>
				</div>
			</div>
			</div>