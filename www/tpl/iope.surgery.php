
		<div id="IOPESurgery">
		
		<div class="panel panel-default">
			<div class="panel-heading btn btn-warning btn-block">
				<a href="#">SURGERY</a>
			</div>
			<div class="panel-body">
			
				<table class="table table-bordered">
					<tr class="active">
						<td>A.Type</td>
						<td><input type="text" class="form-control" id="prev_surgery_type" value="<%= prev_surgery_type %>" placeholder="Type" tabindex="61"></td>
						
						<td>B.When</td>
						<td><input type="text" class="form-control" id="prev_when" value="<%= prev_when %>" placeholder="When" tabindex="62"></td>
					</tr>
					<tr class="active">
						<td>C.Where</td>
						<td><input type="text" class="form-control" id="prev_where" value="<%= prev_where %>" placeholder="Where" tabindex="63"></td>
					
						<td>D.Who</td>
						<td><input type="text" class="form-control" id="prev_who" value="<%= prev_who %>" placeholder="Who" tabindex="64"></td>
					</tr>
					<tr class="active">
						
					</tr>
					<tr class="active">
						<td>E. Did it help</td>
						<td>Y <input type="checkbox" id="DidHelp" value="1" tabindex="65"></td>
						<td><input type="text" class="form-control" id="prev_days" value=""placeholder="Number of D, W, M, Y "></td>
						<td><input type="radio" id="DidHelpSel" name="DidHelpSel"  value="D" tabindex="66" checked> Day
							<input type="radio" id="DidHelpSel" name="DidHelpSel" value="W"> Week
							<input type="radio" id="DidHelpSel" name="DidHelpSel" value="M"> Month
							<input type="radio" id="DidHelpSel" name="DidHelpSel" value="Y"> Year
						</td>
					</tr>
				
				</table>
			</div>
		</div>
	</div>