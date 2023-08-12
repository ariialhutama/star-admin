 <!-- partial:partials/_footer.html -->
 <footer class="footer">
     <div class="d-sm-flex justify-content-center justify-content-sm-between">
         <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a
                 href="https://www.bootstrapdash.com/" target="_blank">Apotek Plus Panaikang</a>
             from Makassar.</span>
         <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All
             rights reserved.</span>
     </div>
 </footer>
 <!-- partial -->
 </div>
 <!-- main-panel ends -->
 </div>
 <!-- page-body-wrapper ends -->
 </div>
 <!-- container-scroller -->
 <!-- plugins:js -->
 <script src="{{ asset('adm2/template/vendors/js/vendor.bundle.base.js') }}"></script>
 <!-- endinject -->
 <!-- Plugin js for this page -->
 <script src="{{ asset('adm2/template/vendors/chart.js/Chart.min.js') }}"></script>
 <script src="{{ asset('adm2/template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
 <script src="{{ asset('adm2/template/vendors/progressbar.js/progressbar.min.js') }}"></script>

 <!-- End plugin js for this page -->
 <!-- inject:js -->
 <script src="{{ asset('adm2/template/js/off-canvas.js') }}"></script>
 <script src="{{ asset('adm2/template/js/hoverable-collapse.js') }}"></script>
 <script src="{{ asset('adm2/template/js/template.js') }}"></script>
 <script src="{{ asset('adm2/template/js/settings.js') }}"></script>
 <script src="{{ asset('adm2/template/js/todolist.js') }}"></script>
 <!-- endinject -->
 <!-- Custom js for this page-->
 <script src="{{ asset('adm2/template/js/jquery.cookie.js') }}" type="text/javascript"></script>
 <script src="{{ asset('adm2/template/js/dashboard.js') }}"></script>
 <script src="{{ asset('adm2/template/js/Chart.roundedBarCharts.js') }}"></script>
 <!-- End custom js for this page-->
 <!-- DataTables  & Plugins -->
 <script src="{{ asset('adm2/template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('adm2/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('adm2/template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
 <script src="{{ asset('adm2/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('adm2/template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
 <script src="{{ asset('adm2/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
 <script src="{{ asset('adm2/template/plugins/jszip/jszip.min.js') }}"></script>
 <script src="{{ asset('adm2/template/plugins/pdfmake/pdfmake.min.js') }}"></script>
 <script src="{{ asset('adm2/template/plugins/pdfmake/vfs_fonts.js') }}"></script>
 <script src="{{ asset('adm2/template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
 <script src="{{ asset('adm2/template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
 <script src="{{ asset('adm2/template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
 {{-- validator --}}
 <script src="{{ asset('build/assets/validator.min.js') }}"></script>
 {{-- end Validator --}}
 <script src="{{ asset('booststrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>

 <style>
     .dataTables_wrapper .dataTable tbody tr td {
         font-size: 0.9rem;
     }

     .dataTables_wrapper .dataTable tbody tr .btn {
         font-size: 14px;
         line-height: 18px;
         padding: 10px;

     }
 </style>

 @stack('scripts')
 </body>

 </html>
