<?php include "ip_header.php"; ?>
      <br>
      <div id="row">
       <label>8. Paediatric Assesment</label>
     </div><br>
     <div id="row">
       8.1 Birth History <br><br>
       <div class="row">
         <div class="col-md-1">
           A)
         </div>
         <div class="col-md-3">
           <label>
             <input type="radio" name="Birth" id="ftnd" value="ftnd" checked> FTND
           </label>
         </div>
         <div class="col-md-5">
           <label>
             <input type="radio" name="Birth" id="caesar" value="caesar" checked> Caesarean Delivery By Vaccum Sunction
           </label>
         </div>
         <div class="col-md-3">
           <label>
             <input type="radio" name="Birth" id="forceps" value="forcepts" checked> Forceps Delivery
           </label>
         </div>
       </div><br>
       <div class="row">
         <div class="col-md-1">
           B)
         </div>
         <div class="col-md-5">
           History of Birth Asphyria
         </div>
         <div class="col-md-3">
           <label>
             <input type="radio" name="Asphyria" id="hyes" value="yes" checked> Yes
           </label>
         </div>
         <div class="col-md-3">
           <label>
             <input type="radio" name="Asphyria" id="hno" value="no" checked> No
           </label>
         </div>
       </div>
     </div><br>
     <div id="row">
       8.2 Development History (As per IAP Guidlines) <br><br>
       <div class="row">
         <div class="col-md-6">
           <div class="col-md-6">
             <label>
               <input type="radio" name="Development" id="normal" value="normal" checked> Normal
             </label>
           </div>
           <div class="col-md-6">
             <label>
               <input type="radio" name="Development" id="abnormal" value="abnormal" checked> Abnormal
             </label>
           </div>
         </div>
       </div>
       <div class="row col-md-12">
         <textarea class="form-control" rows="3" name="dev" placeholder="Enter Details"></textarea>
       </div>
     </div><br>
     <div id="row">
       8.3Immunization Status (As Per Guideliness)<br><br>
       <div class="col-md-6">
         <div class="col-md-6">
           <label>
             <input type="radio" name="Immunization" id="upto" value="uptp" checked> Up to Mark
           </label>
         </div>
         <div class="col-md-6">
           <label>
             <input type="radio" name="Immunization" id="notupto" value="notupto" checked> Not upto Mark
           </label>
         </div>
       </div>
     </div>
    </div>
    </div>
