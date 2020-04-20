
 </div>
        </div>
      </main>
    </div>
    <footer class="app-footer">
      <div>
        <a href="https://coreui.io">CoreUI</a>
        <span>&copy; 2018 creativeLabs.</span>
      </div>
      <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
      </div>
    </footer>
    <!-- CoreUI and necessary plugins-->
    <script src="<?php echo base_url(); ?>admin_assets/vendors/jquery/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/vendors/popper.js/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/vendors/pace-progress/js/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/vendors/@coreui/coreui/js/coreui.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="<?php echo base_url(); ?>admin_assets/vendors/chart.js/js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/js/main.js"></script>

<script src="<?php echo base_url('admin_assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('admin_assets/datatables-responsive/dataTables.responsive.js') ?>"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
  </body>
</html>
