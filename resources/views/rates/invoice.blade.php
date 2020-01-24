@extends('layouts.app')
@push('styles')
    <style type="text/css">
        .tg  {border-collapse:collapse;border-spacing:0;border-color:#9ABAD9;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#9ABAD9;color:#444;background-color:#EBF5FF;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#9ABAD9;color:#fff;background-color:#409cff;}
        .tg .tg-73oq{border-color:#000000;text-align:left;vertical-align:top}
    </style>
@endpush
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($resultArray as $array)
                        {{$array['company']}}
                            <table class="tg">
                                <tr>
                                    <th class="tg-73oq">Employee ID</th>
                                    <th class="tg-73oq">Number of Hours</th>
                                    <th class="tg-73oq">Unit Price</th>
                                    <th class="tg-73oq">Cost</th>
                                </tr>
                                @foreach($array as $innerArray)
                                    <tr>
                                        <td class="tg-0lax">{{$innerArray['employee_id']}}</td>
                                        <td class="tg-0lax">{{$innerArray['number_of_hours']}}</td>
                                        <td class="tg-0lax">{{$innerArray['unit_price']}}</td>
                                        <td class="tg-0lax">{{$innerArray['cost']}}</td>
                                    </tr>
                                @endforeach
                            </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
