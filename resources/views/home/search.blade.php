<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Employers</title>

</head>
<body>
    <h1>Seawrch for Employers</h1>
    <a href="/home">Back</a> |
	<a href="/logout">logout</a> <br> <br>
    Search key:
    <input type="search" id="searchBox"> <br>
    <table id="myTable" class="table table-bordered text-center">
        <tr>
          <th>Employer Name</th>
          <th>Employer username</th>
          <th>Company Name</th>
          <th>Contact No</th>
        </tr>
        @if (count($employers)>0)
        @for($i=0; $i < count($employers); $i++) 
        <tr>
          <td>{{$employers[$i]['name']}}</td>
          <td>{{$employers[$i]['quantity']}}</td>
          <td>{{$employers[$i]['price']}}</td>
          </tr>
          @endfor
          @endif
      </table>
</body>
    <script src="{{asset('js/search.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</html>