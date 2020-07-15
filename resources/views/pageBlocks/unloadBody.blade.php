<div class="p-3 p-md-5">
    <h1 class="display-4 font-italic">Leave your request for data unloading.</h1>
    <form action="{{ route('unloadSubmit') }}" method="POST" class="feedbackForm">
        @csrf
        <label for="username">Name:</label>
        <input type="text" name="username" class="feedbackInput form-control" placeholder="LaravelMaster3000">
        @if ($errors->has('username'))
                <div class="alert alert-danger">
                    @foreach($errors->get('username') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div>
        @endif
        <label for="email">E-Mail:</label>
        <input type="text" name="email" class="feedbackInput form-control"  placeholder="LaravelMaster3000@mail.test">
        @if ($errors->has('email'))
                <div class="alert alert-danger">
                    @foreach($errors->get('email') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div>
        @endif
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" class="feedbackInput form-control"  placeholder="+7-999-44-66-777">
        @if ($errors->has('phone_number'))
                <div class="alert alert-danger">
                    @foreach($errors->get('phone_number') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div>
        @endif
        <label for="message">Your request:</label>
        <textarea cols="30" rows="10" name="message"  class="feedbackInput form-control" placeholder="This website is cool!"></textarea>
        @if ($errors->has('message'))
                <div class="alert alert-danger">
                    @foreach($errors->get('message') as $error)
                        <p style="margin-bottom: 0">{{ $error }}</p>
                    @endforeach
                </div>
        @endif
        <input type="submit" name="submit" value="Submit" class="btn btn-success">
    </form>
</div>