@foreach ($viewModel->users as $user)
    <p>UserId: {{$user->id}}, name: {{$user->name}}</p>
@endforeach
