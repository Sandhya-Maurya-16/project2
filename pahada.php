<form action="" method="get">
<label for="p">Enter Table Number </label>
<input type="text" name="p">
<button type="submit">Submit</button>
</form>
<table border=2 cellspacing=0 cellpadding=5>
    <tr>
        <th>table</th>
    </tr>
    <?php
echo "<pre>";
for($i=1;$i<=10;$i++)
{
    echo "<tr>
           <td>".
    $_GET['p']." x ".$i." = ".$_GET['p']*$i."
</td>
</tr>";
}
?>
</table>
<!-- *******************************************************8 -->
<table border=2 cellspacing=0 cellpadding=5>
    <tr>
        <th>table</th>
    </tr>
    <?php
for($i=1;$i<=10;$i++)
{?>
   <tr>
           <td>
    <?=$_GET['p']." x ".$i." = ".$_GET['p']*$i; ?>
</td>
</tr>
<?php }?>
</table>
