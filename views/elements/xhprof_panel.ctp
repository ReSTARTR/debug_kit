<?php echo  $content['link']; ?>
<table>
<thead>
<tr><td>function name</td>
	<td>calls</td>
	<td>calls%</td>
	<td>wall time</td>
	<td>wall time%</td>
	<td>cpu(ms)</td>
	<td>cpu%(ms)</td>
	<td>memory usage</td>
	<td>peak memory usage</td>
</tr>
</thead>
<tbody>
<?php 
if (is_array($content['data'])) {
foreach($content['data'] as $k => $v) {
?>
<tr>
<td><?php echo $v['fn']; ?></td>
<td style="text-align:right;"><?php echo number_format($v['ct']); ?></td>
<td style="text-align:right;"><?php echo $v['p_ct']; ?></td>
<td style="text-align:right;"><?php echo number_format($v['wt']); ?></td>
<td style="text-align:right;"><?php echo $v['p_wt']; ?></td>
<td style="text-align:right;"><?php echo number_format($v['cpu']); ?></td>
<td style="text-align:right;"><?php echo $v['p_cpu']; ?></td>
<td style="text-align:right;"><?php echo number_format($v['mu']); ?></td>
<td style="text-align:right;"><?php echo number_format($v['pmu']); ?></td>
</tr>
<?php 
    }
}
?>
<tbody>
</table>
