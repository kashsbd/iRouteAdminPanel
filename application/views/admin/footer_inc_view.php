        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <?=date('Y'); ?> Internship: University of Computer Studies
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?=base_url(); ?>public/js/jquery.js" type="text/javascript"></script>
	<script src="<?=base_url(); ?>public/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?=base_url(); ?>public/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="<?=base_url(); ?>public/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?=base_url(); ?>public/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?=base_url(); ?>public/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?=base_url(); ?>public/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>iRoute admin panel</b>!"

            },{
                type: 'info',
                timer: 1000
            });

    	});
	</script>

</html>
