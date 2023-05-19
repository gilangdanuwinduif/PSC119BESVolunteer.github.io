<!DOCTYPE html>
<html lang="en">

<head>
    <title>PSC 119 Bandung Emergency Service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @include('layouts.include.ex-css')
</head>

<body>
    <div>

        <header class="header-1">
            <!-- navbar -->
            @include('layouts.navbars.navbar')
            <!-- header -->
            @include('komponen.header')
        </header>
        <div class="wrapper">
            <div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">
                <div class="container">
                    <div class="section text-center">
                        @include('komponen.section1')
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <!-- <div> -->
        @include('komponen.section2')

        @include('komponen.section3')
    </div>
    </div>
    <!-- footer -->
    @include('komponen.footer')
    <!--   Core JS Files   -->
    @include('layouts.include.ex-js')
</body>

</html>