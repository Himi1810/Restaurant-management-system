<x-app-layout>
    

</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
   
  <base href="/public">
    
    @include("admin.admincss")


  </head>
  <body>
    
  <div class="container-scroller">
  
     @include("admin.navbar")

     <div style="position:relative; top: 60px; right: -150px;">
<form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

    @csrf 

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input style="color:black" type="text" name="title" value="{{$data->title}}" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Price</label>
    <input style="color:black" type="number" name="price" value="{{$data->price}}" required>
  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description</label>
    <input style="color:black" type="text" name="description" value="{{$data->description}}" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">New Image</label>
    <input type="file" name="image"  required>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"> Old Image</label>
    <img height="100px" width="100px" src="/foodimage/{{$data->image}}">
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>
</br>
<div>
     
</div>
    
     @include("admin.adminscript")

  </body>
</html>