<div class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
        <form action="{{ route('users.update', [$user->id]) }}" method="POST">

            @csrf
            @method('PUT')
            
            <label for="name"> Имя пользователя:</label><br>
            <input type="text" name="name" value="{{ $user->name }}" class="form-control"> <br>
            @if ($errors->has('name'))
                <div class="alert alert-danger">
                    @foreach($errors->get('name') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <label for="email"> E-Mail пользователя:</label><br>
            <input type="text" name="email" value="{{ $user->email }}" class="form-control"> <br>
            @if ($errors->has('email'))
                <div class="alert alert-danger">
                    @foreach($errors->get('email') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            @php
                $isadmin = $user->is_admin;
            @endphp
            <div class="form-check">
                <input type="checkbox" class="form-check-input" name="is_admin" @if($isadmin) Checked @endif>
                <label class="form-check-label" for="is_admin">Admin</label>
            </div>
            <br>
            @if ($errors->has('is_admin'))
                <div class="alert alert-danger">
                    @foreach($errors->get('is_admin') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <input type="submit">
        </form>
        <small>
        @if(isset($newsCategory->updated_at))
            {{$user->updated_at}}
        @else
            {{$user->created_at}} 
        @endif
        </small>
        </div>
    </div>
</div>