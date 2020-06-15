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
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Parent Names</label>
                        <input name="parent" type="text" class="form-control" id="" placeholder="...." required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Child name</label>
                        <input name="child" type="text" class="form-control" id="" placeholder="..." required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Age of child</label>
                        <input name="child_age" type="number" class="form-control" id="" placeholder="..." required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Number of children</label>
                        <input name="number_of_children" type="number" class="form-control" id="" placeholder="..." required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Phone Number</label>
                        <input name="phone" type="tel" class="form-control" id="" placeholder="..." required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Email</label>
                        <input name="email" type="email" class="form-control" id="" placeholder="..." required>
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Is your child intrested in finance</label>
                        <select name="isInterestedInFinance" class="form-control" id="exampleFormControlSelect1" required>
                            <option value="">--choose--</option>
                            <option value="yes">yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Select Package</label>
                        <select  name="package" class="form-control" id="exampleFormControlSelect1" required>
                            <option value="">--choose--</option>
                            <option value="school">School</option>
                            <option value="home schooling">Home Schooling</option>
                            <option value="weekend">Weekend</option>
                            <option value="holiday camps">Holiday Camps</option>
                            <option value="customized">Customized</option>
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
