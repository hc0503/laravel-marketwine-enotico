@extends('layouts.vertical', ['title' => 'Validation | Parsley'])

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Validation</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Form Validation</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Bootstrap Validation - Normal</h4>
                        <p class="sub-header">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p>

                        <form class="needs-validation" novalidate>
                            <div class="form-group mb-3">
                                <label for="validationCustom01">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom02">Last name</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustomUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend"
                                        required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom03">City</label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom04">State</label>
                                <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="validationCustom05">Zip</label>
                                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox form-check">
                                    <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                                    <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>

                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->


            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Bootstrap Validation (Tooltips)</h4>
                        <p class="sub-header">If your form layout allows it, you can swap the <code>.{valid|invalid}-feedback</code>
                            classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback
                            in a styled tooltip.</p>

                        <form class="needs-validation" novalidate>
                            <div class="form-group position-relative mb-3">
                                <label for="validationTooltip01">First name</label>
                                <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                                <div class="invalid-tooltip">
                                    Please enter first name.
                                </div>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="validationTooltip02">Last name</label>
                                <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                                <div class="valid-tooltip">
                                    Looks good!
                                </div>
                                <div class="invalid-tooltip">
                                    Please enter last name.
                                </div>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="validationTooltipUsername">Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                    </div>
                                    <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend"
                                        required>
                                    <div class="invalid-tooltip">
                                        Please choose a unique and valid username.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="validationTooltip03">City</label>
                                <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="validationTooltip04">State</label>
                                <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="form-group position-relative mb-3">
                                <label for="validationTooltip05">Zip</label>
                                <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                                <div class="invalid-tooltip">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </form>
                        
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title">Parsley Examples</h4>
                    <p class="sub-header">Parsley is a javascript form validation library. It helps you provide your users with feedback on
                    their form submission before sending it to your server.</p>

                    <div class="alert alert-warning d-none fade show">
                        <h4 class="mt-0 text-warning">Oh snap!</h4>
                        <p class="mb-0">This form seems to be invalid :(</p>
                    </div>

                    <div class="alert alert-info d-none fade show">
                        <h4 class="mt-0 text-info">Yay!</h4>
                        <p class="mb-0">Everything seems to be ok :)</p>
                    </div>

                    <form id="demo-form" data-parsley-validate="">
                        <div class="form-group">
                            <label for="fullname">Full Name * :</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" required="">
                        </div>

                        <div class="form-group">
                            <label for="email">Email * :</label>
                            <input type="email" id="email" class="form-control" name="email"
                                    data-parsley-trigger="change" required="">
                        </div>

                        <div class="form-group">
                            <label>Gender *:</label>

                            <div class="radio mb-1">
                                <input type="radio" name="gender" id="genderM" value="Male" required="">
                                <label for="genderM">
                                    Male
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio" name="gender" id="genderF" value="Female">
                                <label for="genderF">
                                    Female
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Hobbies (Optional, but 2 minimum):</label>

                            <div class="checkbox checkbox-pink mb-1">
                                <input type="checkbox" name="hobbies[]" id="hobby1"
                                                value="ski" data-parsley-mincheck="2">
                                <label for="hobby1"> Skiing </label>
                            </div>
                            <div class="checkbox checkbox-pink mb-1">
                                <input type="checkbox" name="hobbies[]" id="hobby2"
                                                value="run">
                                <label for="hobby2"> Running </label>
                            </div>
                            <div class="checkbox checkbox-pink">
                                <input type="checkbox" name="hobbies[]" id="hobby3"
                                                value="eat">
                                <label for="hobby3"> Eating </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="heard">Heard about us via *:</label>
                            <select id="heard" class="form-control" required="">
                                <option value="">Choose..</option>
                                <option value="press">Press</option>
                                <option value="net">Internet</option>
                                <option value="mouth">Word of mouth</option>
                                <option value="other">Other..</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="message">Message (20 chars min, 100 max) :</label>
                            <textarea id="message" class="form-control" name="message"
                                data-parsley-trigger="keyup" data-parsley-minlength="20"
                                data-parsley-maxlength="100"
                                data-parsley-minlength-message="Come on! You need to enter at least a 20 character comment.."
                                data-parsley-validation-threshold="10">
                            </textarea>
                        </div>

                        <div class="form-group mb-0">
                            <input type="submit" class="btn btn-success" value="Validate">
                        </div>

                    </form>
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->


        <div class="row">
            <div class="col-lg-6">

                <div class="card-box">
                    <h4 class="header-title m-t-0">Basic Form</h4>
                    <p class="text-muted font-14 m-b-20">
                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                    </p>

                    <form action="#" class="parsley-examples">
                        <div class="form-group">
                            <label for="userName">User Name<span class="text-danger">*</span></label>
                            <input type="text" name="nick" parsley-trigger="change" required
                                    placeholder="Enter user name" class="form-control" id="userName">
                        </div>
                        <div class="form-group">
                            <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                            <input type="email" name="email" parsley-trigger="change" required
                                    placeholder="Enter email" class="form-control" id="emailAddress">
                        </div>
                        <div class="form-group">
                            <label for="pass1">Password<span class="text-danger">*</span></label>
                            <input id="pass1" type="password" placeholder="Password" required
                                    class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                            <input data-parsley-equalto="#pass1" type="password" required
                                    placeholder="Password" class="form-control" id="passWord2">
                        </div>
                        <div class="form-group">
                            <div class="checkbox checkbox-purple">
                                <input id="checkbox6a" type="checkbox">
                                <label for="checkbox6a">
                                    Remember me
                                </label>
                            </div>

                        </div>

                        <div class="form-group text-right m-b-0">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                Cancel
                            </button>
                        </div>

                    </form>
                </div> <!-- end card-box -->
            </div>
            <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0">Horizontal Form</h4>
                    <p class="text-muted font-14 m-b-20">
                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                    </p>

                    <form role="form" class="parsley-examples">
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-4 col-form-label">Email<span class="text-danger">*</span></label>
                            <div class="col-7">
                                <input type="email" required parsley-type="email" class="form-control"
                                        id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hori-pass1" class="col-4 col-form-label">Password<span class="text-danger">*</span></label>
                            <div class="col-7">
                                <input id="hori-pass1" type="password" placeholder="Password" required
                                        class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hori-pass2" class="col-4 col-form-label">Confirm Password
                                <span class="text-danger">*</span></label>
                            <div class="col-7">
                                <input data-parsley-equalto="#hori-pass1" type="password" required
                                        placeholder="Password" class="form-control" id="hori-pass2">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="webSite" class="col-4 col-form-label">Web Site<span class="text-danger">*</span></label>
                            <div class="col-7">
                                <input type="url" required parsley-type="url" class="form-control"
                                        id="webSite" placeholder="URL">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-8 offset-4">
                                <div class="checkbox checkbox-purple">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-8 offset-4">
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Register
                                </button>
                                <button type="reset"
                                        class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-box -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0">Validation type</h4>
                    <p class="text-muted font-14 m-b-20">
                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                    </p>

                    <form action="#" class="parsley-examples">
                        <div class="form-group">
                            <label>Required</label>
                            <input type="text" class="form-control" required
                                    placeholder="Type something"/>
                        </div>

                        <div class="form-group">
                            <label>Equal To</label>
                            <div>
                                <input type="password" id="pass2" class="form-control" required
                                        placeholder="Password"/>
                            </div>
                            <div class="mt-2">
                                <input type="password" class="form-control" required
                                        data-parsley-equalto="#pass2"
                                        placeholder="Re-Type Password"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>E-Mail</label>
                            <div>
                                <input type="email" class="form-control" required
                                        parsley-type="email" placeholder="Enter a valid e-mail"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>URL</label>
                            <div>
                                <input parsley-type="url" type="url" class="form-control"
                                        required placeholder="URL"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Digits</label>
                            <div>
                                <input data-parsley-type="digits" type="text"
                                        class="form-control" required
                                        placeholder="Enter only digits"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Number</label>
                            <div>
                                <input data-parsley-type="number" type="text"
                                        class="form-control" required
                                        placeholder="Enter only numbers"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alphanumeric</label>
                            <div>
                                <input data-parsley-type="alphanum" type="text"
                                        class="form-control" required
                                        placeholder="Enter alphanumeric value"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Textarea</label>
                            <div>
                                <textarea required class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-box -->
            </div> <!-- end col-->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0">Range validation</h4>
                    <p class="text-muted font-14 m-b-20">
                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                    </p>

                    <form action="#" class="parsley-examples">

                        <div class="form-group">
                            <label>Min Length</label>
                            <div>
                                <input type="text" class="form-control" required
                                        data-parsley-minlength="6" placeholder="Min 6 chars."/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Max Length</label>
                            <div>
                                <input type="text" class="form-control" required
                                        data-parsley-maxlength="6" placeholder="Max 6 chars."/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Range Length</label>
                            <div>
                                <input type="text" class="form-control" required
                                        data-parsley-length="[5,10]"
                                        placeholder="Text between 5 - 10 chars length"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Min Value</label>
                            <div>
                                <input type="text" class="form-control" required
                                        data-parsley-min="6" placeholder="Min value is 6"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Max Value</label>
                            <div>
                                <input type="text" class="form-control" required
                                        data-parsley-max="6" placeholder="Max value is 6"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Range Value</label>
                            <div>
                                <input class="form-control" required type="text" min="6"
                                        max="100" placeholder="Number between 6 - 100"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Regular Exp</label>
                            <div>
                                <input type="text" class="form-control" required
                                        data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                        placeholder="Hex. Color"/>
                            </div>
                        </div>

                        <div class="form-group mb-0">
                            <div>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>

                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/parsleyjs/parsleyjs.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/form-validation.init.js')}}"></script>
@endsection