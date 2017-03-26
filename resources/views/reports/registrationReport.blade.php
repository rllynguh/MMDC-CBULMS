<style type="text/css">
	table {
		border-collapse: collapse;
		width:100%;
	}

	table, th, td {
		border: 1px solid black;
		padding: 5px;
	}
	/*tr:nth-child(even) {background-color: #FFEC8B}*/
	th {
		background-color: #FFEC8B;
	}
</style>
<table border-solid>
	<thead>
		<tr>
			<th>Transaction</th>
			<th>Date</th>
			<th>Tenant</th>
			<th>Busines Type</th>
			<th>Unit</th>
		</tr>

	</thead>
	<tbody>
		@foreach($result as $result)
		<tr>
			<td>
				{{$result->intRegiCode}} 
			</td>
			<td>
				{{$result->datRegiDate}} 
			</td>
			<td>
				{{$result->strTenaDesc}} 
			</td>
			<td>
				{{$result->strBusiTypeDesc}} 
			</td>
			<td>
				{{$result->strUnitCode}} 
			</td>
		</tr>
		@endforeach
	</tbody>
</table>