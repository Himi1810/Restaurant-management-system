<x-app-layout>
    

</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include("admin.admincss")


  </head>
  <body>
    
  <div class="container-scroller">
 
     @include("admin.navbar")


</br>

<div style="position:relative; top: 60px; right: -150px;">
<form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

    @csrf 

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input style="color:black" type="text" name="title" placeholder="write a title" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Price</label>
    <input style="color:black" type="number" name="price" placeholder="price" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input type="file" name="image"  required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input style="color:black" type="text" name="description" placeholder="write a description" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</br>
<div>
  
  <table bgcolor="powderblue">
    <tr align= "center">
      <th style="padding-right: 30 px; border-spacing: 30px;">Food Name</th>
      <th style="padding-right: 30 px; border-spacing: 30px;">Price</th>
      <th style="padding-right: 30 px; border-spacing: 30px;">Description</th>
      <th style="padding-right: 30 px; border-spacing: 30px;">Image</th>
      <th style="padding-right: 30 px; border-spacing: 30px;">Action</th>


    </tr>

    @foreach($data as $data)

    <tr align= "center">
     <td>{{$data->title}}</td>
     <td>{{$data->price}}</td>
     <td>{{$data->description}}</td>
     <td><img height="100px" width="100px" src="/foodimage/{{$data->image}}"></td>
     <td>
      <a href="{{url('/deletemenu',$data->id)}}">Delete</a>
      <a href="{{url('/updateview',$data->id)}}">Update</a>

    </td>

    </tr>

@endforeach

  </table>

</div>
</div>
</div>

    
     @include("admin.adminscript")

  </body>
</html>