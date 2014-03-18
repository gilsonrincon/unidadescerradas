{{ link_to('users/create', 'Nuevo') }}
<ul>
@foreach($users as $user)
	<li>{{ $user->username }}</li>
@endforeach
</ul>