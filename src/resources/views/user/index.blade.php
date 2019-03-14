@foreach ($viewModel->users as $user)
    <p>UserId: {{$user->id}}, name: {{$user->name}}</p>
@endforeach

<p>ユーザ作成リクエスト</p>
<form action="user/create" method="post">
    @csrf
    <input type="input" name="name">
    <input type="submit">
</form>
