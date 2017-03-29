
    <?php include "ip_header.php"; ?>
      <div id="row">
       <label>9.Physical Examination</label>
     </div><br>
      <label>A. General</label>
      <div class="row">
        <div class="col-md-6">
          <div class="col-md-6">
            1.Height
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="height" placeholder="Enter Height">
          </div><br><br>
          <div class="col-md-6">
            3.BMI
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control" name="bmi" placeholder="Enter BMI">
          </div><br><br>
          <div class="col-md-6">
            5.Pallor
          </div>
          <div class="col-md-3">
            <label>
              <input type="radio" name="Pallor" id="pyes" value="yes" checked> Yes
            </label>
          </div>
          <div class="col-md-3">
            <label>
              <input type="radio" name="Pallor" id="nno" value="no" checked> No
            </label>
          </div><br><br>
          <div class="col-md-6">
            7.Cyanosis
          </div>
          <div class="col-md-3">
            <label>
              <input type="radio" name="Cyanosis" id="cyes" value="yes" checked> Yes
            </label>
          </div>
          <div class="col-md-3">
            <label>
              <input type="radio" name="Cyanosis" id="cno" value="no" checked> No
            </label>
          </div><br><br>
          <div class="col-md-6">
            9.Lymphadenopathy
          </div>
          <div class="col-md-3">
            <label>
              <input type="radio" name="pathy" id="lyes" value="yes" checked> Yes
            </label>
          </div>
          <div class="col-md-3">
            <label>
              <input type="radio" name="pathy" id="lno" value="no" checked> No
            </label>
          </div><br><br>
          <div class="col-md-6">
            11.Malnutrition
          </div>
          <div class="col-md-3">
            <label>
              <input type="radio" name="Malnutrition" id="myes" value="myes" checked> Yes
            </label>
          </div>
          <div class="col-md-3">
            <label>
              <input type="radio" name="Malnutrition" id="mno" value="mno" checked> No
            </label>
          </div><br><br>
      </div>
      <div class="col-md-6">
        <div class="col-md-6">
          2.Weight
        </div>
        <div class="col-md-6">
          <input type="text" class="form-control" name="weight" placeholder="Enter Weight">
        </div><br><br>
        <div class="col-md-6">
          4.Body Surface Area
        </div>
        <div class="col-md-5">
          <input type="text" class="form-control" name="bsa" placeholder="Enter Body Surface Area">
        </div>m2<br><br>
        <div class="col-md-6">
          6.Icterus
        </div>
        <div class="col-md-3">
          <label>
            <input type="radio" name="Icterus" id="iyes" value="yes" checked> Yes
          </label>
        </div>
        <div class="col-md-3">
          <label>
            <input type="radio" name="Icterus" id="ino" value="no" checked> No
          </label>
        </div><br><br>
        <div class="col-md-6">
          8.Clubbing of fingers/toes
        </div>
        <div class="col-md-3">
          <label>
            <input type="radio" name="fingers" id="tyes" value="yes" checked> Yes
          </label>
        </div>
        <div class="col-md-3">
          <label>
            <input type="radio" name="fingers" id="tno" value="no" checked> No
          </label>
        </div><br><br>
        <div class="col-md-6">
          10.Oedema of feet
        </div>
        <div class="col-md-3">
          <label>
            <input type="radio" name="feet" id="oyes" value="yes" checked> Yes
          </label>
        </div>
        <div class="col-md-3">
          <label>
            <input type="radio" name="feet" id="ono" value="no" checked> No
          </label>
        </div><br><br>
        <div class="col-md-6">
          12.Dehydration
        </div>
        <div class="col-md-3">
          <label>
            <input type="radio" name="Dehydration" id="dyes" value="yes" checked> Yes
          </label>
        </div>
        <div class="col-md-3">
          <label>
            <input type="radio" name="Dehydration" id="dno" value="no" checked> No
          </label>
        </div><br><br>
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
          <label>
            <input type="radio" name="yDehydration" id="mild" value="mild" checked> Mild
          </label>
        </div>
        <div class="col-md-3">
          <label>
            <input type="radio" name="yDehydration" id="moderate" value="moderate" checked> Moderate
          </label>
        </div>
        <div class="col-md-3">
          <label>
            <input type="radio" name="yDehydration" id="severe" value="severe" checked> Severe
          </label>
        </div>
      </div>
    </div><br><br>
    <label>B. Vitals</label>
    <div class="row">
      <div class="col-md-1">
        1.
      </div>
      <div class="col-md-2">
        Temperature
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" name="temperature" placeholder="Enter Temperature">
      </div>
      <div class="col-md-6">
        C/F
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-1">
        2.
      </div>
      <div class="col-md-2">
        Pulse Rate
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" name="pulse" placeholder="Enter Pulse Rate">
      </div>
      <div class="col-md-6">
        /min
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-1">
        3.
      </div>
      <div class="col-md-2">
        Respiration (Count for a full min.) rate
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" name="respiration" placeholder="Enter Respiration Rate">
      </div>
      <div class="col-md-6">
        /min
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-1">
        4.
      </div>
      <div class="col-md-2">
        BP Lt Arm
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" name="ltarm" placeholder="Enter Respiration Rate">
      </div>
      <div class="col-md-1">
        mm/Hg
      </div>
      <div class="col-md-2">
        Rt.Arm
      </div>
      <div class="col-md-2">
        <input type="text" class="form-control" name="rtarm" placeholder="Enter RT Arm">
      </div>
      <div class="col-md-1">
        mm/Hg
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-1">
        5.
      </div>
      <div class="col-md-2">
        SPO <sub>2</sub> at Room air
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" name="spo" placeholder="Enter SPO2">
      </div>
      <div class="col-md-1">
        %
      </div>
      <div class="col-md-1">
        at
      </div>
      <div class="col-md-2">
        <input type="text" class="form-control" name="at" placeholder="Enter rate">
      </div>
      <div class="col-md-2">
        litres of O2
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-1">
        6
      </div>
      <div class="col-md-2">
        GRBS
      </div>
      <div class="col-md-3">
        <input type="text" class="form-control" name="grbs" placeholder="Enter GRBS">
      </div>
      <div class="col-md-6">
        mg%
      </div>
    </div>
  </div>
