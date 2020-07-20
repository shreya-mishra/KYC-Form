<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style.css" />
    <title>Document</title>
    <script defer src="validate.js"></script>
  
  </head>
  <body>
   
    <form name="myForm" action="databasephp/kyc.php" onsubmit="return validateForm()" method="post">
    <div class="sidenav">
      <h1 style="color: white; margin-left: 20px;">Menu</h1>
      <a href="#">Profile</a>
      <a href="#">Home</a>
      <a href="#">Contact</a>
      <a href="#">KYC</a>
    </div>

    <div>
      <h1 class="header1" style="width: 79%; margin-left: 310px;">
        Welcome To Member Panel
      </h1>
    </div>

    <div class="sec_header">
      <b>News</b>
      <b>Idea Down</b>

      <button type="button" class="button">
        <a style="color: blanchedalmond;" href="#">KYC</a>
      </button>
    </div>

    <div class="third_header">
      <b>KYC</b>

      <button type="button" class="button">
        <a href="https://www.youtube.com/watch?v=obFC93O4c5w&t=108s"
          >Video Tutorial</a
        >
      </button>
    </div>

    <div class="flexbox-container">
      <div class="flexbox-item flexbox-item1">
        <div class="name div">
          <label for="fname" class="fname" name="fname" >First Name<span class="required">*</span></label>
          <label for="lname" class="mname" name="mname">Middle Name</label>
          <label for="lname" class="lname" name="name">Last Name<span class="required">*</span></label>
        </div>

        <div class="textbox_div">
          <input type="text" class="fTname" id="fname" name="fname" required />

          <input type="text" class="mTname" id="mname" name="mname" />

          <input
            type="text"
            class="lTname"
            id="lname"
            name="lname"
            required
          /><br /><br />
        </div>

        <div class="name-div">
          <div><label for="cname" class="cname"name="cname">Company Name<span class="required">*</span></label></div>
          <br /><br />

          <div class="textbox_div">
            <input type="text" class="cTname" id="cname" name="cname" required/>
          </div>
        </div>
      </div>

      <div class="flexbox-item flexbox-item2">
        <div class="name-div">
          <div>
            <label for="cname" class="pname" name="registeredmobilenumber" required>Registered Mobile Number<span class="required">*</span></label>
            <br /><br />
            <input
              type="text"
              class="pTname"
              id="registeredmobilenumber"
              name="mobnumber"
              required
            /><br /><br />
          </div>

          <div>
            <label for="fname" class="rno" name="emailid">Registered Mail ID<span class="required">*</span></label>
            <label for="lname" class="dob"name="dob">Date Of Birth<span class="required">*</span></label>
            <label for="lname" class="pcno" name="pancard">Pan Card Number<span class="required">*</span></label>
          </div>

          <div class="textbox_div">
            <input type="text" class="fTname" id="emailid" name="emailid" required/>

            <input
              type="text"
              class="mTname"
              placeholder="DOB as per your pan card"
              id="dob"
              name="dob"
              required
            />

            <input type="text" class="lTname" id="pancard" name="pancard" required/>
          </div>
        </div>
      </div>
      
      <div class="flexbox-item flexbox-item3">
        <div>
            <label for="fname" class="pinno">Pin Code</label><span class="required">*</span>
            <label for="lname" class="district">District <span class="required">*</span></label>
            <label for="lname" class="state">State<span class="required">*</span></label>
        </div>

            <div class="textbox_div">
                <input type="text" class="fTname" id="pincode" name="pincode" />
    
                <input
                  type="text"
                  class="mTname"
                 
                  id="mname"
                  name="district"
                  required
                />
    
                <input type="text" class="lTname" id="state" name="state" required /> <br /><br />
              </div>
            
            <div>
                <label for="fname" class="fname" >City<span class="required">*</span></label>
              <label for="lname" class="address">Address<span class="required">*</span></label>
               
              </div>
    
              <div>
               
                <div class="textbox_div">
                    <input type="text" class="fTname" id="city" name="city" required />
          
                    <input type="text" class="mTname" id="address" name="address"style="width:57%;" required />
          
                   
                  </div>
              </div>
          </div>

          

      </div>
      
      <div class="flexbox-item flexbox-item4">
          <p>
              <h3><u>NOTE:</u>
            </h3>
               
                    <p> Clear self attested front scanner image is required.
                </p>
          </p>
       
      </div>
      <div class="flexbox-item flexbox-item5">
        <div class="name div">
            <label for="fname" class="fname">Adhaar Card<span class="required">*</span></label>
            <h1  style="width: 39%; margin-left: 4px;background-color: whitesmoke;">
                <input name="adharImg "type="file" />
                </h1>
            
          </div>
          <div>

           <label for="fname" class="pancard">Pan Card<span class="required">*</span></label>
              <h1  style="width: 39%;margin-left: 4px; background-color: whitesmoke;">
                <input type="file" name="panImg " />
                </h1>
            

          </div>



      </div>

      <div class="flexbox-item flexbox-item6">
        <h3><u>Steps to upload</u></h3>
        <p>
            
            <b>1.</b>Download E-Aadhar card  from <a style="color:blue;" href="https://uidai.gov.in/my-aadhaar/get-aadhaar.html">https://uidai.gov.in/my-aadhaar/get-aadhaar.html</a><br>
              
            <b>2.</b>Take a print and self attest the document.<br>

            <b>3.</b>Scan and upload the self-attest copy.
           
            
        </p>
        
      </div>


    
    </div>
    <div class="flexbox-item flexbox-item7">
    
            <h3><u>Steps to upload:</u></h3>
            
            <b>1.</b>Only jpg/jpeg/png file format are allowed.<br>
            <b>2.</b>The document must be latest and clear.
    
        
</div>
<div class="flexbox-item flexbox-item8">
  <button style="margin-left:498px;margin-top: 2px;"class="btn-text" value="Submit">Submit</button>
</div>
</form>
</body>
  </body>
</html>
