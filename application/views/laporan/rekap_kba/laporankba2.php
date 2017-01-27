<div class="laporan_transaksi_header">
    

<div class="laporan_transaksi"><button onClick="window.print();">Print</button>
								<?php if(@$cari):?>
                                                 	<?php
										
										 foreach ($cari as $row):?><?php endforeach; ?>
                                <H2 align="center">Laporan Kapasitas Beban Antar Bulan <?php echo $row ->b_rekap;?> </H2>
</div> 
                                    <table border="2" align="center" class="table table-bordered table-condensed table-hover table-striped">
                                      <thead>
                                        <tr>
                                          <th width="6%">No</th>
                                          <th>Nippos</th>
                                          <th>Tanggal Rekap</th>
                                          <th>Jumlah Surat</th>	                                          <th>% Akurasi</th>
                                          <th>Status</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      	<?php
										$i=1;
										 foreach ($cari as $rows): ?>
                                        <tr>
                                          <td align="center"><?php echo $i++?></td>
                                          <td><?php echo $rows ->nippos;?> </td>
                                          <td><?php echo $rows ->tgl_rekap;?> </td>
                                          <td><?php echo $rows ->terkirim;?> </td>
                                          <td><?php echo $rows->presentase;?> </td>
                                          <td><?php echo $rows->status;?> </td>
                                        </tr>
                                       
                                      <?php endforeach; ?>
                                      </tbody>
                                       
                                     
                                        <tr>
                                          <td align="center">&nbsp;</td>
                                          <td>                               <td></td> <?php
$sum = 0;
foreach($cari as $rows){
 $sum += str_replace(",", "", $rows->status);
}?>
                                          <td>Jumlah </td>
                                          <td> <?php echo $sum ;?></td>   <?php endif?> 
                                          <td> </td>
                                        </tr> 
                                      <br />
                                      <br />
                                    </table>
                                    <table border="0" >
                                    <tr>
                                       <td width="10%"></td>
                                    <td width="35%"></td>
                                 <td></td>
                                 <td></td><td></td>
                                 <td></td><td></td>
                                 <td></td>
                                    <td width="30%"><br /> <td>
                                    <td width="40%"> <td>
                                    </tr>
                                    <tr>
                                     
                                    <td width="35%" align="center">Ditetapkan</td>
                               
                                    <td width="30%" align="center" >Disetujui <td>
                                    <td width="40%" align="center">Dibuat Oleh <td>
                                    </tr>
                                       <tr>
                                      
                                    <td width="35%" align="center">Ka.Kp</td>
                                
                                    <td width="30%" align="center">SPV.Antaran 
                                    <td>
                                    <td width="40%" align="center" >Mandor Antaran
                                    <td>
                                    </tr>
                                    
                                     <tr>
                                       <td width="10%"></td>
                                    <td width="35%"></td>
                                 <td></td>
                                 <td></td><td></td>
                                 <td></td><td></td>
                                 <td></td>
                                    <td width="30%"><br /> <td>
                                    <td width="40%"> <td>
                                    </tr>
                                    <tr>
                                      <tr>
                                       <td width="10%"></td>
                                    <td width="35%"></td>
                                 <td></td>
                                 <td></td><td></td>
                                 <td></td><td></td>
                                 <td></td>
                                    <td width="30%"><br /> <td>
                                    <td width="40%"> <td>
                                    </tr>
                                    <tr>
                                      <tr>
                                       <td width="10%"></td>
                                    <td width="35%"></td>
                                 <td></td>
                                 <td></td><td></td>
                                 <td></td><td></td>
                                 <td></td>
                                    <td width="30%"><br /> <td>
                                    <td width="40%"> <td>
                                    </tr>
                                    <tr>
                                      <tr>
                                       <td width="10%"></td>
                                    <td width="35%"></td>
                                 <td></td>
                                 <td></td><td></td>
                                 <td></td><td></td>
                                 <td></td>
                                    <td width="30%"><br /> <td>
                                    <td width="40%"> <td>
                                    </tr>
                                    <tr>
                                         <tr>
                                       <td width="10%"></td>
                                    <td width="35%"></td>
                                 <td></td>
                                 <td></td><td></td>
                                 <td></td><td></td>
                                 <td></td>
                                    <td width="30%"> <td>
                                    <td width="40%"> <td>
                                    </tr>
                                    <tr>
                                     
                                    <td width="35%" align="center">Nippos:</td>
                               
                                    <td width="30%" align="center" >Nippos: 
                                    <td>
                                    <td width="40%" align="center">Nippos:
                                    <td>
                                    </tr>
                                    </table>
                                    <h2><p class="pull-right"><center>PT. POS INDONESIA (PESERO) </center>  <a> </a>.
 		</p></h2>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                   
                            
</div>


