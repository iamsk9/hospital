<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>VENKATARAMA HOSPITAL</title>
    <style media="screen">
      .main{
        border-style: solid;
        border-width: 2px;
        margin: 10px 10px 10px 10px;
      }
      img{
        padding-left: 20px;
      }
      .left{
        float: right;
        padding-right: 10px;
      }
    </style>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="main">
        <div class="row">
            <div class="col-md-6">
              <label>Patient's Name</label>
              <label id="pname"></label>
            </div>
            <div class="col-md-2">
              <label>Sex</label>
              <label id="sex"></label>
            </div>
            <div class="col-md-2">
              <label>Age</label>
              <label id="age"></label>
            </div>
            <div class="col-md-2">
              <label>IP No</label>
              <label id="ipno"></label>
            </div>
          </div>
          <hr style="height:2px;border:none;color:#333;background-color:black;" />
          <label>B. Vitals</label>
          <div class="row">
            <div class="col-md-1">
              1.
            </div>
            <div class="col-md-2">
              Temperature
            </div>
            <div class="col-md-3">

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

            </div>
            <div class="col-md-6">
              /min
            </div>
          </div><br>
          <div class="row">
            <div class="col-md-1">
              3.
            </div>
            <div class="col-md-3">
              Respiration (Count for a full min.) rate
            </div>
            <div class="col-md-2">

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

            </div>
            <div class="col-md-1">
              mm/Hg
            </div>
            <div class="col-md-2">
              Rt.Arm
            </div>
            <div class="col-md-2">

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

            </div>
            <div class="col-md-1">
              %
            </div>
            <div class="col-md-1">
              at
            </div>
            <div class="col-md-2">

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

            </div>
            <div class="col-md-6">
              mg%
            </div>
          </div><br>
        <div id="row">
         <label>10. SYSTEMIC EXAMINATION</label>
       </div><br>
       <div id="row">
         <label>A. CARDIO VASCULAR SYSTEM</label>
       </div>
       <div id="row">
         <div class="col-md-1">
           1. WP
         </div>
         <div class="col-md-2">
           2. Cardiac Sounds
         </div>
         <div class="col-md-3">
           3. Thrills
           <label>

           </label>
         </div>
         <div class="col-md-4">
           4. Cardiac Murmurs
           <label>

           </label>
         </div>
         <div class="col-md-2">
           5. (Additional Sounds)
         </div>
       </div><br><br>
       <div id="row">
         <label>B. RESPIRATORY SYSTEMS</label>
       </div>
       <div id="row">
         <div class="col-md-1">
           1.
         </div>
         <div class="col-md-2">
           Dyspnoea
         </div>
         <div class="col-md-3">

         </div>
         <div class="col-md-1">
           2.
         </div>
         <div class="col-md-2">
           Wheeze
         </div>
         <div class="col-md-3">

         </div>
       </div><br>
       <div id="row">
        <div class="col-md-1">
          3.
        </div>
        <div class="col-md-2">
          Position of Trachea
        </div>
        <div class="col-md-9">

        </div>
      </div><br>
      <div id="row">
        <div class="col-md-1">
          4.
        </div>
        <div class="col-md-2">
          Breath Sounds
        </div>
        <div class="col-md-9">

        </div>
      </div><br>
      <div id="row">
        <div class="col-md-1">
          5.
        </div>
        <div class="col-md-2">
          Adventitious Sounds
        </div>
        <div class="col-md-9">

        </div>
      </div><br>
      <div id="row">
        <label>C.ABDOMEN</label>
      </div>
        <div id="row">
          <div class="col-md-1">
            1.
          </div>
          <div class="col-md-2">
            Shape of abdomen
          </div>
          <div class="col-md-9">

          </div>
        </div><br><br>
        <div id="row">
          <div class="col-md-1">
            2.
          </div>
          <div class="col-md-2">
            Tenderness
          </div>
          <div class="col-md-9">

          </div>
        </div><br><br>
        <div id="row">
          <div class="col-md-1">
            3.
          </div>
          <div class="col-md-2">
            Palpable Mass
          </div>
          <div class="col-md-9">

          </div>
        </div><br><br>
        <div id="row">
          <div class="col-md-1">
            4.
          </div>
          <div class="col-md-2">
            Hernial Orifices
          </div>
          <div class="col-md-9">

          </div>
        </div><br><br>
        <div id="row">
          <div class="col-md-1">
            5.
          </div>
          <div class="col-md-2">
            Free Fluid
          </div>
          <div class="col-md-9">

          </div>
        </div><br><br>
        <div id="row">
          <div class="col-md-1">
            6.
          </div>
          <div class="col-md-2">
            Bruits
          </div>
          <div class="col-md-9">

          </div>
        </div><br><br>
        <div id="row">
          <div class="col-md-1">
            7.
          </div>
          <div class="col-md-2">
            Liver
          </div>
          <div class="col-md-9">

          </div>
        </div><br><br>
        <div id="row">
          <div class="col-md-1">
            8.
          </div>
          <div class="col-md-2">
            Spleen
          </div>
          <div class="col-md-9">

          </div>
        </div><br><br>
    </div>
  </body>
</html>
