@include("layouts.head")
@include("layouts.header.main")

<div class="message_wrapper">
    <h1 class="welcome_message">chartmanへようこそ</h1>
</div>
<div class="login_wrapper">
    <div class="login_box">
        <a type="button" class="btn btn-outline-primary login_register_btn" href="{{ url('/login') }}"><i class="bi bi-arrow-up-right-square-fill" style="font-size: 1.5rem"></i> &ensp;ログイン</a>
        <a type="button" class="btn btn-outline-success login_register_btn" href="{{ url('/register') }}"><i class="bi bi-arrow-down-right-square-fill" style="font-size: 1.5rem"></i> &ensp;新規登録</a>


    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<!-- @if (Auth::check())
<p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
@else
<p>※ログインしていません。(<a href="/login">ログイン</a>|
    <a href="/register">登録</a>)</p>
@endif -->
