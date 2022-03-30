@extends('layouts.master_head')
@section('content')

<div class="container">

<div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card auth">

    <div class="title_forms" ><p>CONTACT FORM</p></div>
    <form action="action_page.php">
        <div class="row">
        <div class="col-25">
            <label for="fname">First Name</label>
        </div>
        <div class="col-75">
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
        </div>
        </div>
        <div class="row">
        <div class="col-25">
            <label for="lname">Last Name</label>
        </div>
        <div class="col-75">
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        </div>
        </div>
        <div class="row">
        <div class="col-25">
            <label for="country">Country</label>
        </div>
        <div class="col-75">
            <select id="country" name="country">
            <option value="netherlands">Netherlands</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
            </select>
        </div>
        </div>
        <div class="row">
        <div class="col-25">
            <label for="subject">Subject</label>
        </div>
        <div class="col-75">
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
        </div>
        </div>
        <div class="submit_button row">
        <input class="btn-primary" type="submit" value="Submit">
        </div>
    </form>

</div>
</div>
</div>
</div>




    @endsection