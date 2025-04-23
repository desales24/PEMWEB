<!doctype html>
<html lang="en">
    <!-- head -->
     @include('components.partials.head')
    <!-- end head -->
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="spinner-rotate"></span>    
            </div>
        </section>
        <!-- navbar -->
        @include('components.partials.navbar')
        <!-- navbar -->

        <!-- main -->
        @livewire('show-home-page')
        @livewire('show-about')
        @livewire('show-service')
        @livewire('show-project')
        @livewire('contact')
        <!-- end main -->

        <!-- footer -->
        @include('components.partials.footer')
        <!-- end footer -->

        <!-- script-->
        @include('components.partials.script')
        <!-- end script -->

    </body>
</html>