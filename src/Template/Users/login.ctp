<div class="page page-core page-login">
    <div class="text-center">
        <h3 class="text-light text-white"><span class="text-lightred">M</span>INOVATE</h3></div>
    <div class="container w-420 p-15 bg-white mt-40 text-center">
        <h2 class="text-light text-greensea">Log In</h2>
        <form name="form" class="form-validation mt-20" novalidate ng-submit="login()">
            <div class="form-group">
                <input type="email" class="form-control underline-input" placeholder="Email" ng-model="user.email" required> </div>
            <div class="form-group">
                <input type="password" placeholder="Password" class="form-control underline-input" ng-model="user.password" required> </div>
            <div class="form-group text-left mt-20">
                <button type="submit" class="btn btn-greensea b-0 br-2 mr-5" ng-disabled="form.$invalid">Login</button>
                <!-- <button type="submit" class="btn btn-greensea b-0 br-2 mr-5" ng-click="login()" ng-disabled="form.$invalid">Login</button> -->
                <label class="checkbox checkbox-custom checkbox-custom-sm inline-block">
                    <input type="checkbox"><i></i> Remember me </label> <a ui-sref="core.forgotpass" class="pull-right mt-10">Forgot Password?</a> </div>
        </form>
        <hr class="b-3x">
        <div class="social-login text-left">
            <ul class="pull-right list-unstyled list-inline">
                <li class="p-0"> <a class="btn btn-sm btn-primary b-0 btn-rounded-20" href="javascript:;"><i class="fa fa-facebook"></i></a> </li>
                <li class="p-0"> <a class="btn btn-sm btn-info b-0 btn-rounded-20" href="javascript:;"><i class="fa fa-twitter"></i></a> </li>
                <li class="p-0"> <a class="btn btn-sm btn-lightred b-0 btn-rounded-20" href="javascript:;"><i class="fa fa-google-plus"></i></a> </li>
                <li class="p-0"> <a class="btn btn-sm btn-primary b-0 btn-rounded-20" href="javascript:;"><i class="fa fa-linkedin"></i></a> </li>
            </ul>
            <h5>Or login with</h5> </div>
        <div class="bg-slategray lt wrap-reset mt-40">
            <p class="m-0"> <a ui-sref="core.signup" class="text-uppercase">Create an account</a> </p>
        </div>
    </div>
</div>