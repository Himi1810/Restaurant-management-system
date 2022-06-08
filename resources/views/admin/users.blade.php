<!DOCTYPE html>
<html lang="en">
    <head>

    @include("admin.admincss")

</head>
<body>

<div class="container-scroller">
@include("admin.navbar")

<h1>USER TABLE</h1>

<div style="position: relative; top: 80px; right: -30px ">

<table bgcolor= #f18973; border="5px" >
  <tr>
    <th style="padding: 40px">Name</th>
    <th style="padding: 40px">Email</th>


    <th style="padding: 40px">Action</th>

  </tr>

  @foreach($data as $data)
  <tr align="center">
    <td>{{$data->name}}</td>
    <td>{{$data->email}}</td>


    @if($data->usertype=="0")
    <td><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
    @else
    <td><a>Not Allowed</a></td>

    @endif


  </tr>

  @endforeach
  
</table>


</div>
 </div>
@include("admin.adminscript")

</body>
</html>

</body>
</html>