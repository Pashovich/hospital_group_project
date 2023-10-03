
@extends('layouts.app')

@section('title', 'Login')
@section('content')
    <div class="container">
        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small style="color: white;">Step 1</small></div>
            <div class="step-col"><small style="color: white;">Step 2</small></div>
            <div class="step-col"><small style="color: white;">Step 3</small></div>

        </div>
        <form action="{{route('post-register')}}" method="post">
            @csrf
            <div class="step" id="step1">
                <h3>PERSONAL DATA</h3>
                <input type="text" name="fname" placeholder="First Name" required>
                <input type="text" name="lname" placeholder="Last Name" required>
                <input type="date" name="dob" placeholder="Date of Birth" required>
                <select class="form-select" name="gender" id="" required>
                    <option disbaled value="">Select Gender</option>
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                </select>
                
            </div>

            <div class="step" id="step2">
                <h3>CONTACT & SECURITY</h3>
                <input type="text" name="email" placeholder="Email" required>
                <input type="text" name="phone" placeholder="Phone Number" required>
                <input type="text" name="address" placeholder="Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_2" placeholder="Confirm Password" required>

            </div>

            <div class="step" id="step3">
                <h3>History</h3>
                <select class="form-select" name="marital_status" id="" required>
                    <option disbaled value="">Marital Status?</option>
                    <option value="1">Married</option>
                    <option value="0">Single</option>
                </select>
                <select class="form-select" name="taking_medicine" id="" required>
                    <option disbaled value="">Taking any medicine?</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select> 
                <select class="form-select" name="is_alcoholic" id="" required>
                    <option disbaled value="">Alcohol Consumption-</option>
                    <option value="0">I don't drink</option>
                    <option value="1">1/2 Glass/Day</option>
                    <option value="2">3/4 Glass/Day</option>
                    <option value="3">More than 4 Glass/Day</option>
                </select>
                <select class="form-select" name="is_smoker" id="" required>
                    <option disbaled value="">Are you chain smoker</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select> 
                <textarea name="comments" placeholder="Include other comments regarding your Medical History" required></textarea>
                <div class="btn-box">
                    <button type="button" id="Previous2">Previous</button>
                    <button type="submit" id="submit">Submit</button>
                </div>
                <br>
                <p style="margin-top: -26px;margin-left: 20px;">Already have an account? Please <a href="{{route('login')}}">Sign In</a></p>
            </div>
            
        </form>
        


    </div>

@endsection
