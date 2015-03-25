<?php if($this->input->post('NO_KP')){ ?>
<div class="container">
    <div class="row">
        <div style="width:750px;margin-left: auto; margin-right: auto;margin-top: 50px;">
        <div class="widget_heading">
        <h4>Semakan Keahlian</h4>
    </div>
        <div class="widget_semak form-horizontal">
        <?php if($hasil_sem == 'ada'){ 
             ?>         
            <div class="control-group">
                <label class="control-label">Nama :</label>
                <div class="controls">
                    <span> <?php echo $semak['nama']; ?></span>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label">No KP :</label>
                <div class="controls">
                    <span> <?php echo $semak['no_kp']; ?></span>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label">No Ahli :</label>
                <div class="controls">
                    <span> <?php echo $semak['no_ahli']; ?></span>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label">Kementerian/</br>Jabatan/Agensi :</label>
                <div class="controls">
                    <span> <?php echo $semak['agensi']; ?></span>
                </div>
            </div>
            

               
        </div>
            
        <div class="widget_semak " style="max-height:300px; overflow-y:scroll;">
               <h5>Rekod Bayaran</h5>
                <table width="70%" class="table table-bordered table-striped table-highlight" >
                    <thead>
                        <th>Tahun</th>
                        <th>Status Bayaran</th>
                    </thead>
                    <?php 
                    if(!empty($rekod_byrn)){
                    foreach($rekod_byrn as $row){ ?>
                    <tr>
                        <td><?php echo $row['tahun']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                    </tr>
                    <?php }}else{ ?>
                     <tr>
                        <td colspan="2">Tiada Rekod Pembayaran Setakat Ini</td>
                        
                    </tr>
                    
                    <?php } ?>
                </table>
                

            
               <?php 
        } else {?>  
               <h4 style="color:red">TIADA DALAM REKOD</h4>
               
               <?php } ?>
        </div>
            
            
            
        </div>
    </div>
    
    
</div>
<?php }else{ ?>

<div style="width:350px;margin-left: auto; margin-right: auto;margin-top: 220px;">
    <div class="widget_heading">
        <h4>Semakan Keahlian</h4>
    </div>
    <form method="POST" action="<?php echo base_url(); ?>index.php/semakan">
    <div class="widget_semak">
         <div class="control-group">
				<div class="controls">                           
                    <input style="width: 295px;padding:10px;" placeholder="No Kad Pengenalan"name="NO_KP" id="NO_KP" type="text"  maxlength="30"  value=""  class="input-large">
				</div>
                <div class="controls">                           
                    <button class="btn btn-large btn-success" style="width: 100%;">Semak</button>
				</div>
        </div>
    </div>
    </form>
</div>

<?php } ?>
