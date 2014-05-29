
<div class="formc">
<table>
    <tr>
        <td>
            <label>S.No</label>
        </td>
        <td>
            <label>Stop</label>
        </td>
        <td>
            <label>Route</label>
        </td>
        <td>
            <label>Amount</label>
        </td>
        <td>
            <label>Arrival Time</label>
        </td>
        <td>
            <label>Stoppage Time</label>
        </td>
        
    </tr>
    <?php
    if(empty($route))
    {
        echo 'This Stop has No route Associated';
    }
    else
    {
        $i=1; 
        $j=0;
        
            foreach($route[0]['Route'] as $rt)
            {
            echo '<tr>';
            echo '<td>'.$i.'</td>';
            echo '<td>'.$route[0]['Stop']['name'].'</td>';
            echo '<td>'.$rt['name'].'</td>';
            echo '<td>'.$rt['RoutesStop']['amount'].'</td>';
            echo '<td>'.$rt['RoutesStop']['arrival_time'].'</td>';
            echo '<td>'.$rt['RoutesStop']['stoppage_time'].'</td>';
            $i++;
            $j++;
            }
        
    }
    ?>
</table>
    </div>