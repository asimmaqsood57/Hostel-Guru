<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginmodal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="loginmodal" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginmodalLabel">Log in</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form  action="_handlesignin.php" method="POST">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="email" aria-describedby="emailHelp">

  </div>

  <div class="mb-3">
    <label for="selectAccountType"  class="form-label">Select Account Type</label>
  <select class="form-select" name="type" aria-label="Default select example">
  <option selected>Select Account Type</option>
  <option value="Student">Student</option>
  <option value="Hostel Owner">Hostel Owner</option>
 
</select>
  </div>


  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  
  <button type="submit" class="btn btn-primary">Log in</button>
</form>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Log in</button> -->
      </div>
    </div>
  </div>
</div>
