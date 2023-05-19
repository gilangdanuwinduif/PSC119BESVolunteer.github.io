<script src="{{ url('/uilayouts/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('/uilayouts/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ url('/uilayouts/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('/uilayouts/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ url('/uilayouts/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ url('/uilayouts/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<!--  Plugin for the Carousel, full documentation here: http://jedrzejchalubek.com/ -->
<script src="{{ url('/uilayouts/js/plugins/glide.js') }}" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://flatpickr.js.org/ -->
<script src="{{ url('/uilayouts/js/plugins/moment.min.js') }}"></script>
<!--	Plugin for Select, full documentation here: https://joshuajohnson.co.uk/Choices/ -->
<script src="{{ url('/uilayouts/js/plugins/choices.min.js') }}" type="text/javascript"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://flatpickr.js.org/ -->
<script src="{{ url('/uilayouts/js/plugins/datetimepicker.js') }}" type="text/javascript"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ url('/uilayouts/js/plugins/jasny-bootstrap.min.js') }}"></script>
<!-- Plugin for Headrom, full documentation here: https://wicky.nillia.ms/headroom.js/ -->
<script src="{{ url('/uilayouts/js/plugins/headroom.min.js') }}"></script>
<!-- Control Center for Argon UI Kit: parallax effects, scripts for the example pages etc -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE" type="text/javascript"></script>
<script src="{{ url('/uilayouts/js/argon-design-system.min.js?v=1.0.2') }}" type="text/javascript"></script>

<!-- bootstrap5 -->
<!--   Core JS Files   -->
<script src="{{ url('/assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ url('/assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('/assets/js/plugins/perfect-scrollbar.min.js') }}" type="text/javascript"></script>
<script src="{{ url('/assets/js/plugins/moment.min.js') }}"></script>


<!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ url('/assets/js/plugins/nouislider.min.js') }}"></script>

<!--  Plugin for the Carousel, full documentation here: http://jedrzejchalubek.com/  -->
<script src="{{ url('/assets/js/plugins/glidejs.min.js') }}"></script>

<!--	Plugin for Select, full documentation here: https://joshuajohnson.co.uk/Choices/ -->
<script src="{{ url('/assets/js/plugins/choices.min.js') }}" type="text/javascript"></script>


<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Control Center for Material Kit parallax effects, scripts for the example pages etc -->
<script src="{{ url('/assets/js/material-kit-pro.min.js') }}" type="text/javascript"></script>

<script>
    function argonScripts() {
        if (document.querySelectorAll('.glide').length) {
            // Carousel
            new Glide('.glide', {
                type: 'carousel',
                startAt: 0,
                focusAt: 2,
                perTouch: 1,
                perView: 4
            }).mount();
        }

        if (document.querySelectorAll('.testimonial-glide').length) {
            // Testimonial Carousel
            new Glide('.testimonial-glide', {
                type: 'carousel',
                startAt: 0,
                focusAt: 2,
                perTouch: 1,
                perView: 4
            }).mount();
        }

        if (document.querySelectorAll('.map').length) {
            ArgonKit.initGoogleMaps();
            ArgonKit.initGoogleMaps2();
        }
    }
    argonScripts();
</script>