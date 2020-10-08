<section id="footer">
    <div class="footer">
        <div class="brand"><h1><span>L</span>orem <span>I</span>psum</h1></div>
{{--        <h2>Lorem ipsum dolor sit amet.</h2>--}}
        <div class="social-icon">
            <div class="social-item">
                <a href=""><img src="{{ asset('/images/facebook-24.png') }}" alt=""></a>
            </div>
            <div class="social-item">
                <a href=""><img src="{{ asset('/images/icons8-instagram-26.png') }}" alt=""></a>
            </div>
            <div class="social-item">
                <a href=""><img src="{{ asset('/images/icons8-twitter-24.png') }}" alt=""></a>
            </div>
            <div class="social-item">
                <a href=""><img src="{{ asset('/images/icons8-google-plus-circled-50.png') }}" alt=""></a>
            </div>
        </div>
    </div>
        <p>Copyright<span>&#169;</span><?php echo date("Y"); ?>. All rights reserved</p>
</section>

@include('layouts.htmlfooter')
