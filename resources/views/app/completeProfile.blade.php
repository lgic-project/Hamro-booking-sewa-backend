<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<form method="POST" action="/completeprofile/create" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="Hotel Name" class="form-label">Hotel Full Name</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Enter your hotel full name">
    </div>
    <div class="mb-3">
        <label for="Description" class="form-label">Hotel Description</label>
        <input type="text" name="description" class="form-control" id="description" placeholder="Enter your description">
    </div>
    <div class="mb-3">
        <label for="Description" class="form-label">Hotel Photo</label>
        <input type="file" name="photos" class="form-control" id="photos" placeholder="Upload your photo">
    </div>
    <div class="mb-3">
        <label for="Location" class="form-label">Hotel Location</label>
        <input type="text" name="location" class="form-control" id="location" placeholder="Upload your location">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>