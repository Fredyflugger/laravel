<div class="p-3 p-md-5">
    <h1 class="display-4 font-italic">Leave your request for data unloading.</h1>
    <form action="{{ route('unloadSubmit') }}" method="POST" class="feedbackForm">
        @csrf
        <label for="username">Name:</label>
        <input type="text" name="username" class="feedbackInput form-control" placeholder="LaravelMaster3000">
        <label for="email">E-Mail:</label>
        <input type="text" name="email" class="feedbackInput form-control"  placeholder="LaravelMaster3000@mail.test">
        <label for="phone_number">Phone Number:</label>
        <input type="text" name="phone_number" class="feedbackInput form-control"  placeholder="+7-999-44-66-777">
        <label for="message">Your request:</label>
        <textarea cols="30" rows="10" name="message"  class="feedbackInput form-control" placeholder="This website is cool!"></textarea>
        <input type="submit" name="submit" value="Submit" class="btn btn-success">
    </form>
</div>