<?php
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=deneme.xls"); 

echo '<table>
<tr>
<td>Domain 1</td>
<td>Domain 2</td>
</tr>
</table>';
?>
