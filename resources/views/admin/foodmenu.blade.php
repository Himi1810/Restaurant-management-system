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
</div>
</div>

    
     @include("admin.adminscript")

  </body>
</html>