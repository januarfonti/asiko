<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets'); ?>/js/jquery-ui-1.10.3.min.js"></script>
<div class="rightpanel">
        

        <ul class="breadcrumbs">
            <div class="container">
                <li><a href="dashboard.html"><i class="fa fa-home"></i></a> Surat</li>
            </div>
        </ul>
        
        
        <div class="maincontent">
            <div class="maincontentinner">
                
                <?php echo $this->session->flashdata('pesan');  ?>

                <div class="widget">
            <h1 class="widgettitle"><i class="fa fa-envelope"></i> Inputan Surat Masuk</h1>
            <div class="widgetcontent">
                

                <?php echo form_open_multipart('surat/simpan',array('class' => 'stdform stdform2'));?>
                        
                        <p class="animate1 bounceIn">
                            <label>1. Nomor Urut</label>
                            <span class="field"><input type="text" name="no_urut" class="input-xlarge" placeholder="Nomor Urut" required /></span>
                        </p>

                        <p class="animate2 bounceIn">
                            <label>2. Nomor Agenda</label>
                            <span class="field"><input type="text" name="no_agenda" class="input-xlarge" placeholder="Nomor Agenda" required /></span>
                        </p>

                        <p class="animate3 bounceIn">
                            <label>3. Nomor Surat</label>
                            <span class="field"><input type="text" name="no_surat" class="input-xlarge" placeholder="Nomor Surat" required /></span>
                        </p>

                        <p class="animate4 bounceIn">
                            <label>4. Asal Surat / Pengirim</label>
                            <span class="field"><input type="text" name="pengirim" class="input-xxlarge" placeholder="Asal Surat / Pengirim" required /></span>
                        </p>

                        <div class="par animate5 bounceIn">
                            <label>5. Tanggal Surat</label>
                            <span class="field"><input id="datepicker" type="text" name="tgl_surat" class="input-large" placeholder="Tanggal Surat" /></span>
                        </div> 

                        <div class="par animate6 bounceIn">
                            <label>6. Tanggal Masuk</label>
                            <span class="field"><input id="datepicker2" type="text" name="tgl_masuk" class="input-large" placeholder="Tanggal Masuk" /></span>
                        </div> 


                        <p class="animate7 bounceIn">
                            <label>7. Perihal</label>
                            <span class="field">
                                <select id="perihal" name="perihal" data-placeholder="Pilih ..." style="width:350px" class="chzn-select" tabindex="2">
                                    <option value="Perubahan APBD">Perubahan APBD</option> 
                                    <option value="PPKD">PPKD</option> 
                                    <option value="Surat_Penyediaan_Dana">Surat Penyediaan Dana</option> 
                                </select>
                            </span>
                        </p>

                        <p id="PPKD" class="subperihal" style="display:none">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Sub Perihal</label>
                            <span class="field">
                                <select name="subperihal" data-placeholder="Pilihan" style="width:350px" class="chzn-select" tabindex="2">
                                    <option value="Hibah">Hibah</option> 
                                    <option value="Bantuan Keuangan Desa">Bantuan Keuangan Desa</option> 
                                    <option value="Bagi Hasil">Bagi Hasil</option> 
                                    <option value="Belanja Tak Terduga">Belanja Tak Terduga</option> 
                                </select>
                            </span>
                        </p>

                        <p id="Surat_Penyediaan_Dana" class="subperihal" style="display:none">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Sub Perihal</label>
                            <span class="field">
                                <select name="subperihal" data-placeholder="Pilihan" style="width:350px" class="chzn-select" tabindex="2">
                                    <option value="Anggaran Kas">Anggaran Kas</option> 
                                    <option value="Perubahan SPD">Perubahan SPD</option> 
                                    <option value="Revisi DPA/DPPA">Revisi DPA/DPPA</option> 
                                </select>
                            </span>
                        </p>

                        <p class="animate8 bounceIn">
                            <label>8. a. Disposisi</label>
                            <span class="field">
                                <select name="disposisi_a" data-placeholder="Pilih ..." style="width:350px" class="chzn-select" tabindex="2">
                                    <option value="Bupati">Bupati</option> 
                                </select>
                            </span>
                        </p>

                        <div class="par animate9 bounceIn">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</label>
                            <span class="field"><input id="datepicker3" type="text" name="tgl_a" class="input-large" placeholder="Tanggal" /></span>
                        </div> 

                         <p class="animate10 bounceIn">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Isi</label>
                            <span class="field"><textarea cols="80" rows="5" class="span6" name="isi_disposisi_a"></textarea></span> 
                        </p>

                        <p class="animate11 bounceIn">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Disposisi</label>
                            <span class="field">
                                <select name="disposisi_b" data-placeholder="Pilih ..." style="width:350px" class="chzn-select" tabindex="2">
                                    <option value="Bupati">Bupati</option> 
                                </select>
                            </span>
                        </p>

                        <div class="par animate12 bounceIn">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</label>
                            <span class="field"><input id="datepicker4" type="text" name="tgl_b" class="input-large" placeholder="Tanggal" /></span>
                        </div> 

                         <p class="animate13 bounceIn">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Isi</label>
                            <span class="field"><textarea cols="80" rows="5" class="span6" name="isi_disposisi_b"></textarea></span> 
                        </p>

                        <p class="animate14 bounceIn">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. Disposisi</label>
                            <span class="field">
                                <select name="disposisi_c" data-placeholder="Pilih ..." style="width:350px" class="chzn-select" tabindex="2">
                                    <option value="Bupati">Bupati</option> 
                                </select>
                            </span>
                        </p>

                        <div class="par animate15 bounceIn">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</label>
                            <span class="field"><input id="datepicker5" type="text" name="tgl_c" class="input-large" placeholder="Tanggal" /></span>
                        </div> 

                         <p class="animate16 bounceIn">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Isi</label>
                            <span class="field"><textarea cols="80" rows="5" class="span6" name="isi_disposisi_c"></textarea></span> 
                        </p>

                        <p class="animate17 bounceIn">
                            <label>9. Isi Surat</label>
                            <span class="field"><input type="text" name="isi_surat" class="input-xxlarge" placeholder="Isi Surat" required /></span>
                        </p>

                        <p class="animate18 bounceIn">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Uraian Singkat</label>
                            <span class="field"><textarea cols="80" rows="5" class="span6" name="uraian_singkat"></textarea></span> 
                        </p>

                        <p class="animate19 bounceIn">
                            <label>10. Nominal</label>
                            <span class="field"><input type="text" name="nominal" class="input-xlarge" placeholder="Nominal" required /></span>
                        </p>
                        
                            
                            <div class="par animate20 bounceIn">
                                <label>11. Lampiran</label>
                                <div class="field fileupload fileupload-new" data-provides="fileupload">
                                <div class="input-append">
                                <div class="uneditable-input span3">
                                    <i class="iconfa-file fileupload-exists"></i>
                                    <span class="fileupload-preview"></span>
                                </div>
                                <span class="btn btn-file"><span class="fileupload-new">Select file</span>
                                <span class="fileupload-exists">Change</span>
                                <input type="file" name="userfile" /></span>
                                <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                                </div>
                                </div>
                            </div>

                        <p class="animate20 bounceIn">
                            <label>12. Tindak Lanjut Pelaksana</label>
                            <span class="field"><input type="text" name="pelaksana" class="input-xlarge" placeholder="Pelaksana" required /></span>
                        </p>

                        <div class="par animate20 bounceIn">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</label>
                            <span class="field"><input id="datepicker6" type="text" name="tgl_pelaksana" class="input-large" placeholder="Tanggal Pelaksana" /></span>
                        </div> 

                        <p class="animate20 bounceIn">
                            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keterangan</label>
                            <span class="field"><textarea cols="80" rows="5" class="span6" name="keterangan"></textarea></span> 
                        </p>

                        <p class="animate20 bounceIn stdformbutton">
                                <label></label>
                                <button class="btn btn-primary">Submit Button</button>
                                <button type="reset" class="btn">Reset Button</button>
                            </p>
                                        
                        
                
                                         
                                        
                                        
                                </form>
                            </div><!--widgetcontent-->
                            </div><!--widget-->
                
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->


    <script>
   

jQuery("#datepicker").datepicker({
  dateFormat: "yy-mm-dd"
});
jQuery("#datepicker2").datepicker({
  dateFormat: "yy-mm-dd"
});
jQuery("#datepicker3").datepicker({
  dateFormat: "yy-mm-dd"
});
jQuery("#datepicker4").datepicker({
  dateFormat: "yy-mm-dd"
});
jQuery("#datepicker5").datepicker({
  dateFormat: "yy-mm-dd"
});
jQuery("#datepicker6").datepicker({
  dateFormat: "yy-mm-dd"
});


</script>

<script type="text/javascript">
        $(function() {
        $('#perihal').change(function(){
            $('.subperihal').hide();
            $('#' + $(this).val()).show();
        });
    });
</script>