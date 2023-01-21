<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">    
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Form Data Penduduk</div>
                <!-- <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="/accounts/login/"></a></div> -->
            </div>  
            <div class="panel-body" >
                <form method="post" action=".">
                    <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                            

                    <form  class="form-horizontal" method="post" >
                        <input type='hidden' name='csrfmiddlewaretoken' value='XFe2rTYl9WOpV8U6X5CfbIuOZOELJ97S' />
                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Nomor KK<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Masukkan Nomor KK" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">NIK<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Masukkan NIK" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Nama<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Masukkan Nama" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_select" class="form-group required">
                            <label for="id_select"  class="control-label col-md-4  requiredField">Jenis Kelamin<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "  style="margin-bottom: 10px">
                                <label class="radio-inline"><input type="radio" checked="checked" name="select" id="id_select_1" value="S"  style="margin-bottom: 10px">Laki-laki</label>
                                <label class="radio-inline"> <input type="radio" name="select" id="id_select_2" value="P"  style="margin-bottom: 10px">Perempuan</label>
                            </div>
                        </div> 

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Alamat<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Masukkan Alamat" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">RT/RW<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Masukkan RT/RW" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Tempat Lahir<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Masukkan Tempat Lahir" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Tanggal Lahir<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Masukkan Tanggal Lahir" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Agama<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <select class="selectpicker form-control" style="margin-bottom: 10px">
                                     <option>Islam</option>
                                     <option>Kristen</option>
                                     <option>Katolik</option>
                                     <option>Hindu</option>
                                     <option>Budha</option>
                                     <option>Konghucu</option>
                                  </select>
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Pendidikan<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <select class="selectpicker form-control" style="margin-bottom: 10px">
                                     <option>Tidak Sekolah</option>
                                     <option>SD</option>
                                     <option>SLTP</option>
                                     <option>SLTA</option>
                                     <option>Sarjana</option>
                                     <option>Lain-lain</option>
                                  </select>
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Pekerjaan<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Masukkan Pekerjaan" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Status Perkawinan<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <select class="selectpicker form-control" style="margin-bottom: 10px">
                                     <option>Kawin</option>
                                     <option>Belum Kawin</option>
                                     <option>Janda</option>
                                     <option>Duda</option>
                                  </select>
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Status Keluarga<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Masukkan Status Keluarga" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_select" class="form-group required">
                            <label for="id_select"  class="control-label col-md-4  requiredField">Kewarganegaraan<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 "  style="margin-bottom: 10px">
                                <label class="radio-inline"><input type="radio" checked="checked" name="select" id="id_select_1" value="S"  style="margin-bottom: 10px">WNI</label>
                                <label class="radio-inline"> <input type="radio" name="select" id="id_select_2" value="P"  style="margin-bottom: 10px">WNA</label>
                            </div>
                        </div> 

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Nomor Paspor<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Masukkan Nomor Paspor" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Nama Ayah<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Masukkan Nama Ayah" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Nama Ibu<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Masukkan Nama Ibu" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        <div id="div_id_username" class="form-group required">
                            <label for="id_username" class="control-label col-md-4  requiredField">Keterangan<span class="asteriskField">*</span> </label>
                            <div class="controls col-md-8 ">
                                <input class="input-md  textinput textInput form-control" id="id_username" maxlength="30" name="username" placeholder="Masukkan Keterangan" style="margin-bottom: 10px" type="text" />
                            </div>
                        </div>

                        

                        
                        <div class="form-group">
                            <div class="controls col-md-offset-4 col-md-8 ">
                                <div id="div_id_terms" class="checkbox required">
                                    <label for="id_terms" class=" requiredField">
                                         <input class="input-ms checkboxinput" id="id_terms" name="terms" style="margin-bottom: 10px" type="checkbox" />
                                         Data yang telah diinputkan sudah benar
                                    </label>
                                </div> 
                                    
                            </div>
                        </div> 
                        <div class="form-group"> 
                            <div class="aab controls col-md-4 "></div>
                            <div class="controls col-md-8 ">
                                <input type="submit" name="Submit" value="Signup" class="btn btn-primary btn btn-info" id="submit-id-signup" />
                            </div>
                        </div> 
                    </form>
                </form>
                <a href="logout.php">LogOut</a>
            </div>
        </div>
    </div> 
</div>
</div>            