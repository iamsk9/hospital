<?php include "ip_header.php";?>
      <div id="row">
        <center><h3>Inital Assessment</h3></center>
      </div>
      <div id="row">
        <label>1.Compliants And Durations</label><br><br>
        <textarea class="form-control" rows="10" id="compliants" name="compliant" placeholder="Enter Compliants and Duration"></textarea>
      </div>
      <div id="row">
        <label>2.History of Present Illness</label><br><br>
        <textarea class="form-control" rows="10" id="present" name="history" placeholder="Enter History of Present Illness"></textarea>
      </div>

      <div id="row">
        <label>3.History Of Past Illness / Treatment History</label><br><br>
          <div class="form-group">
            <div class="col-md-2">
              3.1 Diabeties
            </div>
            <div class="form-group">
              <div class="radio">
                <div class="col-md-2">
                  <label>
                    <input type="radio" name="diabeties" id="diayes" value="yes">Yes
                  </label>
                </div>
                <div class="col-md-2">
                  <label>
                    <input type="radio" name="diabeties" id="diano" value="no" checked>No
                  </label>
                </div>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" name="ddetails" id="diabeties" placeholder="Enter Details">
              </div>
            </div>
          </div>
      </div><br><br>

      <div id="row">
        <div class="form-group">
          <div class="col-md-2">
            3.2 Hypertension
          </div>
          <div class="form-group">
            <div class="radio">
              <div class="col-md-2">
                <label>
                  <input type="radio" name="hyper" id="hypyes" value="yes">Yes
                </label>
              </div>
              <div class="col-md-2">
                <label>
                  <input type="radio" name="hyper" id="hypno" value="no" checked>No
                </label>
              </div>
            </div>
            <div class="col-md-6">
              <input type="text" class="form-control" name="hdetails" id="hyper" placeholder="Enter Details">
            </div>
          </div>
      </div><br><br>

      <div id="row">
        <div class="form-group">
          <div class="col-md-2">
            3.3 CAD
          </div>
          <div class="form-group">
            <div class="radio">
              <div class="col-md-2">
                <label>
                  <input type="radio" name="cad" id="cadyes" value="yes">Yes
                </label>
              </div>
              <div class="col-md-2">
                <label>
                  <input type="radio" name="cad" id="cadno" value="no" checked>No
                </label>
              </div>
              <div class="col-md-6">
                <input type="text" class="form-control" id="caddetails" name="caddetails" placeholder="Enter Details">
              </div>
            </div>
        </div>
      </div>
    </div><br><br>

      <div id="row">
        <div class="radio">
          <div class="col-md-2">
            3.4 Asthama
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="asthama" id="astyes" value="yes">Yes
            </label>
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="asthama" id="astno" value="no" checked>No
            </label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="astdetails" name="astdetails" placeholder="Enter Details">
          </div>
        </div>
      </div><br><br>

      <div id="row">
        <div class="radio">
          <div class="col-md-2">
            3.5 Tuberculosis
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="tuber" id="tubyes" value="yes">Yes
            </label>
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="tuber" id="tubno" value="no" checked>No
            </label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="tubdetails" name="tuberdetails" placeholder="Enter Details">
          </div>
        </div>
      </div><br><br>
      <div id="row">
        <div class="radio">
          <div class="col-md-2">
            3.6 Antibiotics
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="anti" id="antyes" value="yes">Yes
            </label>
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="anti" id="antno" value="no" checked>No
            </label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="antdetails" name="antdetails" placeholder="Enter Details">
          </div>
        </div>
      </div><br><br>
      <div id="row">
        <div class="radio">
          <div class="col-md-2">
            3.7 Hormones
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="hormones" id="horyes" value="yes">Yes
            </label>
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="hormones" id="horno" value="no" checked>No
            </label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="hordetails" name="hordetails" placeholder="Enter Details">
          </div>
        </div>
      </div><br><br>
      <div id="row">
        <div class="radio">
          <div class="col-md-2">
            3.8 Chemo/Radiation
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="chemo" id="cheyes" value="yes">Yes
            </label>
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="chemo" id="cheno" value="no" checked>No
            </label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="chedetails" name="chedetails" placeholder="Enter Details">
          </div>
        </div>
      </div><br><br>
      <div id="row">
        <div class="radio">
          <div class="col-md-2">
            3.9 Blood Transfusion
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="blood" id="bloyes" value="yes" >Yes
            </label>
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="blood" id="blono" value="no" checked>No
            </label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="blodetails" name="blooddetails" placeholder="Enter Details">
          </div>
        </div>
      </div><br><br>
      <div id="row">
        <div class="radio">
          <div class="col-md-2">
            3.10 Surgeries
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="surgeries" id="suryes" value="yes">Yes
            </label>
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="surgeries" id="surno" value="no" checked>No
            </label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="surdetails" name="surdetails" placeholder="Enter Details">
          </div>
        </div>
      </div><br><br>
      <div id="row">
        <div class="radio">
          <div class="col-md-2">
            3.11 Others
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="others" id="othyes" value="yes">Yes
            </label>
          </div>
          <div class="col-md-2">
            <label>
              <input type="radio" name="others" id="othno" value="no" checked>No
            </label>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" id="othdetails" name="othdetails" placeholder="Enter Details">
          </div>
        </div>
      </div><br><br>
    </div>
    </div>

  </br>
  </div>
  <script type="text/javascript">
  $("#diabeties").hide();
  $("#hyper").hide();
  $("#caddetails").hide();
  $("#astdetails").hide();
  $("#antdetails").hide();
  $("#tubdetails").hide();
  $("#hordetails").hide();
  $("#chedetails").hide();
  $("#blodetails").hide();
  $("#surdetails").hide();
  $("#othdetails").hide();


  $("#diayes").click(function(){
    $("#diabeties").show();
  });
  $("#diano").click(function(){
    $("#diabeties").hide();
  });
  $("#hypyes").click(function(){
    $("#hyper").show();
  });
  $("#hypno").click(function(){
    $("#hyper").hide();
  });
  $("#cadyes").click(function(){
    $("#caddetails").show();
  });
  $("#cadno").click(function(){
    $("#caddetails").hide();
  });
  $("#astyes").click(function(){
    $("#astdetails").show();
  });
  $("#astno").click(function(){
    $("#astdetails").hide();
  });
  $("#tubyes").click(function(){
    $("#tubdetails").show();
  });
  $("#tubno").click(function(){
    $("#tubdetails").hide();
  });
  $("#antyes").click(function(){
    $("#antdetails").show();
  });
  $("#antno").click(function(){
    $("#antdetails").hide();
  });
  $("#horyes").click(function(){
    $("#hordetails").show();
  });
  $("#horno").click(function(){
    $("#hordetails").hide();
  });
  $("#cheyes").click(function(){
    $("#chedetails").show();
  });
  $("#cheno").click(function(){
    $("#chedetails").hide();
  });
  $("#bloyes").click(function(){
    $("#blodetails").show();
  });
  $("#blono").click(function(){
    $("#blodetails").hide();
  });
  $("#suryes").click(function(){
    $("#surdetails").show();
  });
  $("#surno").click(function(){
    $("#surdetails").hide();
  });
  $("#othyes").click(function(){
    $("#othdetails").show();
  });
  $("#othno").click(function(){
    $("#othdetails").hide();
  });
  </script>
