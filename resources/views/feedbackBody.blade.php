<div class="p-3 p-md-5">
    <h1 class="display-4 font-italic">Leave us your feedback!</h1>
    <form action="{{ route('feedbackSubmit') }}" method="POST" class="feedbackForm">
        @csrf
        <label for="subName">Name:</label>
        <input type="text" name="subName" class="feedbackInput form-control" placeholder="LaravelMaster3000">
        <label for="subMail">E-Mail:</label>
        <input type="text" name="subMail" class="feedbackInput form-control"  placeholder="LaravelMaster3000@mail.test">
        <label for="subText">Your message:</label>
        <textarea cols="30" rows="10" name="subText"  class="feedbackInput form-control" placeholder="This website is cool!"></textarea>
        <input type="submit" name="submit" value="Submit" class="btn btn-success">
    </form>
</div>