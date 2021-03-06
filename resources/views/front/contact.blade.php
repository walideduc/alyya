@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12">

            <!-- OUR LOCATION -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="no-padding">
                    <span class="title">OUR LOCATION</span>
                </div>
                Mimity Online Shop<br/>
                Street address<br/>
                Store Town<br/>
                ZIP
                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=cihanjuang&amp;sll=37.0625,-95.677068&amp;sspn=56.637293,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=Cihanjuang.,+Cimahi+Utara,+Cimahi,+Jawa+Barat,+Indonesia&amp;t=m&amp;z=14&amp;ll=-6.858623,107.5664&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=cihanjuang&amp;sll=37.0625,-95.677068&amp;sspn=56.637293,79.013672&amp;ie=UTF8&amp;hq=&amp;hnear=Cihanjuang.,+Cimahi+Utara,+Cimahi,+Jawa+Barat,+Indonesia&amp;t=m&amp;z=14&amp;ll=-6.858623,107.5664" style="color:#0000FF;text-align:left">View Larger Map</a></small>
            </div>
            <!-- End OUR LOCATION -->

        </div>

        <div class="clearfix visible-sm"></div>

        <!-- Cart -->
        <div class="col-lg-9 col-md-9 col-sm-12">
            <div class="col-lg-12 col-sm-12">
                <span class="title">CONTACT US</span>
            </div>
            <div class="col-lg-12 col-sm-12 hero-feature">
                <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <table class="table table-bordered tbl-checkout">
                    <tbody>
                    <tr>
                        <td>First Name</td>
                        <td>
                            <input type="text" name="" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td>
                            <input type="text" name="" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="text" name="" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Telephone</td>
                        <td>
                            <input type="text" name="" class="form-control" />
                        </td>
                    </tr>
                    <tr>
                        <td>Message</td>
                        <td colspan="3">
                            <textarea name="" class="form-control" rows="5"></textarea>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="btn-group btns-cart">
                    <button type="button" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
        <!-- End Cart -->


    </div>
@endsection



