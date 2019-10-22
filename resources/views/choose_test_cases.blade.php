@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    
                    <div class="card-header bg-secondary text-white text-center">
                        TEST ID : PITC/INTR/LB/{{ str_pad(session('test_id'),6,"0",STR_PAD_LEFT) }}
                    </div>

                    <div class="card-body" style="background-color: lightgray;">
                        <div class="row">

                            <div class="col-md-6">

                                <div class="card">
                                    <div class="card-header">Data Reading Test Cases</div>
                                    <div class="card-body">
                                    @foreach($testcases as $testcase)
                                        @if($testcase->is_read == 1)
                                        <button class="btn btn-block btn-info text-left">
                                            {{ $testcase->name }}
                                            <br>
                                            <span class="badge badge-warning">Status: Not Initialized</span>
                                        </button>
                                        @endif
                                    @endforeach
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">Data Writing Test Cases</div>
                                    <div class="card-body">
                                    @foreach($testcases as $testcase)
                                        @if($testcase->is_read == 0)
                                        <button class="btn btn-block btn-info text-left">
                                            {{ $testcase->name }}
                                            <br>
                                            <span class="badge badge-warning">Status: Not Initialized</span>
                                        </button>
                                        @endif
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection