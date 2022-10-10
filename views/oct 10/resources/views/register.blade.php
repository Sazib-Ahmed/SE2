@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')
<center>
        <h2>Registration of user: </h2><br>
        <form action="/register" methos="post">
            {{csrf_field()}}
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
                @if($errors->has('name'))
                {{$errors->first('name')}}
                @endif
                
            </tr>

            <tr>
                <td>Date of Birth</td>
                <td><input type="date" name="dateofbirth"> </td>
            </tr>

            <tr>
                <td>Gender</td>
                <td>
                    <input type="radio" id="male" name="gender"  value= "male"> Male
                    <input type="radio" id="female" name="gender" value= "female"> Female
                </td>

            </tr>

            <tr>
                <td>Email ID</td>
                <td><input type="text" name="email" > </td>
            </tr>

            <tr>
                <td>Mobile No.</td>
                <td><input type="number" name="mobile"> </td>
            </tr>

            <tr>
                <td>Address</td>
                <td>
                <textarea placeholder='Enter address...' name="address" rows="4" cols="25"></textarea>
                </td>
            </tr>

        </table>
        <input type="submit" name="submit" value="Submit">
</center>        

@endsection