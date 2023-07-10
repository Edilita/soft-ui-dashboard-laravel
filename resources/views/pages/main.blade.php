@extends('layouts.user_type.member')

@section('content')
<div class="row">
    <div class="col-12 col-xl-6 mb-5">
        <h5>My Policies</h5>
        <div class="table-responsive">
            <table class="table caption-top">
                <tbody class="small">
                    <tr class="border-bottom">
                        <th scope="col">Reference #</th>
                        <th scope="col">Plan Name</th>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="text-wrap text-center p-4">
                                You have no insurance plan yet,
                                <a class="text-nowrap" href="https://m.me/futurevalueinnovators?text=I+want+to+get+a+new+plan">click here to get one</a>
                            </div>
                        </td>
                    </tr>
                    <!--
                    <tr>
                        <th scope="row">4521-213241</th>
                        <td>Family Provider</td>
                    </tr>
                    -->
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-12 col-xl-6">
        <h5>Request Support</h5>
        <ul class="list-group mt-4">
            <li class="list-group-item">
                <a href="https://m.me/futurevalueinnovators?text=What+is+my+active+plan+status?" target="_msgr" class="nav-link">Active Plan Status</a>
            </li>
            <li class="list-group-item">
                <a href="https://m.me/futurevalueinnovators?text=What+is+the+due+date+of+my+active+plan?" target="_msgr" class="nav-link">Due Date Of My Active Plan</a>
            </li>
            <li class="list-group-item">
                <a href="https://m.me/futurevalueinnovators?text=I+want+to+get+a+new+plan" target="_msgr" class="nav-link">New Insurance Plan</a>
            </li>
            <li class="list-group-item">
                <a href="https://m.me/futurevalueinnovators?text=Request+call+back" target="_msgr" class="nav-link">Request Call Back</a>
            </li>
        </ul>
    </div>
</div>



@endsection