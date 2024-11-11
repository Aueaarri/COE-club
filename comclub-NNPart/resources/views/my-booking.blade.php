@extends('layout')
@section('content')
    
    <div class = "body">
        <h1>My Booking</h1>
        <table class = "table-status">
            <tr class="head">
                <th>DATE</th>
                <th>NAME</th>
                <th>ROOM</th>
                <th>TIME</th>
                <th>STATUS</th>
                <th>CANCEL</th>
            </tr>
            <tr>
                <td>11-11-2024</td>
                <td>Katie</td>
                <td>ROOM A</td>
                <td>10.00-12.00</td>
                <td>
                    <button type="button" class="btn-success">Confirmed</button>
                </td>
                <td>
                    <button type="button" class="btn-cancel">Cancel</button>
                </td>
            </tr>
        </table>
    </div>
@endsection
