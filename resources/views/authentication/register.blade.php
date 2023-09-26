<html>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small style="color: white;">Step 1</small></div>
            <div class="step-col"><small style="color: white;">Step 2</small></div>
            <div class="step-col"><small style="color: white;">Step 3</small></div>

        </div>
        <form action="/post-register" method="post">
            @csrf
            <div class="step" id="step1">
                <h3>PERSONAL DATA</h3>
                <input type="text" name="fname" placeholder="First Name" required>
                <input type="text" name="lname" placeholder="Last Name" required>
                <select name="gender" id="">
                    <option disbaled value="">Select Gender</option>
                    <option value="1">Male</option>
                    <option value="0">Female</option>
                </select>
                
                <input type="date" name="dob" placeholder="Date of Birth" required>
                <input type="text" name="username" placeholder="Username" required>
                <div class="btn-box">
                    <button type="button" id="Next1">Next</button>
                </div>
                <p style="margin-top: -26px;margin-left: 20px;">Already have an account? Please <a href="/login">Sign In</a></p>
            </div>

            <div class="step" id="step2">
                <h3>CONTACT & SECURITY</h3>
                <input type="text" name="email" placeholder="Email" required>
                <input type="text" name="phone" placeholder="Phone Number" required>
                <input type="text" name="address" placeholder="Address" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="password_2" placeholder="Confirm Password" required>
                <div class="btn-box">
                    <button type="button" id="Previous1">Previous</button>
                    <button type="button" id="Next2">Next</button>
                </div>
                <p style="margin-left: 20px;">Already have an account? Please <a href="/login">Sign In</a></p>
            </div>

            <div class="step" id="step3">
                <h3>History</h3>
                <select name="marital_status" id="">
                    <option disbaled value="">Marital Status?</option>
                    <option value="1">Married</option>
                    <option value="0">Single</option>
                </select>
                <select name="taking_medicine" id="">
                    <option disbaled value="">Taking any medicine?</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select> 
                <select name="is_alcoholic" id="">
                    <option disbaled value="">Alcohol Consumption-</option>
                    <option value="0">I don't drink</option>
                    <option value="1">1/2 Glass/Day</option>
                    <option value="2">3/4 Glass/Day</option>
                    <option value="3">More than 4 Glass/Day</option>
                </select>
                <select name="is_smoker" id="">
                    <option disbaled value="">Are you chain smoker</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select> 
                <input type="text" name="comments" placeholder="Include other comments regarding your Medical History" required>
                <div class="btn-box">
                    <button type="button" id="Previous2">Previous</button>
                    <button type="submit" id="submit">Submit</button>
                </div>
                <p style="margin-left: 20px;">Already have an account? Please <a href="/login">Sign In</a></p>
            </div>
        </form>


    </div>

    <script src="./scripts.js"></script>
</body>

</html>