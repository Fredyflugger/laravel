<div class="p-3 p-md-5">
    <h1 class="display-4 font-italic">Leave your request for data unloading.</h1>
    <form action="{{ route('unloadSubmit') }}" method="POST" class="feedbackForm">
        @csrf
        <label for="unloadName">Name:</label>
        <input type="text" name="unloadName" class="feedbackInput form-control" placeholder="LaravelMaster3000">
        <label for="unloadMail">E-Mail:</label>
        <input type="text" name="unloadMail" class="feedbackInput form-control"  placeholder="LaravelMaster3000@mail.test">
        <label for="unloadPhone">Phone Number:</label>
        <input type="text" name="unloadPhone" class="feedbackInput form-control"  placeholder="+7-999-44-66-777">
        <label for="unloadText">Your request:</label>
        <textarea cols="30" rows="10" name="unloadText"  class="feedbackInput form-control" placeholder="This website is cool!"></textarea>
        <input type="submit" name="submit" value="Submit" class="btn btn-success">
    </form>
</div>