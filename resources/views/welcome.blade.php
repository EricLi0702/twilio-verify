<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->
        <title>Verify your phone number</title>
        <!-- include ICON -->
        <link rel="icon" type="image/png" href="{{ asset('asset/images/favicon.png') }}" sizes="16x16">
        <!-- include Bootstrap CSS -->
        {{-- <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}"> --}}
        <!-- include Custom CSS -->
        <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    </head>
    <body>
        <!--=====================================
                Main  Section  START
        =======================================-->
        <div class="main-section">
            <h2 class="p-10">  Phone number verification  </h2>
            <p class="p-10 fw-12">Verifying your number. Requirements. You can only verify a phone number you own.</p>
            <div class="input-group pt-5">
                <div class="input-group-prepend">
                  <span class="input-group-text">+38</span>
                </div>
                <input type="phone" id="phone" class="form-control" placeholder="Enter your phone number">
            </div>
            <div class="btn-con pt-10">
                <button class="w-100">Send SMS with code</button>
            </div>
            <div class="copyright-con">
                <p class="fw-12"> &copy; 2021 </p> 
            </div>
        </div>
        <!--=====================================
                Main  Section  START
        =======================================-->


        <!-- jquery -->
        <script src="{{ asset('asset/js/jquery-3.5.1.min.js')}}"></script>
        <!-- bootstrap bundle js -->
        {{-- <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script> --}}
        <!-- custom js -->
        <script src="{{ asset('asset/js/custom.js') }}"></script>
    </body>
</html>
