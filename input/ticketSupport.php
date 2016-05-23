<div class="container">
  <h2></h2>
  <form class="form-horizontal" role="form" method="post" action="prosesInput.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Waktu :</label>
      <div class="col-sm-3">
         <div class='input-group date' id='datetimepicker1'>
            <input type='text' class="form-control" name="datetime" />
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Penelepon :</label>
      <div class="col-sm-5">
         <input type="text" class="form-control" id="penelepon" name="penelepon" placeholder="Isi data penelepon ..." required="true">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">No Telpon / HP :</label>
      <div class="col-sm-5">
         <input type="number" class="form-control" id="notlp" name="notlp" placeholder="No Telpon / HP ..." required="true">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Perusahaan :</label>
      <div class="col-sm-5">
         <input type="text" class="form-control" id="perusahaan" name="perusahaan" placeholder="Perusahaan ..." required="true">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Keperluan :</label>
      <div class="col-sm-5">
         <textarea type="text" Rows="5" class="form-control" id="keperluan" name="keperluan" placeholder="Keperluan ..." required="true"></textarea>
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Status :</label>
      <div class="col-sm-3">
        <select class="form-control" id="status" name="status">
            <option value="Open">Open</option>
            <option value="Closed">Closed</option>
        </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Tujuan Penerima :</label>
      <div class="col-sm-5 ">
        <div class="input-group">
           <input type="text" class="form-control" id="penerima" name="penerima" placeholder="Tujuan Penerima ..." required="true" >
              <span class="input-group-addon">
                  <span class="glyphicon glyphicon-search"></span>
              </span>
        </div>      
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="email">User :</label>
      <div class="col-sm-3">
         <input type="text" class="form-control" id="user" name="user" value="<?php echo $emp_code;?>" readonly="true">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-2 success">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <div class="col-sm-offset-2 col-sm-2">
        <a href="/callCenter/record" class="btn btn-warning">Cancel</a>
      </div>  
    </div>
  </form>
</div>