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
            <form>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Parent Names</label>
                        <input type="text" class="form-control" id="" placeholder="....">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Child name</label>
                        <input type="text" class="form-control" id="" placeholder="...">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Age of child</label>
                        <input type="number" class="form-control" id="" placeholder="...">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Number of children</label>
                        <input type="number" class="form-control" id="" placeholder="...">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Phone Number</label>
                        <input type="tel" class="form-control" id="" placeholder="...">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="email" class="form-control" id="" placeholder="...">
                    </div>
                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Is your child intrested in finance</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>--choose--</option>
                            <option>yes</option>
                            <option>No</option>
                        </select>
                    </div>

                    <div class="form-group col-12">
                        <label for="exampleFormControlSelect1">Select Package</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>--choose--</option>
                            <option>School</option>
                            <option>Home Schooling</option>
                            <option>Weekend</option>
                            <option>Holiday Camps</option>
                            <option>Customized</option>
                        </select>
                    </div> 
                </div>
                <br> 
                <div class="col-12">
                    <button type="button" class="btn btn-secondary px-4 py-3 mt-3 size-btn">Submit</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</section>
@endsection