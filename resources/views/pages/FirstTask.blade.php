<?php 
$table=array
(
array('Name' =>  'Trikse', 'Color' => 'Green', 'Element' => 'Earth', 'Likes' =>  'Flowers'),
array('Name' => 'Vardenis', 'Element' =>  'Air', 'Likes' => 'Singing', 'Color' =>  'Blue'),
array('Element' => 'Water',  'Likes' => 'Dancing',  'Name' =>'Jonas', 'Color' =>  'Pink'),
);

foreach ($table as $row) {
  foreach ($row as $key => $value){
    ${$key}[]  = $value; 
  }  
}
array_multisort($Name, SORT_ASC, $Color, SORT_ASC, $Element, SORT_ASC, $Likes , SORT_ASC,  $table);

echo "<table border=\"5\" cellpadding=\"10\">";
echo'<tr>';
   echo('<th> Name </th>');
   echo('<th> Color </th>');
   echo('<th> Element </th>');
   echo('<th> Likes </th>');
 echo'</tr>';

 foreach($table as $k => $val){ 

    echo "<tr> <td>".$val['Name']."</td>
    <td>".$val['Color']."</td>
    <td>".$val['Element']."</td>
    <td>".$val['Likes']."</td></tr>  ";

  }
echo "</table>"
?>