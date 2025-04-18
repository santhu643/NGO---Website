<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs/build/css/alertify.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="card p-4 shadow-lg" style="width: 350px;">
        <h3 class="text-center">Login</h3>
        
      

        <form id="log">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="pass" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>



    <script>
         $.ajaxSetup({
      headers:{
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $(document).on("submit","#log",function(e){
        e.preventDefault();
        var form = new FormData(this);
        $.ajax({
            type:"POST",
            url:"/log",
            data:form,
            processData:false,
            contentType:false,
            success:function(response){
                if(response.status==200){
                    if(response.role == "vol"){
                        alert("Volunteer login");
                        window.location.href = "{{ route('vol') }}";

                    }
                    if(response.role == "coor"){
                        alert("coordinator login");
                        window.location.href = "{{route('coor')}}";
                    }
                    if(response.role == "tl"){
                        alert("tl login");
                        window.location.href = "{{route('tl')}}";
                    }
                    if(response.role=="fm"){
                        alert("finance manager login");
                        window.location.href = "{{route('fm')}}";

                    }


                }
            }
        })
    })

    </script>
</body>
</html>
