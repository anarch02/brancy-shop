@extends('layouts.app')

@section('content')

    <!--== Start Page Header Area Wrapper ==-->
    <section class="page-header-area pt-10 pb-9" data-bg-color="#FFF3DA" style="margin-top: 120px">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="page-header-st3-content text-center text-md-start">
                        <ol class="breadcrumb justify-content-center justify-content-md-start">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.html">Home</a></li>
                            <li class="breadcrumb-item active text-dark" aria-current="page">Account</li>
                        </ol>
                        <h2 class="page-header-title">Account</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->
<!--== Start Profile Area Wrapper ==-->
<section class="section-space">
    <div class="container">
        <div class="row mb-n8">
            <div class="col-lg-6 mb-8">
                <!--== Start Profile Info Area Wrapper ==-->
                <div class="my-account-item-wrap">
                    <h3 class="title">Profile Information</h3>
                    <div class="my-account-form">
                        <form action="#" method="post">
                            <div class="form-group mb-6">
                                <label for="profile_username">Username or Email Address <sup>*</sup></label>
                                <input type="email" id="profile_username" name="email" value="user@example.com" required>
                            </div>

                            <div class="form-group mb-6">
                                <label for="profile_fullname">Full Name <sup>*</sup></label>
                                <input type="text" id="profile_fullname" name="fullname" value="John Doe" required>
                            </div>

                            <div class="form-group mb-6">
                                <label for="profile_password">New Password</label>
                                <input type="password" id="profile_password" name="password" required autocomplete="new-password">
                            </div>

                            <div class="form-group mb-6">
                                <label for="profile_confirm_password">Confirm Password</label>
                                <input type="password" id="profile_confirm_password" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <p class="desc mb-4">Update your personal information and password as needed.</p>
                                <button type="submit" class="btn">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--== End Profile Info Area Wrapper ==-->
            </div>
            <div class="col-lg-6 mb-8">
                <!--== Start Address Area Wrapper ==-->
                <div class="my-account-item-wrap">
                    <h3 class="title">Billing Address</h3>
                    <div class="my-account-form">
                        <form action="#" method="post">
                            <div class="form-group mb-6">
                                <label for="profile_address">Address <sup>*</sup></label>
                                <input type="text" id="profile_address" name="address" value="123 Main Street" required>
                            </div>

                            <div class="form-group mb-6">
                                <label for="profile_city">City <sup>*</sup></label>
                                <input type="text" id="profile_city" name="city" value="Anytown" required>
                            </div>

                            <div class="form-group mb-6">
                                <label for="profile_zip">ZIP/Postal Code <sup>*</sup></label>
                                <input type="text" id="profile_zip" name="zip" value="12345" required>
                            </div>

                            <div class="form-group">
                                <p class="desc mb-4">Update your billing address details.</p>
                                <button type="submit" class="btn">Save Address</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!--== End Address Area Wrapper ==-->
            </div>
        </div>
    </div>
</section>
<!--== End Profile Area Wrapper ==-->


@endsection
