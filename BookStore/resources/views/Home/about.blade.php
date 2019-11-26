@extends('Layouts.master')
@section('content')
    @include('Shared.navigationBar')
    <style>
        .title{
            font-weight: bold;
        }
    </style>
    <div class="container" style="margin-top: 65px">
     <div class="col-md-6">
        <img class="img-responsive" src="{{'images\ourhistoryB.jpg'}}" alt="history" />
    </div>   
        <div class="col-lg-5">
        
            <h3>OUR HISTORY</h3>

            <p align="justify">The first Quality Bookstore opened on Wells Street in Chicago’s Old Town neighborhood in 1963. It was a large, shambling, literary bookstore with creaky wood floors and dust dating back to the early 1950s. The closest thing we had to a computer was a plug-in cash register, pen and paper, and a staff that knew every book in the store by heart.
            </p>
       
            <p align="justify">Now, we’re building on our brand strengths with a vision:</palign="justify">
            <h2>“To become the company that defines global modern Book Market”</h2>
            <p align="justify">
                Quality Books has earned a reputation in Chicago for high-quality inventory and informed service. We love books. Twice our stores have been named by the Chicago Tribune as one of the 100 best things about the city. The alternative newspaper, Newcity, has recognized Quality Books author event schedule as the best in Chicago.
            </p>
            <br>
            <br>
                <ul>
                <li>
                    <h3 class="title">Get in touch</h3>
                </li>
                <li>
                    <p class="col-lg-3 title">Office :</p>
                    <p class="col-lg-8">139 Carrington Rd, Mount Albert, Auckland 1025</p>
                </li>
                <li>
                    <p class="col-lg-3 title">Phone :</p>
                    <p class="col-lg-8">(64) 021 037 2109</p>
                </li>
                <li>
                    <p class="col-lg-3 title">Email :</p>
                    <p class="col-lg-8">support@Qualitybooks.co.nz</p>
                </li>
            </ul>
        </div>
    </div>
    @include('Shared.footer')
@endsection
