@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
var username="anakanjing@gmail.com";
var password="anjing12345";
$.ajax({
  type: "GET",
  url: "http://127.0.0.1:8000/api/country",
  dataType: 'json',
  headers: {
    "Authorization": "Basic " + btoa(username + ":" + password)
  },
  success: function (result){
      $.each(result, function(key, val){
          console.log(val['name']);
      });
  }
});

/*
$.ajax({
  url: "http://localhost:8080/login",
  type: "POST",
  headers: { Authorization: $`Bearer ${localStorage.getItem("token")}` },
  data: formData,
  error: function(err) {
    switch (err.status) {
      case "400":
        // bad request
        break;
      case "401":
        // unauthorized
        break;
      case "403":
        // forbidden
        break;
      default:
        //Something bad happened
        break;
    }
  },
  success: function(data) {
    console.log("Success!");
  }
});
*/
</script>
@endsection
