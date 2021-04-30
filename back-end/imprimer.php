<?php
ob_start();
require_once $_SERVER['DOCUMENT_ROOT'].'\projet\core\clientC.php';
require_once $_SERVER['DOCUMENT_ROOT'].'\projet\entities\client.php';



?>
<page backtop="20mm">
	 <h1> Liste des Clients </h1>
		<table style="width:100%;border: 2px dashed " >
		<tr>


      <th>ID - Nom Prenom</th>
      <th>email</th>
      <th>Username</th>
      <th>date</th>
      <th>adresse</th>
      <th>Telephone</th>
      <th></th>
  </tr>


  <?PHP
      foreach($listeclient as $row){
  ?>
<tr>
      <td>
        <?php echo $row['id'] ." - ". $row['prenom']." ".$row['nom']; ?></td>
      <td>
          <span class="block-email"><?php echo $row['email']?></span>
      </td>
      <td class="desc"><?php echo $row['username']?></td>
      <td><?php echo $row['date_crea']?></td>
      <td>
          <span class="status--process"><?php echo $row['adresse']?></span>
      </td>
      <td><?php echo $row['tel']?></td>
    </tr>
<?php  }?>

</table>


</page>

<?php
$content= ob_get_clean();
require('html2pdf/html2pdf.class.php');
try{
$pdf=new html2pdf('p','A4','fr','true','UTF-8');
$pdf->pdf->SetDisplayMode('fullpage');

$pdf->writeHTML($content);
//$pdf->pdf->IncludeJS('print(true)');
$pdf->Output('test.pdf');
}
catch(HTML2PDF_exception $e)
{
	die($e);
}

?>
