<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Land Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .step {
            display: none;
        }

        .step.active {
            display: block;
        }

        .step3-container {
            display: flex;
            flex-direction: column;
            gap: 15px;
            /* Added spacing */
        }

        .modal-content {
    padding: 20px; /* Adds padding inside the modal */
}

.modal-body {
    padding: 15px; /* Adds padding inside the body of the modal */
}

.form-label {
    font-weight: bold; /* Makes labels more readable */
}

.form-control, .form-check-input {
    margin-top: 5px; /* Adds some space above inputs */
}

.d-flex.gap-3 {
    gap: 15px; /* Ensures proper spacing between radio buttons */
}

    </style>
</head>

<body>
    <div class="container mt-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#landFormModal">
            Open Form
        </button>
    </div>

    <div class="modal fade" id="landFormModal" tabindex="-1" aria-labelledby="landFormModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="landFormModalLabel">Land (re)Development Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="landForm">
                        <div id="step1">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="farmerName" class="form-label">Name of Farmer</label>
                                    <input type="text" class="form-control" id="farmerName" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="mobileNumber" class="form-label">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobileNumber" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Gender</label>
                                    <div>
                                        <input type="radio" id="male" name="gender" value="Male" class="form-check-input" required>
                                        <label for="male" class="form-check-label">Male</label>
                                        <input type="radio" id="female" name="gender" value="Female" class="form-check-input ms-3" required>
                                        <label for="female" class="form-check-label">Female</label>
                                        <input type="radio" id="transgender" name="gender" value="Transgender" class="form-check-input ms-3" required>
                                        <label for="transgender" class="form-check-label">Transgender</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="fatherSpouse" class="form-label">Father / Spouse</label>
                                    <input type="text" class="form-control" id="fatherSpouse" required>
                                </div>
                            </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="householdMembers" class="form-label">Household Members</label>
                                <input type="number" class="form-control" id="householdMembers" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Identity Card</label>
                                <div>
                                    <input type="radio" id="aadhar" name="identityCard" value="Aadhar" class="form-check-input identity-option" required>
                                    <label for="aadhar" class="form-check-label">Aadhar</label>
                                    <input type="radio" id="epic" name="identityCard" value="EPIC" class="form-check-input ms-3 identity-option" required>
                                    <label for="epic" class="form-check-label">EPIC</label>
                                    <input type="radio" id="drivingLicense" name="identityCard" value="Driving License" class="form-check-input ms-3 identity-option" required>
                                    <label for="drivingLicense" class="form-check-label">Driving License</label>
                                </div>
                            </div>
                        </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="idCardNumber" class="form-label">ID Card Number</label>
                                    <input type="text" class="form-control" id="idCardNumber" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="fileUpload" class="form-label" id="fileUploadLabel">Upload ID Proof</label>
                                    <input type="file" class="form-control" id="fileUpload" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="hamlet" class="form-label">Hamlet</label>
                                    <input type="text" class="form-control" id="hamlet" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="panchayat" class="form-label">Panchayat</label>
                                    <input type="text" class="form-control" id="panchayat" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="block" class="form-label">Block</label>
                                    <input type="text" class="form-control" id="block" required>
                                </div>
                            </div>


                        <button type="button" class="btn btn-primary" onclick="nextStep(1, 2)">Next</button>
                        </div>

                        <div id="step2" style="display: none;">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Land Ownership</label>
                                    <div>
                                        <input type="radio" name="type" id="ownerCultivator" class="form-check-input">
                                        <label for="ownerCultivator" class="form-check-label">Owner Cultivator</label>
                                        <input type="radio" name="type" id="leaseHolder" class="form-check-input ms-3">
                                        <label for="leaseHolder" class="form-check-label">Lease Holder</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Patta Number</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Total Area (ha)</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Revenue Village</label>
                                    <input type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                            <button type="button" class="btn btn-secondary" onclick="prevStep(2, 1)">Back</button>
                            <button type="button" class="btn btn-primary" onclick="nextStep(2, 3)">Next</button>
</div>

                            <div id="step3" style="display: none;">
                            <h5>Land Development Details</h5>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="sf_no" class="form-label">S.F. No. of the land to be developed:</label>
                                    <input type="text" class="form-control" id="sf_no" name="sf_no">
                                </div>
                                <div class="col-md-6">
                                    <label for="land_benefit" class="form-label">Land to benefit (ha):</label>
                                    <input type="text" class="form-control" id="land_benefit" name="land_benefit">
                                </div>
                            </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Soil Type:</label>
            <div class="d-flex gap-3">
                <input type="radio" name="soil_type" value="Red Soil"> Red Soil
                <input type="radio" name="soil_type" value="Black Cotton"> Black Cotton
                <input type="radio" name="soil_type" value="Sandy Loam"> Sandy Loam
                <input type="radio" name="soil_type" value="Laterite"> Laterite
            </div>
        </div>
        <div class="col-md-6">
            <label class="form-label">Field Inspection done by:</label>
            <div class="d-flex gap-3">
                <input type="radio" name="inspection" value="Volunteer"> Volunteer
                <input type="radio" name="inspection" value="Project Executive"> Project Executive
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Site Approved by:</label>
            <div class="d-flex gap-3">
                <input type="radio" name="approved_by" value="Project Executive"> Project Executive
                <input type="radio" name="approved_by" value="Team Leader"> Team Leader
            </div>
        </div>
        <div class="col-md-6">
            <label for="inspection_date" class="form-label">Date of Inspection:</label>
            <input type="date" class="form-control" id="inspection_date" name="inspection_date">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="approval_date" class="form-label">Date of Approval:</label>
            <input type="date" class="form-control" id="approval_date" name="approval_date">
        </div>
        <div class="col-md-6">
            <label for="estimateAmount" class="form-label">Total Estimate Amount</label>
            <input type="text" class="form-control" id="estimateAmount" name="estimateAmount">
        </div>
    </div>

    <!-- Newly added fields -->
    <div class="row mb-3">
        <div class="col-md-6">
            <label class="form-label">Type of work proposed</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="prosopisRemoval" name="workType[]" value="Prosopis removal">
                <label class="form-check-label" for="prosopisRemoval">Prosopis removal</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="redevelopment" name="workType[]" value="Redevelopment of eroded lands">
                <label class="form-check-label" for="redevelopment">Redevelopment of eroded lands</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="siltApplication" name="workType[]" value="Silt application">
                <label class="form-check-label" for="siltApplication">Silt application</label>
            </div>
        </div>
        <div class="col-md-6">
            <label for="areaBenefited" class="form-label">Area benefited by proposal works (ha)</label>
            <input type="text" class="form-control" id="areaBenefited" name="areaBenefited">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="otherWorks" class="form-label">Any other works proposed</label>
            <textarea class="form-control" id="otherWorks" name="otherWorks" rows="2"></textarea>
        </div>
        <div class="col-md-6">
            <label for="pradanContribution" class="form-label">PRADAN Contribution</label>
            <input type="text" class="form-control" id="pradanContribution" name="pradanContribution">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="farmerContribution" class="form-label">Farmer Contribution</label>
            <input type="text" class="form-control" id="farmerContribution" name="farmerContribution">
        </div>
    </div>

    <div class="d-flex justify-content-end gap-2">
        <button type="button" class="btn btn-secondary" onclick="prevStep(3, 2)">Back</button>
        <button type="button" class="btn btn-primary" onclick="nextStep(3, 4)">Next</button>
    </div>
</div>
    



<div id="step4" style="display: none;">
    <h5>Bank Details</h5>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="account_holder" class="form-label">Name of Account Holder:</label>
            <input type="text" class="form-control" id="account_holder" name="account_holder">
        </div>
        <div class="col-md-6">
            <label for="account_number" class="form-label">Account Number:</label>
            <input type="text" class="form-control" id="account_number" name="account_number">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="bank_name" class="form-label">Name of the Bank:</label>
            <input type="text" class="form-control" id="bank_name" name="bank_name">
        </div>
        <div class="col-md-6">
            <label for="branch" class="form-label">Branch:</label>
            <input type="text" class="form-control" id="branch" name="branch">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="ifsc" class="form-label">IFSC Code:</label>
            <input type="text" class="form-control" id="ifsc" name="ifsc">
        </div>
        <div class="col-md-6">
            <br>
            <label class="form-label">Farmer has agreed for the work, and his contribution:</label>
            <div class="d-flex gap-3">
                <input type="radio" name="farmer_agreement" value="Yes"> Yes
                <input type="radio" name="farmer_agreement" value="No"> No
            </div>
        </div>
    </div>

    

    <div class="mb-3">
        <label class="form-label">Files Submitted:</label>
        <div class="d-flex flex-wrap gap-3">
            <div><input type="checkbox" name="files[]" value="Patta"> Patta</div>
            <div><input type="checkbox" name="files[]" value="ID Card"> ID Card</div>
            <div><input type="checkbox" name="files[]" value="FMB"> FMB</div>
            <div><input type="checkbox" name="files[]" value="Photo of Farmer"> Photo of Farmer</div>
            <div><input type="checkbox" name="files[]" value="Bank Passbook"> Bank Passbook</div>
        </div>
    </div>
    <div class="d-flex justify-content-end gap-2">
        <button type="button" class="btn btn-secondary" onclick="prevStep(4, 3)">Back</button>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function nextStep(current, next) {
            document.getElementById('step' + current).style.display = 'none';
            document.getElementById('step' + next).style.display = 'block';
        }

        function prevStep(current, prev) {
            document.getElementById('step' + current).style.display = 'none';
            document.getElementById('step' + prev).style.display = 'block';
        }

        function updateTitle() {
        const selectedIdentity = document.querySelector('input[name="identity"]:checked').value;
        document.getElementById('step1Title').innerText = `You Selected: ${selectedIdentity}`;
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>