@extends('layouts.app')
@section('title')
Register
@endsection
@section('content')
<center>
        <h2>Registration</h2><br>
        <table>
            <tr>
                <td>Student Name:</td>
                <td>
                    <select>
                    <option   value= "Mr." > Mr. </option>
                    <option value= "Mrs."> Mrs.</option>
                    <option  value= "Ms."> Ms.</option>
                    <option  value= "Miss"> Miss   </option>
                    </select>


                    
                </td>
                <td><input type="text" name="studentname"></td> 
            </tr>

            <tr>
                <td>Father's Name </td><td></td>
                <td><input type="text" name="fathername"> </td>
            </tr>

            <tr>
                <td>Mother's Name </td><td></td>
                <td><input type="text" name="mothername"> </td>
            </tr>

            <tr>
                <td>Date of Birth</td><td></td>
                <td><input type="date" name="dateofbirth"> </td>
            </tr>
            <tr>
                <td>Gender</td><td></td>
                <td>
                    <input type="radio" id="male" name="gender"  value= "male"> Male
                    <input type="radio" id="female" name="gender" value= "female"> Female
                </td>

            </tr>

            <tr>
                <td>Email ID</td><td></td>
                <td><input type="text" name="email"> </td>
            </tr>

            <tr>
                <td>Mobile No.</td><td></td>
                <td><input type="number" name="mobile"> </td>
            </tr>

            <tr>
                <td>Address</td><td></td>
                <td><input type="textarea" name="address"> </td>
                <td><textarea rows = "4" cols = "4" name = "address"></td>
            </tr>
            <tr>
                <td>State</td><td></td>
                <td><input type="text" name="state"> </td>
            </tr>
            <tr>
                <td>City</td><td></td>
                <td><input type="text" name="city"> </td>
            </tr>
            <tr>
                <td></td><td></td>
                <td><input type="submit" name="submit" value="Submit"> </td>
            </tr>

        </table>

</center>        

@endsection