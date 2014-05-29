<div class="formc">
<table>
    <tr>
    <td>
        <label>S.No</label>
    </td>
    <td>
        <label>Student Name</label>
    </td>
    <td>
        <label>Route</label>
    </td>
    <td>
        <label>Stop</label>
    </td>
    </tr>
    <?php if(empty($data))
    {
        echo '<tr><td>Student Not Associated with any Route</td>';
    }
    else
    {
    ?>
    <?php foreach ($data as $dt=>$val){
        echo '<tr>';
        echo '<td>'.intval($dt+1).'</td>';
        echo '<td>'.$val['Student']['first_name'].' '.$val['Student']['last_name'].'</td>';
        echo '<td>'.$val['Route']['name'].'</td>';
        echo '<td>'.$val['Stop']['name'].'</td>';
    }}?>
</table>
    </div>