<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('form_login_220088.php');</script>";
}
?>
<?php 
include 'style\header.php'; 
?>

<h3>Monthly Report</h3>
<br>
<?php 
    $months = array('January','February','Maret','April','May','June','July','Augustus','September','October','November','December');
    $year = date('Y');
    ?>
<form>
    <p>Select
        <?php $dateTime ?>
        <select name="month" required>
            <option value="">Month</option>
            <?php for($m=1;$m<=12;$m++){ ?>
            <?php $dateTime=$dateTime+1; ?>
            <option value="<?= $m ?>"> <?=$months[$m-1]?> </option>
            <?php } ?>
        </select>
        <select name="year" required>
            <option value="">Year</option>
            <?php for($y=0;$y<=2;$y++){ ?>
            <option value="<?= $year-$y ?>"><?=$year-$y?></option>
            <?php } ?>
        </select>
        <input type="submit" value="View Report">
    </p>
    <br>
</form>

<?php 
    if (isset($_GET['year'])) { 
    include 'connection_220088.php';
    $m =  $_GET['month'];
    $y =  $_GET['year'];
    // $query = "SELECT * FROM medicals_220088";
    $query = "SELECT m.mr_date_220088, d.doctor_name_220088, p.pet_name_220088, p.pet_owner_220088, m.cost_220088 FROM medicals_220088 AS m,
    doctor_220088 AS d, pets_220088 AS p WHERE m.doctor_id_220088=d.doctor_id_220088 AND m.pet_id_220088=p.pet_id_220088 AND 
    MONTH(m.mr_date_220088)='$m' AND YEAR(m.mr_date_220088) = '$y'";
    $report=mysqli_query($db_connection,$query);
   
    
    ?>
<h4>Report Periode <?=$months[$_GET['month']-1]?> - <?= $_GET['year']?></h4>
<table border="1">
    <tr>
        <th>No</th>
        <th>Date</th>
        <th>Doctor</th>
        <th>Pet</th>
        <th>Owner</th>
        <th>Pay($)</th>
    </tr>
    <?php 
        if (mysqli_num_rows($report)>0) {
            $i=0; $total=0;
            foreach ($report as $data) :
                $total=$total+$data['cost_220088'];
        ?>
    <tr>
        <td><?= $i++?></td>
        <td><?= $data['mr_date_220088']?></td>
        <td><?= $data['doctor_name_220088']?></td>
        <td><?= $data['pet_name_220088']?></td>
        <td><?= $data['pet_owner_220088']; ?></td>
        <td align="right"><?= $data['cost_220088']?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <th colspan="7" align="right">Total : $ <?= $total ?></th>
    </tr>
    <?php } else { ?>
    <tr>
        <td colspan="7" align="center">No Record !</td>
    </tr>
    <?php } ?>
</table>
<?php } ?>
<br>
<a href="index.php"><button class="w3-button w3-indigo">Back to HOME</button> </a>

</div>
</div>

</body>

</html>