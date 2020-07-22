<a class="p-2 text-danger" href="{{ route('categories.index') }}">Все категории</a> <br>
<a class="p-2 text-danger" href="{{ route('news.create') }}">Создать новость</a> <br>

@foreach ($users as $user)
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1 category-title">{{ $user->name }} / {{ $user->email }}</h5>
                <small>
                    created - {{ $user->created_at }} / last updated - {{ $user->updated_at }}
                </small>
            </div>
            <a href="{{ route('users.edit', [$user]) }}"><p class="mb-1">Edit user</p></a>
            <a href="#"><small>Delete user</small></a>
        </div>
    </div>
@endforeach