<div class="laporan_transaksi_header">
    

<div class="laporan_transaksi"><button onClick="window.print();">Print</button>
								<?php if(@$cari1):?>
                                                 
                                <H2 align="center">Laporan Kapasitas Beban Antar Tahunan       </H2>
    <p class="pull-right"><center>PT. POS INDONESIA (PESERO) </center>  <a> </a>.
 		</p></h2>                
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
										 foreach ($cari1 as $rows): ?>
                                        <tr>
                                          <td align="center"><?php echo $i++?></td>
                                          <td><?php echo $rows ->nippos;?> </td>
                                          <td><?php echo $rows ->tgl_rekap;?> </td>
                                          <td><?php echo $rows ->terkirim;?> </td>
                                          <td><?php echo $rows->presentase;?> </td>
                                          <td><?php echo $rows->status;?> </td>
                                        </tr>
                                       
                                       
                                      </tbody>
                                        <?php endforeach; ?>
                                        <tr>
                                          <td align="center">&nbsp;</td>
                                          <td>                               <td></td> <?php
$sum = 0;
foreach($cari1 as $rows){
 $sum += str_replace(",", "", $rows->status);
}?>
                                          <td>Jumlah </td>
                                          <td> <?php echo $sum ;?></td>
                                          <td> </td>
                                        </tr>
                                       
                                        <?php endif?> 
                                      <br />
                                      <br />
                                    </table>
                                 <br />
                                   <table border="0" align="center" class="table table-bordered table-condensed table-hover table-striped">
                                    
                                    <tr>
                                   
                                     
                                    <td width="25%" align="center">Ditetapkan</td>
                               
                                    <td width="48%" align="center" >Disetujui </td>
                                    <td width="25%" align="center">Dibuat Oleh </td>
                                    </tr>
                                       <tr>
                                      
                                    <td  align="center">Ka.Kp</td>
                                
                                    <td  align="center">SPV.Antaran 
                                    </td>
                                    <td align="center" >Mandor Antaran
                                    </td>
                                    </tr>
                                    
                                     <tr>
                               <td></td>
                                 
                               </tr>
                                    <tr>
                                     
                                 <td></td>
                                  </tr>
                                  <tr>
                               <td></td>
                                 
                               </tr>
                                    <tr>
                                     
                                 <td></td>
                                  </tr>
                                  <tr>
                               <td></td>
                                 
                               </tr> </tr>
                                    <tr>
                                     
                                 <td></td>
                                  </tr>
                                  <tr>
                               <td></td>
                                 
                               </tr>
                                    <tr>
                                     
                                 <td></td>
                                  </tr>
                                  <tr>
                               <td></td>
                                </tr>
                                    <tr>
                                     
                                 <td></td>
                                  </tr>
                                  <tr>
                               <td></td>
                                 
                               </tr>
                                    <tr>
                                     
                                 <td></td>
                                  </tr>
                                  <tr>
                               <td></td>
                                 
                               </tr>
                                </tr>
                                    <tr>
                                     
                                 <td></td>
                                  </tr>
                                  <tr>
                               <td></td>
                                 
                               </tr>
                                    <tr>
                                     
                                 <td></td>
                                  </tr>
                                  <tr>
                               <td></td>
                                 
                               </tr>
                                 
                               </tr>
                                    <tr>
                                     
                                 <td></td>
                                  </tr>
                                       
                                 <tr>
                             
                                 
                                    
                                  
                                    <td  align="center">Nippos:</td>
                               
                                    <td  align="center" >Nippos: 
                                    </td>
                                    <td  align="center">Nippos:
                                    
                                    </tr>
                                    </table>
                                   
                                    
                                   
                            
</div>


