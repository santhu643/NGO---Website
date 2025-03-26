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
    </style>
</head>

<body>
    <div class="container mt-5">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#landFormModal">
            Open Form
        </button>
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



    function updateIdentityTitle() {
        const selectedIdentity = document.querySelector('input[name="identityCard"]:checked');
        const fileUploadLabel = document.getElementById("fileUploadLabel");
        if (selectedIdentity) {
            fileUploadLabel.textContent = `Upload ${selectedIdentity.value} Proof`;
        }
    }

    function nextStep(current, next) {
        document.getElementById("step" + current).style.display = "none";
        document.getElementById("step" + next).style.display = "block";
    }

    function prevStep(current, previous) {
        document.getElementById("step" + current).style.display = "none";
        document.getElementById("step" + previous).style.display = "block";
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>