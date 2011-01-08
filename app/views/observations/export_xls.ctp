
<STYLE type="text/css">
     .tableTd {
             border-width: 0.5pt;
          border: solid;
     }
     .tableTdContent{
          border-width: 0.5pt;
          border: solid;
     }
     #titles{
          font-weight: bolder;
     }
  
</STYLE>
<table>
     <tr>
          <td><b>Export To Excel<b></td>
     </tr>
     <tr>
          <td><b>Date:</b></td>
          <td><?php echo date("F j, Y, g:i a"); ?></td>
     </tr>
     <tr>
          <td><b>Number of Rows:</b></td>
          <td style="text-align:left"><?php echo count($rows);?></td>
     </tr>
     <tr>
          <td></td>
     </tr>

		<tr id="titles">

		<td class="tableTd">name</td>
		<td class="tableTd">Employee</td>
		<td class="tableTd">Observation</td>
		<td class="tableTd">date</td>
		<td class="tableTd">month</td>
		<td class="tableTd">station</td>
		<td class="tableTd">nw</td>
		<td class="tableTd">lost_day</td>




		<td class="tableTd">1 </td>
		<td class="tableTd">2 </td>
		<td class="tableTd">3 </td>
		<td class="tableTd">4 </td>
		<td class="tableTd">5 </td>
		<td class="tableTd">6 </td>
		<td class="tableTd">7 </td>
		<td class="tableTd">8 </td>
		<td class="tableTd">9 </td>
		<td class="tableTd">10 </td>
		<td class="tableTd">11 </td>
		<td class="tableTd">12 </td>
		<td class="tableTd">13 </td>
		<td class="tableTd">14 </td>
		<td class="tableTd">15 </td>
		<td class="tableTd">16 </td>
		<td class="tableTd">17 </td>
		<td class="tableTd">18 </td>
		<td class="tableTd">19 </td>
		<td class="tableTd">20 </td>
		<td class="tableTd">21 </td>
		<td class="tableTd">22 </td>
		<td class="tableTd">23 </td>
		<td class="tableTd">24 </td>
		<td class="tableTd">25 </td>
		<td class="tableTd">26 </td>
		<td class="tableTd">27 </td>
		<td class="tableTd">28 </td>
		<td class="tableTd">29 </td>
	
		
		
		
		
		
		
		<td class="tableTd">doc_area</td>  		 
		<td class="tableTd">most_satisfactory</td>  
		<td class="tableTd">least_satisfactory</td> 
		<td class="tableTd">e_Comments</td> 
		<td class="tableTd">comments</td> 	 
		<td class="tableTd">created</td>  	 
		<td class="tableTd">modified</td>



</tr>


		<?php foreach($rows as $row):
			echo '<tr>';


		echo '<td class="tableTdContent">'.$row['User']['name'].'</td>';
			
		echo '<td class="tableTdContent">'.$row['Employee']['name'].'</td>';
			
		echo '<td class="tableTdContent">'.$row['Observation']['name'].'</td>';

		echo '<td class="tableTdContent">'.$time->format('m/d/y', $row['Observation']['date_of']).'</td>';
			
		echo '<td class="tableTdContent">'.$row['Observation']['month'].'</td>';

		echo '<td class="tableTdContent">'.$row['Observation']['station'].'</td>';
		
		echo '<td class="tableTdContent">'.$row['Observation']['nw'].'</td>';

		echo '<td class="tableTdContent">'.$row['Observation']['lost_day'].'</td>';
		








		echo '<td class="tableTdContent">'.$row['Observation']['1'].'</td>';

		echo '<td class="tableTdContent">'.$row['Observation']['2'].'</td>';

		echo '<td class="tableTdContent">'.$row['Observation']['3'].'</td>';

		echo '<td class="tableTdContent">'.$row['Observation']['4t'].'</td>';

		echo '<td class="tableTdContent">'.$row['Observation']['5t'].'</td>';
		
		echo '<td class="tableTdContent">'.$row['Observation']['10'].'</td>';

		echo '<td class="tableTdContent">'.$row['Observation']['11'].'</td>';

		echo '<td class="tableTdContent">'.$row['Observation']['12'].'</td>';

		echo '<td class="tableTdContent">'.$row['Observation']['13'].'</td>';

		echo '<td class="tableTdContent">'.$row['Observation']['14'].'</td>';

		echo '<td class="tableTdContent">'.$row['Observation']['15'].'</td>';

		echo '<td class="tableTdContent">'.$row['Observation']['16'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['17'].'</td>';

		echo '<td class="tableTdContent">'.$row['Observation']['18'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['19'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['20'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['21'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['22'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['23'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['24'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['25'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['26'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['27'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['28'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['29'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['30'].'</td>';
		 
		echo '<td class="tableTdContent">'.$row['Observation']['31'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['32'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['33'].'</td>';
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		echo '<td class="tableTdContent">'.$row['Observation']['doc_area'].'</td>';
 		 
		echo '<td class="tableTdContent">'.$row['Observation']['most_satisfactory'].'</td>';
  
		echo '<td class="tableTdContent">'.$row['Observation']['least_satisfactory'].'</td>';
 
	 	echo '<td class="tableTdContent">'.$row['Observation']['e_Comments'].'</td>';
 
		echo '<td class="tableTdContent">'.$row['Observation']['comments'].'</td>';
 	 
		echo '<td class="tableTdContent">'.$row['Observation']['created'].'</td>';
  	 
		echo '<td class="tableTdContent">'.$row['Observation']['modified'].'</td>';



		echo '</tr>';
			endforeach;
		?>
</table>