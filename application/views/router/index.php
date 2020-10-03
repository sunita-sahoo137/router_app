<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Router List</h1>
          </div>

          <div class="col-sm-6">
<button type="button" id="add_router" class="btn btn-success" style="float: right;">
Add New Router</button>
</div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="routerList" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sapid</th>
                    <th>Hostname</th>
                    <th>Loopback</th>
                    <th>Mac Address</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<div id="addRouterModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title">Add New Router</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
         <div class="form-group">
          <label for="sapid">Sapid *</label>
          <input type="text" class="form-control" required id="sapid">
        </div>
        <div class="form-group">
          <label for="hostname">Hostname *</label>
          <input type="text" class="form-control" required id="hostname">
        </div>
        <div class="form-group">
          <label for="loopback">Loopback *</label>
          <input type="text" class="form-control" required id="loopback">
        </div>
        <div class="form-group">
          <label for="macaddress">Mac Address *</label>
          <input type="text" class="form-control" required id="macaddress">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default addRouterBtn">Save</button>
      </div>
    </div>

  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3>Delete Router</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure to delete this router ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary deleteBtn" data-id="">Delete</button>
      </div>
    </div>
  </div>
</div>