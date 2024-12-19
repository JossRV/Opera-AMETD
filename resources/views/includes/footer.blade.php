<footer id="footer" class="mt-0">
    <div class="footer-copyright">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col d-flex align-items-center justify-content-center">
                    <p><strong>AMETD</strong> - © Copyright 2024. <a href="https://operamx.events/"
                            target="_blank">OperaMX</a>.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jquery -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<!-- Vendor -->
<script src="{{ asset('assets/vendor/plugins/js/plugins.min.js') }}"></script>
<!-- Theme Base, Components and Settings -->
<script src="{{ asset('assets/js/theme.js') }}"></script>
<script src="{{ asset('assets/js/views/view.contact.js') }}"></script>
<!-- Theme Custom -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- Theme Initialization Files -->
<script src="{{ asset('assets/js/theme.init.js') }}"></script>
<!-- Examples -->
<script src="{{ asset('assets/js/examples/examples.portfolio.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.2/dist/sweetalert2.min.js"></script>


@yield('js')
@stack('js')
