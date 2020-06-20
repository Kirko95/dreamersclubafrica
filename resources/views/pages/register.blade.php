@extends('layout.app')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/register.jpg') }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Register</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Register</span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container color-wrapper">
        <div class="wrapper">
            <h2 class="text-center head-title">Fill in the following: </h2>
            <form name="register-form" class="register-form" action="/register" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-left ">Parent details: </h3>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="fname">First Name</label>
                        <input name="first_name" type="text" class="form-control" id="" placeholder="e.g john" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lname">Last name</label>
                        <input name="last_name" type="text" class="form-control" id="" placeholder=" e.g doe" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Email</label>
                        <input name="email" type="email" class="form-control" id="" placeholder=" e.g john@gmail.com" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Phone Number</label>
                        <input name="phone" type="tel" class="form-control" id="" placeholder=" e.g 07xx 342 xxx" required>
                    </div>
                </div>
                <br><hr><br>

                <div class="row">
                    <div class="col-12">
                        <h3 class="text-left ">Child's details: </h3>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="fname">First Name</label>
                        <input name="child_first_name[]" type="text" class="form-control" id="" placeholder="e.g john" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lname">Last name</label>
                        <input name="child_last_name[]" type="text" class="form-control" id="" placeholder=" e.g doe" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Email</label>
                        <input name="child_email[]" type="email" class="form-control" id="" placeholder=" e.g john@gmail.com" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Phone Number</label>
                        <input name="child_phone[]" type="tel" class="form-control" id="" placeholder=" e.g 07xx 342 xxx" required>
                    </div>

                    <div class="col-6">
                    <button type="submit" class="btn btn-primary px-4 py-3 mt-3 size-btn register-button">Add another child</button>
                </div>
                </div>
                <br><hr><br>

                <div class="row">
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Select Package</label>
                        <select  name="package[]" class="form-control" id="exampleFormControlSelect1" required>
                            <option value="">--choose--</option>
                            <option value="school">School</option>
                            <option value="home schooling">Home Schooling</option>
                            <option value="weekend">Weekend</option>
                            <option value="holiday camps">Holiday Camps</option>
                            <option value="customized">Customized</option>
                            <option value="not user">Not sure</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="col-12">
                    <button type="submit" class="btn btn-secondary px-4 py-3 mt-3 size-btn register-button">Submit</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</section>
@endsection
