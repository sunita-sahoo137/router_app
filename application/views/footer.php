  <footer class="main-footer">
    <strong>All rights reserved.</footer>

</div>
<!-- ./wrapper -->


<!-- Bootstrap 4 -->
<script src="<?php echo base_url('public/js/bootstrap.bundle.min.js');?>"></script>
<script src="<?php echo base_url('public/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('public/js/dataTables.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('public/js/dataTables.responsive.min.js');?>"></script>
<script src="<?php echo base_url('public/js/responsive.bootstrap4.min.js');?>"></script>
<script src="<?php echo base_url('public/js/adminlte.min.js');?>"></script>

<script>
  $(function () {
    $("#routerList").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
