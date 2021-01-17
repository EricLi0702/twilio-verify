<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->
        <title>Verify your phone number</title>
        <!-- include ICON -->
        <link rel="icon" type="image/png" href="{{ asset('asset/images/favicon.png') }}" sizes="16x16">
        <!-- include Custom CSS -->
        <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    </head>
    <body>
        <!--=====================================
                Main  Section  START
        =======================================-->
        <div class="main-section">
            <form action="/verify" method="POST">
                @csrf
                <h2 class="p-10">  Verification code  </h2>{{session('phone_number')}}
                <p class="p-10 fw-12">Enter the 6-digit verification code that you received and click Verify</p>
                <div class="input-group pt-5">
                    <input type="hidden" id="phone_number" name="phone_number" value="{{session('phone_number')}}">
                    <input type="phone" id="verification_code" name="verification_code" class="form-control" placeholder="6-digit verification code">
                </div>
                @error('verification_code')
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                @enderror
                @if(session('error'))
                    <div class="error pt-10 text-danger">{{ session('error') }}</div>
                @endif
                <div class="btn-con pt-10">
                    <button type="submit" class="w-100">Verify</button>
                </div>
            </form>
            <div class="copyright-con">
                <p class="fw-12"> &copy; 2021 </p> 
            </div>
        </div>
        <!--=====================================
                Main  Section  START
        =======================================-->


        <!-- jquery -->
        <script src="{{ asset('asset/js/jquery-3.5.1.min.js')}}"></script>
        <!-- custom js -->
        <script src="{{ asset('asset/js/custom.js') }}"></script>
    </body>
</html>
