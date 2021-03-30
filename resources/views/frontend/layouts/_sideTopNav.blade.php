<div class="sidebar-modal">
    <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icofont-close"></i></span></button>

                    <h2 class="modal-title" id="myModalLabel2"><a href="index.html"><img src="{{ asset('frontend/assets/img/logoye.png') }}" alt="logo"></a></h2>
                </div>

                <div class="modal-body">
                    <div class="sidebar-modal-widget">
                        <h3 class="title">Additional Links</h3>

                        <ul>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
{{--                            <li><a href="#">FAQ</a></li>--}}
{{--                            <li><a href="#">Logout</a></li>--}}
                        </ul>
                    </div>

                    <div class="sidebar-modal-widget">
                        <h3 class="title">Contact Info</h3>

                        <ul class="contact-info">
                            <li>
                                <i class="icofont-google-map"></i>
                                Address
                                <span>1660 Travis Street Miramar, FL 33025, California</span>
                            </li>
                            <li>
                                <i class="icofont-email"></i>
                                Email
                                <span><a href="#">admin@artflex.com</a></span>
                            </li>
                            <li>
                                <i class="icofont-phone"></i>
                                Phone
                                <span><a href="#">+123 456 7890</a></span>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-modal-widget">
                        <h3 class="title">Connect With Us</h3>

                        <ul class="social-list">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                            <li><a href="#"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>

{{--                    <div class="sidebar-modal-widget">--}}
{{--                        <h3 class="title">Search</h3>--}}

{{--                        <form class="modal-search-form">--}}
{{--                            <input type="text" class="form-control" placeholder="Serch here..">--}}
{{--                            <button type="submit"><i class="icofont-search-2"></i></button>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->
</div>
