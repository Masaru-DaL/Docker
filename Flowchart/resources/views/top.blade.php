@include("layouts.head")
@include("layouts.header.main")



<div class="wrap">
    <div class="box">
        <button type="button" class="btn btn-outline-primary"><i class="fas fa-database"></i> ログイン</button>
        <button type="button" class="btn btn-outline-success"><i class="fas fa-cog"></i> 新規登録</button>
    </div>
</div>


</body>
</html>
<!-- @if (Auth::check())
<p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
@else
<p>※ログインしていません。(<a href="/login">ログイン</a>|
    <a href="/register">登録</a>)</p>
@endif -->
