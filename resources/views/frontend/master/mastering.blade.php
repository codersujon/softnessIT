@include('frontend.includes.header')
@include('frontend.includes.css')

<!-- body_wrap - start -->
<div class="body_wrap">

    <!-- backtotop - start -->
    <div class="backtotop">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <!-- preloader - start -->
    <div id="preloader"></div>
    <!-- preloader - end -->

    @include('frontend.includes.mainheader')

    <!-- main body - start
        ================================================== -->
    <main>
        @include('frontend.includes.card')
        @include('frontend.includes.quickview')
        @include('frontend.includes.slider')
        @include('frontend.includes.policy')
        @include('frontend.includes.productsidebar')
        @include('frontend.includes.promotion')
        @include('frontend.includes.newarrivales')
        @include('frontend.includes.brand')
        @include('frontend.includes.viewproduct')
        @include('frontend.includes.newsletter')
    </main>
    <!-- main body - end
        ================================================== -->

    @include('frontend.includes.footer')
</div>
<!-- body_wrap - end -->

@include('frontend.includes.js')

</body>

</html>