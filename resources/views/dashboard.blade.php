@extends('layouts.app')

@section('content')

<style>
    .test-button {
        border: 1px solid lightgray;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 20px;

        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ffffff+0,e5e5e5+100;White+3D */
        background: rgb(255,255,255); /* Old browsers */
        background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(229,229,229,1) 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(229,229,229,1) 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(229,229,229,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e5e5e5',GradientType=0 ); /* IE6-9 */
    }

    .test-button:hover {
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#4f85bb+60,4f85bb+100;Blue+3D+%239 */
        background: rgb(79,133,187); /* Old browsers */
        background: -moz-linear-gradient(top,  rgba(79,133,187,1) 60%, rgba(79,133,187,1) 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top,  rgba(79,133,187,1) 60%,rgba(79,133,187,1) 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom,  rgba(79,133,187,1) 60%,rgba(79,133,187,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4f85bb', endColorstr='#4f85bb',GradientType=0 ); /* IE6-9 */
    }

    .test-button:hover .test-button-heading, .test-button:hover .text-danger {
        color: white !important;
    }

    .test-button-heading {
        color: black;
        font-size: 20px;
    }

</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">Smart Grid Testing Suite Dashboard Screen</div>

                <div class="card-body" style="background-color: lightgray;">
                
                    <a href="{{asset('initialize_mdc_test')}}" style="text-decoration: none;">
                        <div class="test-button">
                            <div class="test-button-heading">MDC Interoperability Test</div>
                            <span class="badge badge-info" id="t1">Total Test Performed: 41</span>
                        </div>
                    </a>

                    <a href="{{asset('initialize_mdc_test')}}" style="text-decoration: none;">
                        <div class="test-button">
                            <div class="test-button-heading"> MDC Stress Test</div>
                            <span class="badge badge-info" id="t1">Total Test Performed: 31</span>
                        </div>
                    </a>

                    <a href="{{asset('initialize_mdc_test')}}" style="text-decoration: none;">
                        <div class="test-button">
                            <div class="test-button-heading"> MDM Integration Test</div>
                            <span class="badge badge-info" id="t1">Total Test Performed: 21</span>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
