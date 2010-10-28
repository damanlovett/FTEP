
<?php
    // File: /app/views/orders/csv/export.ctp
   
$fp = fopen('php://output','w+');
fputcsv($fp,array(
'Header1',
'Header2',
'Header3'
));
foreach($results as $row) {
fputcsv($fp,array(
$row['ModelName']['Field1'],
$row['ModelName']['Field2'],
$row['ModelName']['Field3'] ));
}
fclose($fp);
?>