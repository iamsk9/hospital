<?php include "ip_header.php"; ?>
      <br>
      <div id="row">
       <label>6. Menstrual History</label>
     </div>
      <div class="row">
      <div class="col-md-6">
        <div class="col-md-1">
          6.1
        </div>
        <div class="col-md-5">
           Age of Menarche
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="menarche" placeholder="Enter Age">
        </div><br><br>
        <div class="col-md-1">
          6.2
        </div>
        <div class="col-md-5">
           Menstrual Cycle
        </div><br><br><br>
        <div class="col-md-1">
          6.3
        </div>
        <div class="col-md-5">
          LMP
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="lmp" placeholder="Enter LMP">
        </div><br><br>
        <div class="col-md-1">
          6.4
        </div>
        <div class="col-md-5">
          Any Gyneacological Problems
        </div>
        <div class="col-md-3">
          <label>
            <input type="radio" name="gyes" id="gynyes" value="yes" checked>Yes
          </label>
        </div>
        <div class="col-md-3">
          <label>
            <input type="radio" name="gyes" id="gynno" value="no" checked>No
          </label>
        </div>
        <!-- <div class="col-md-4">
          <label>
            <input type="text" name="Gyneacodetails" id="gyneadetails" placeholder="Enter Details">
          </label>
        </div> -->
      </div>
      <div class="col-md-6">
        <br><br>
        <div class="col-md-6">
           Duration of Cycle
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="duration" placeholder="Enter Duration of Cycle">
        </div><br><br>
        <div class="col-md-6">
           No.of days of Bleeding
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="days" placeholder="Enter no of days">
        </div><br><br><br>
        <div class="col-md-12">
          <input type="text" class="form-control" name="gyndetails" id="gyndetails" placeholder="Enter Details">
        </div>
      </div>
      </div>
    </div>
    </div>

    <script type="text/javascript">
      $("#gyndetails").hide();


      $("#gynyes").click(function(){
        $("#gyndetails").show();
      });
      $("#gynno").click(function(){
        $("#gyndetails").hide();
      });

    </script>
