<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS for Bigger Checkboxes & Radios -->

</head>
<body>


<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pondmodal">
  Launch demo modal
</button>




<!-- Modal -->
<div class="modal fade" id="pondmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Farm Pond Application Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="pondForm">
          
          <!-- Section 1: Farmer Details (Initially Visible) -->
          <div id="farmerDetails">
            <h5>Farmer Details</h5>
            <div class="row">
              <div class="col-md-6">
                <label class="form-label">Name of Farmer</label>
                <input type="text" class="form-control" name="farmer_name" required>
              </div>
              <div class="col-md-6">
                <label class="form-label">Mobile Number</label>
                <input type="text" class="form-control" name="mobile_number" required>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <label class="form-label">Gender</label>
                <select class="form-control" name="gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Transgender">Transgender</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Father / Spouse</label>
                <input type="text" class="form-control" name="father_spouse">
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <label class="form-label">Household Members</label>
                <input type="number" class="form-control" name="household_members">
              </div>
              <div class="col-md-6">
                <label class="form-label d-block">Identity Card</label>
                <div class="d-flex">
                  <input type="radio" name="identity_card" value="Aadhar" class="identity-select"> <label class="mx-2">Aadhar</label>
                  <input type="radio" name="identity_card" value="EPIC" class="identity-select"> <label class="mx-2">EPIC</label>
                  <input type="radio" name="identity_card" value="Driving License" class="identity-select"> <label class="mx-2">Driving License</label>
                </div>
              </div>
            </div>

            <!-- File Upload (Hidden Initially) -->
            <div class="row mt-3" id="identityFileUpload">
              <div class="col-md-12">
                <label class="form-label" id="identityFileLabel"></label>
                <input type="file" class="form-control" name="identity_document">
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <label class="form-label">ID Card Number</label>
                <input type="text" class="form-control" name="id_card_number">
              </div>
              <div class="col-md-6">
                <label class="form-label">Hamlet</label>
                <input type="text" class="form-control" name="hamlet">
              </div>
            </div>

            <div class="text-center mt-4">
              <button type="button" id="nextSection1" class="btn btn-primary">Next</button>
            </div>
          </div>

          <!-- Section 2: Land Ownership + Farm Pond Details (Initially Hidden) -->
          <div id="landOwnershipSection" style="display: none;">
            <h5>Land Ownership & Farm Pond Details</h5>

            <div class="row">
              <div class="col-md-6">
                <label class="form-label">Land Ownership</label>
                <select class="form-control" name="land_ownership">
                  <option value="Owner Cultivator">Owner Cultivator</option>
                  <option value="Lease Holder">Lease Holder</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label">Patta Number</label>
                <input type="text" class="form-control" name="patta_number">
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <label class="form-label">Total Area (ha)</label>
                <input type="text" class="form-control" name="total_area">
              </div>
              <div class="col-md-6">
                <label class="form-label">Revenue Village</label>
                <input type="text" class="form-control" name="revenue_village">
              </div>
            </div>

            <h5 class="mt-4">Farm Pond Details</h5>

            <div class="row">
              <div class="col-md-6">
                <label class="form-label">S.F. No. of the Location</label>
                <input type="text" class="form-control" name="sf_number">
              </div>
              <div class="col-md-6">
                <label class="form-label d-block">Soil Type</label>
                <div class="d-flex">
                  <input type="radio" name="soil_type" value="Red Soil"> <label class="mx-2">Red Soil</label>
                  <input type="radio" name="soil_type" value="Black Cotton"> <label class="mx-2">Black Cotton</label>
                  <input type="radio" name="soil_type" value="Sandy Loam"> <label class="mx-2">Sandy Loam</label>
                  <input type="radio" name="soil_type" value="Laterite"> <label class="mx-2">Laterite</label>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <label class="form-label">Land to serve (ha)</label>
                <input type="text" class="form-control" name="land_serve">
              </div>
              <div class="col-md-6">
                <label class="form-label">Field Inspection Done By</label>
                <div class="d-flex">
                  <input type="checkbox" name="inspection_by" value="Volunteer"> <label class="mx-2">Volunteer</label>
                  <input type="checkbox" name="inspection_by" value="Project Executive"> <label class="mx-2">Project Executive</label>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <label class="form-label">Site Approved By</label>
                <div class="d-flex">
                  <input type="checkbox" name="approved_by" value="Project Executive"> <label class="mx-2">Project Executive</label>
                  <input type="checkbox" name="approved_by" value="Team Leader"> <label class="mx-2">Team Leader</label>
                </div>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <label class="form-label">Date of Inspection</label>
                <input type="date" class="form-control" name="doi">
              </div>
              <div class="col-md-6">
                <label class="form-label">Date of Approval</label>
                <input type="date" class="form-control" name="doa">
              </div>
            </div>

            <div class="text-center mt-4">
              <button type="button" class="btn btn-secondary" id="prevSection1">Previous</button>
              <button type="button" class="btn btn-primary" id="nextSection2">Next</button>
            </div>
          </div>

          <!-- Section 3: Excavation & Financial Contributions (Initially Hidden) -->
          <div id="excavationSection" style="display: none;">
            <h5>Excavation & Financial Contributions</h5>

            <div class="row">
              <div class="col-md-6">
                <label class="form-label">Length (m)</label>
                <input type="number" class="form-control" id="length" name="length">
              </div>
              <div class="col-md-6">
                <label class="form-label">Breadth (m)</label>
                <input type="number" class="form-control" id="breadth" name="breadth">
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <label class="form-label">Depth (m)</label>
                <input type="number" class="form-control" id="depth" name="depth">
              </div>
              <div class="col-md-6">
                <label class="form-label">Volume of Excavation (m³)</label>
                <input type="text" class="form-control" id="volume" name="volume" readonly>
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <label class="form-label">PRADAN Contribution</label>
                <input type="text" class="form-control" name="pradan_contribution">
              </div>
              <div class="col-md-6">
                <label class="form-label">Farmer Contribution</label>
                <input type="text" class="form-control" name="farmer_contribution">
              </div>
            </div>

            <div class="row mt-3">
              <div class="col-md-6">
                <label class="form-label">Total Estimate Amount</label>
                <input type="text" class="form-control" name="total_estimate">
              </div>
            </div>

            <div class="text-center mt-4">
            <button type="button" class="btn btn-secondary" id="prevSection2">Previous</button>

              <button type="button" class="btn btn-primary" id="nextSection3">Next</button>
            </div>
          </div>

          <!-- Section 4: Bank Details (Initially Hidden) -->
            <div id="bankDetailsSection" style="display: none;">
                <h5>Bank Details</h5>

                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Bank Name</label>
                        <input type="text" class="form-control" name="bank_name" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Branch</label>
                        <input type="text" class="form-control" name="branch" required>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label">Account Holder Name</label>
                        <input type="text" class="form-control" name="account_holder" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Account Number</label>
                        <input type="text" class="form-control" name="account_number" required>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-6">
                        <label class="form-label">IFSC Code</label>
                        <input type="text" class="form-control" name="ifsc_code" required>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="button" class="btn btn-secondary" id="prevSection3">Previous</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>


        </form>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript for Next/Previous Sections and Volume Calculation -->
<script>
    document.getElementById("nextSection1").addEventListener("click", function() {
        document.getElementById("farmerDetails").style.display = "none";
        document.getElementById("landOwnershipSection").style.display = "block";
    });

    document.getElementById("prevSection1").addEventListener("click", function() {
        document.getElementById("landOwnershipSection").style.display = "none";
        document.getElementById("farmerDetails").style.display = "block";
    });

    document.getElementById("nextSection2").addEventListener("click", function() {
        document.getElementById("landOwnershipSection").style.display = "none";
        document.getElementById("excavationSection").style.display = "block";
    });

    document.getElementById("prevSection2").addEventListener("click", function() {
        document.getElementById("excavationSection").style.display = "none";
        document.getElementById("landOwnershipSection").style.display = "block";
    });

    document.getElementById("nextSection3").addEventListener("click", function() {
        document.getElementById("excavationSection").style.display = "none";
        document.getElementById("bankDetailsSection").style.display = "block";
    });

    document.getElementById("prevSection3").addEventListener("click", function() {
        document.getElementById("bankDetailsSection").style.display = "none";
        document.getElementById("excavationSection").style.display = "block";
    });

    // Auto-calculate Volume of Excavation
    document.querySelectorAll("#length, #breadth, #depth").forEach(input => {
        input.addEventListener("input", function() {
            let length = parseFloat(document.getElementById("length").value) || 0;
            let breadth = parseFloat(document.getElementById("breadth").value) || 0;
            let depth = parseFloat(document.getElementById("depth").value) || 0;
            document.getElementById("volume").value = (length * breadth * depth).toFixed(2);
        });
    });
</script>










</html>