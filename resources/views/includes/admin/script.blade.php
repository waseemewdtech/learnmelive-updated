<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script>
            $.sidebarMenu = function (menu) {
                var animationSpeed = 300;

                $(menu).on("click", "li a", function (e) {
                    var $this = $(this);
                    var checkElement = $this.next();

                    if (checkElement.is(".treeview-menu") && checkElement.is(":visible")) {
                        checkElement.slideUp(animationSpeed, function () {
                            checkElement.removeClass("menu-open");
                        });
                        checkElement.parent("li").removeClass("active");
                    }

                    //If the menu is not visible
                    else if (checkElement.is(".treeview-menu") && !checkElement.is(":visible")) {
                        //Get the parent menu
                        var parent = $this.parents("ul").first();
                        //Close all open menus within the parent
                        var ul = parent.find("ul:visible").slideUp(animationSpeed);
                        //Remove the menu-open class from the parent
                        ul.removeClass("menu-open");
                        //Get the parent li
                        var parent_li = $this.parent("li");

                        //Open the target menu and add the menu-open class
                        checkElement.slideDown(animationSpeed, function () {
                            //Add the class active to the parent li
                            checkElement.addClass("menu-open");
                            parent.find("li.active").removeClass("active");
                            parent_li.addClass("active");
                        });
                    }
                    //if this isn't a link, prevent the page from being redirected
                    if (checkElement.is(".treeview-menu")) {
                        e.preventDefault();
                    }
                });
            };

            $.sidebarMenu($(".sidebar-menu"));
        </script>
        <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{ asset('assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
        <!-- Select2 -->
        <script src="{{ asset('assets/admin/plugins/select2/js/select2.full.min.js') }}"></script>
        <!-- Summernote -->
        <script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
        <script src="{{ asset('assets/admin/dist/js/adminlte.js') }}"></script>
        <script src="{{ asset('assets/admin/dist/js/custome.js') }}"></script>
        <script>
            $(function () {
                 $(".select2").select2();
                $("#example1")
                    .DataTable({
                        responsive: true,
                        lengthChange: false,
                        autoWidth: false,
                        buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                    })
                    .buttons()
                    .container()
                    .appendTo("#example1_wrapper .col-md-6:eq(0)");
                // $('#example2').DataTable({
                //   "paging": true,
                //   "lengthChange": false,
                //   "searching": false,
                //   "ordering": true,
                //   "info": true,
                //   "autoWidth": false,
                //   "responsive": true,
                // });
            });
    
        </script>