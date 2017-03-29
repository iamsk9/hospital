<?php include "ip_header.php"; ?>
      </div>
      <div class="row">
      <div class="form-group">
        <div class="col-md-6"><br>
          <label>4.Personal History</label>
          <div class="radio">
            <div class="col-md-4">
              4.1 Marital Status
              </div>
              <div class="col-md-4">
              <label>
                <input type="radio" name="status" id="single" value="single" checked>Single
              </label>
              </div>
              <div class="col-md-4">
              <label>
                <input type="radio" name="status" id="married" value="married">Married
              </label>
              </div>
          </div><br>
          <div class="radio">
            <div class="col-md-4">
              4.3 Appetite
              </div>
              <div class="col-md-4">
              <label>
                <input type="radio" name="Appetite" id="normal" value="normal" checked>Normal
              </label>
              </div>
              <div class="col-md-4">
              <label>
                <input type="radio" name="Appetite" id="lost" value="lost">Lost
              </label>
              </div>
            </div><br>
            <div class="radio">
              <div class="col-md-3">
                4.5 Bowels
              </div>
              <div class="col-md-3">
              <label>
                <input type="radio" name="Bowels" id="regular" value="regular" checked>Regular
              </label>
              </div>
              <div class="col-md-3">
              <label>
                <input type="radio" name="Bowels" id="Irregular" value="Irregular" >Irregular
              </label>
              </div>
              <div class="col-md-3">
                <label>
                <input type="radio" name="Bowels" id="Constipantion" value="Constipantion">Constipantion
                </label>
              </div>
            </div><br>
            <div class="radio">
              <div class="col-md-4">
                4.7 Known Allergies
              </div>
              <div class="col-md-2">
                <label>
                <input type="radio" name="Allergies" id="knoyes" value="yes" checked>Yes
                </label>
              </div>
              <div class="col-md-2">
                <label>
                <input type="radio" name="Allergies" id="knono" value="no" checked>No
                </label>
              </div>
              <div class="col-md-4">
                <label>
                  <input type="text" name="Alldetails" id="knodetails" placeholder="Enter Details">
                </label>
              </div>
            </div><br>
            <div class="col-md-12">
              4.8 Habits/Addicitons
            </div><br>
            <div class="radio">
              <div class="col-md-3">
                a) Alcohol
              </div>
              <div class="col-md-3">
                <label>
                <input type="radio" name="Alcohol" id="aregular" value="aregular" checked>Regular
                </label>
              </div>
              <div class="col-md-3">
                <label>
                <input type="radio" name="Alcohol" id="occassional" value="occassional" checked>Occassional
                </label>
              </div>
              <div class="col-md-3">
                <label>
                <input type="radio" name="Alcohol" id="teetotataler" value="teetotataler" checked>Teetotataler
                </label>
              </div>
            </div><br>
            <div class="radio">
              <div class="col-md-3">
                b) Tobacco
              </div>
              <div class="col-md-3">
                <label>
                <input type="radio" name="Tobacco" id="snuff" value="snuff" checked>Snuff
                </label>
              </div>
              <div class="col-md-3">
                <label>
                <input type="radio" name="Tobacco" id="chewable" value="chewable" checked>Chewable
                </label>
              </div>
              <div class="col-md-3">
                <label>
                <input type="radio" name="Tobacco" id="smoking" value="smoking" checked>Smoking
                </label>
              </div>
            </div><br>
            <div class="radio">
              <div class="col-md-3">
                c) Drug Use
              </div>
              <div class="col-md-3">
                <label>
                <input type="radio" name="Drug" id="druyes" value="dyes" checked>Yes
                </label>
              </div>
              <div class="col-md-3">
                <label>
                <input type="radio" name="Drug" id="druno" value="dno" checked>No
                </label>
              </div>
              <div class="col-md-3">
                <label>
                  <input type="text" name="Drugdetails" id="drudetails" placeholder="Enter Details">
                </label>
              </div>
            </div><br>
            <div class="radio">
              <div class="col-md-3">
                d) Betal nut
              </div>
              <div class="col-md-3">
                <label>
                <input type="radio" name="Betal" id="betyes" value="byes" checked>Yes
                </label>
              </div>
              <div class="col-md-3">
                <label>
                <input type="radio" name="Betal" id="betno" value="bno" checked>No
                </label>
              </div>
              <div class="col-md-3">
                <label>
                  <input type="text" name="betdetails" id="betdetails" placeholder="Enter Details">
                </label>
              </div>
            </div><br>
            <div class="radio">
              <div class="col-md-3">
                c) Betel Leaf
              </div>
              <div class="col-md-3">
                <label>
                <input type="radio" name="Betel1" id="belyes" value="blyes" checked>Yes
                </label>
              </div>
              <div class="col-md-3">
                <label>
                <input type="radio" name="Betel1" id="belno" value="blno" checked>No
                </label>
              </div>
              <div class="col-md-3">
                <label>
                  <input type="text" name="betdetails1" id="beldetails" placeholder="Enter Details">
                </label>
              </div>
            </div><br>
        </div>
        <div class="col-md-6"><br>
          <label></label>
          <div class="radio">
            <!-- <div class="col-md-2">
              4.2
            </div> -->
            <div class="col-md-5">
              4.2   Occupation :
            <!-- </div> -->
            <!-- <div class="col-md-5"> -->
              <input type="text" name="Occupation" id="bldetails" placeholder="Enter Occupation">
            </div>
          </div><br>
          <div class="radio">
            <div class="col-md-2">
              4.3
            <!-- </div>
            <div class="col-md-5"> -->
              <label>
              <input type="radio" name="veg" id="veg" value="veg" checked>  Vegetarian
              </label>
            </div>
            <div class="col-md-5">
              <label>
              <input type="radio" name="veg" id="nonveg" value="nonveg" checked>Non Vegetarian
              </label>
            </div>
          </div><br>
          <div class="radio">
            <div class="col-md-4">
              4.6 Micturition
            </div>
            <div class="col-md-4">
              <label>
              <input type="radio" name="Micturition" id="mnormal" value="mnormal" checked>Normal
              </label>
            </div>
            <div class="col-md-4">
              <label>
              <input type="radio" name="Micturition" id="abnormal" value="abnormal" checked>Abnormal
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
<br>
    <div id="row">
      <label>5. Family History</label><br><br>
      <div class="radio">
        <div class="col-md-2">
          5.1 Diabeties
        </div>
        <div class="col-md-2">
          <label>
            <input type="radio" name="dyes" id="diyes" value="yes" checked>Yes
          </label>
        </div>
        <div class="col-md-2">
          <label>
            <input type="radio" name="dyes" id="dino" value="no" checked>No
          </label>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="diabeties1" id="didetails" placeholder="Enter Details">
        </div>
      </div>
    </div><br><br>
    <div id="row">
      <div class="radio">
        <div class="col-md-2">
          5.2 Hypertension
        </div>
        <div class="col-md-2">
          <label>
            <input type="radio" name="hyes" id="hyyes" value="yes" checked>Yes
          </label>
        </div>
        <div class="col-md-2">
          <label>
            <input type="radio" name="hyes" id="hyno" value="no" checked>No
          </label>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="hyper1" id="hydetails" placeholder="Enter Details">
        </div>
      </div>
    </div><br><br>
    <div id="row">
      <div class="radio">
        <div class="col-md-2">
          5.3 Heart Diease
        </div>
        <div class="col-md-2">
          <label>
            <input type="radio" name="heyes" id="heyes" value="yes" checked>Yes
          </label>
        </div>
        <div class="col-md-2">
          <label>
            <input type="radio" name="heyes" id="heno" value="no" checked>No
          </label>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="hedetails" id="hedetails" placeholder="Enter Details">
        </div>
      </div>
    </div><br><br>
    <div id="row">
      <div class="radio">
        <div class="col-md-2">
          5.4 Stroke
        </div>
        <div class="col-md-2">
          <label>
            <input type="radio" name="syes" id="stryes" value="yes" checked>Yes
          </label>
        </div>
        <div class="col-md-2">
          <label>
            <input type="radio" name="syes" id="strno" value="no" checked>No
          </label>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="strdetails" id="strdetails" placeholder="Enter Details">
        </div>
      </div>
    </div><br><br>
    <div id="row">
      <div class="radio">
        <div class="col-md-2">
          5.5 Cancer
        </div>
        <div class="col-md-2">
          <label>
            <input type="radio" name="cyes" id="canyes" value="yes" checked>Yes
          </label>
        </div>
        <div class="col-md-2">
          <label>
            <input type="radio" name="cyes" id="canno" value="no" checked>No
          </label>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="candetails" id="candetails" placeholder="Enter Details">
        </div>
      </div>
    </div><br><br>
    <div id="row">
      <div class="radio">
        <div class="col-md-2">
          5.6 Tuberculosis
        </div>
        <div class="col-md-2">
          <label>
            <input type="radio" name="ttyes" id="ttyes" value="yes" checked>Yes
          </label>
        </div>
        <div class="col-md-2">
          <label>
            <input type="radio" name="ttyes" id="ttno" value="no" checked>No
          </label>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="ttdetails" id="ttdetails" placeholder="Enter Details">
        </div>
      </div>
    </div><br><br>
    <div id="row">
      <div class="radio">
        <div class="col-md-2">
          5.7 Asthma
        </div>
        <div class="col-md-2">
          <label>
            <input type="radio" name="asyes" id="asyes" value="yes">Yes
          </label>
        </div>
        <div class="col-md-2">
          <label>
            <input type="radio" name="asyes" id="asno" value="no" checked>No
          </label>
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="asdetails" id="asdetails" placeholder="Enter Details">
        </div>
      </div>
    </div><br><br>
    <div id="row">
      <div class="radio">
        <div class="col-md-6">
          5.8 Any Other Hereditary disease
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="hereditary" placeholder="Enter Details">
        </div>
      </div>
    </div><br><br>
    <div id="row">
      <div class="radio">
        <div class="col-md-6">
          5.9 Psychiatrist Illness
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="psychiatrist" placeholder="Enter Details">
        </div>
      </div>
    </div><br><br>
    <div id="row">
      <div class="radio">
        <div class="col-md-6">
          5.10 Sibiling History
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="sibiling" placeholder="Enter Details">
        </div>
      </div>
    </div><br><br>
    <div id="row">
      <div class="radio">
        <div class="col-md-6">
          5.11 Any Other
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="other" placeholder="Enter Details">
        </div>
      </div>
    </div><br><br>
    </div>

<script type="text/javascript">
  $("#knodetails").hide();
  $("#drudetails").hide();
  $("#betdetails").hide();
  $("#beldetails").hide();

  $("#didetails").hide();
  $("#hydetails").hide();
  $("#hedetails").hide();
  $("#strdetails").hide();
  $("#candetails").hide();
  $("#ttdetails").hide();
  $("#asdetails").hide();

  $("#knoyes").click(function(){
    $("#knodetails").show();
  });
  $("#knono").click(function(){
    $("#knodetails").hide();
  });
  $("#druyes").click(function(){
    $("#drudetails").show();
  });
  $("#druno").click(function(){
    $("#drudetails").hide();
  });
  $("#betyes").click(function(){
    $("#betdetails").show();
  });
  $("#betno").click(function(){
    $("#betdetails").hide();
  });
  $("#belyes").click(function(){
    $("#knodetails").show();
  });
  $("#belno").click(function(){
    $("#knodetails").hide();
  });

  $("#diyes").click(function(){
    $("#didetails").show();
  });
  $("#dino").click(function(){
    $("#didetails").hide();
  });
  $("#hyyes").click(function(){
    $("#hydetails").show();
  });
  $("#hyno").click(function(){
    $("#hydetails").hide();
  });
  $("#heyes").click(function(){
    $("#hedetails").show();
  });
  $("#heno").click(function(){
    $("#hedetails").hide();
  });
  $("#stryes").click(function(){
    $("#strdetails").show();
  });
  $("#strno").click(function(){
    $("#strdetails").hide();
  });

  $("#canyes").click(function(){
    $("#candetails").show();
  });
  $("#canno").click(function(){
    $("#candetails").hide();
  });
  $("#ttyes").click(function(){
    $("#ttdetails").show();
  });
  $("#ttno").click(function(){
    $("#ttdetails").hide();
  });
  $("#asyes").click(function(){
    $("#asdetails").show();
  });
  $("#asno").click(function(){
    $("#asdetails").hide();
  });

</script>
