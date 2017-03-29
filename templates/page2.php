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
      @media print
{
    @page
    {
        margin-left: 25mm;
        margin-right: 25mm;
    }

    body
    {
        width: 160mm;
    }
}
    </style>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
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
          <div id="row">
            <center><h3>Inital Assessment</h3></center>
          </div>
          <div id="row">
            <label>1. Compliants And Durations</label><br><br>

          </div>
          <div id="row">
            <label>2. History of Present Illness</label><br><br>
          </div>

          <div id="row">
            <label>3. History Of Past Illness / Treatment History</label><br><br>
                <div class="col-md-2">
                  3.1 Diabeties
                </div>
          </div><br><br>

          <div id="row">
              <div class="col-md-3">
                3.2 Hypertension
              </div>
              <div class="col-md-9">

              </div>
          </div><br><br>

          <div id="row">
              <div class="col-md-3">
                3.3 CAD
              </div>
              <div class="col-md-9">

              </div>
        </div><br><br>

          <div id="row">
              <div class="col-md-3">
                3.4 Asthama
              </div>
              <div class="col-md-9">
              </div>
          </div><br><br>

          <div id="row">
              <div class="col-md-2">
                3.5 Tuberculosis
              </div>
              <div class="col-md-9">

              </div>
          </div><br><br>
          <div id="row">
              <div class="col-md-3">
                3.6 Antibiotics
              </div>
              <div class="col-md-9">

              </div>
          </div><br><br>
          <div id="row">
              <div class="col-md-3">
                3.7 Hormones
              </div>
              <div class="col-md-9">

              </div>
          </div><br><br>
          <div id="row">
              <div class="col-md-3">
                3.8 Chemo/Radiation
              </div>
              <div class="col-md-9">

              </div>
          </div><br><br>
          <div id="row">
            <div class="col-md-3">
                3.9 Blood Transfusion
            </div>
            <div class="col-md-9">

            </div>
          </div><br><br>
          <div id="row">
              <div class="col-md-3">
                3.10 Surgeries
              </div>
              <div class="col-md-9">
              </div>
          </div><br><br>
          <div id="row">
              <div class="col-md-3">
                3.11 Others
              </div>
              <div class="col-md-9">

              </div>
          </div><br><br>
    </div>
  </body>
</html>
