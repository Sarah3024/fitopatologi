@include('csslogin')
<div class="css-login-page">
    <div class="css-form">
        <form class="css-login-form" action="" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <h2>Register</h2>
            <p style="font-style: italic; color:red">{{ $error_msg or ''}}</p>
            <input type="text" placeholder="username" name="username" value="{{ $input->username or ''}}">
            <input type="text" placeholder="email" name="email" value="{{ $input->email or ''}}">
            <input type="password" placeholder="password" value="{{ $input->password or ''}}" name="password">
            <input type="password" placeholder="repeat password" value="{{ $input->password2 or ''}}" name="password2">
            <input type="text" placeholder="nama lengkap" name="lengthName" value="{{ $input->lengthName or ''}}">
            <input type="text" placeholder="nama instansi" name="instansi_user" value="{{ $input->instansi_user or ''}}">
            <button type="submit">register</button>
            <p class="css-message"><a href="{{route('login')}}">Have an account</a></p>
            <p class="css-message"><a href="{{url('')}}">Back to Home</a></p>
        </form>
    </div>
</div>
