@extends('welcome')

@section('content')



<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  /* background-color: #f2f2f2; */
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Driver Information</h2>
<p>This page is only used for issuing a new driver's license. There are thirteen fields on this page. This information is essential to issue a driver's license. The user is bound to fulfill all of these fields. It is not possible to save this information without single field information. So the user has to fulfill all this field information.</p>

<div class="container">
  <form action="/action_page.php">

    <div class="row">
      <div class="col-25">
        <label for="lnumber">License Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="lnumber" name="lnumber" placeholder="Your license number.." required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="dname">Driver’s name</label>
      </div>
      <div class="col-75">
        <input type="text" id="dname" name="dname" placeholder="Your name.."required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="daddress">Driver’s address</label>
      </div>
      <div class="col-75">
        <textarea id="daddress" name="daddress" placeholder="Your address.." style="height:50px" required></textarea>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="dbirthday">Date of birth</label>
      </div>
      <div class="col-75">
        <input type="date" id="dbirthday" name="dbirthday" required>
        <!-- <input type="text" id="lname" name="lastname" placeholder="Your last name.."> -->
        <!-- <input type="date" id="myDate" value="2014-02-09"> -->
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="doccupation">Driver’s Occupation</label>
      </div>
      <div class="col-75">
        <input type="text" id="doccupation" name="doccupation" placeholder="Your occupation.." required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="dcompany">Driver’s Company Name </label>
      </div>
      <div class="col-75">
        <input type="text" id="dcompany" name="dcompany" placeholder="Your company name.." required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="dcontract">Contact number </label>
      </div>
      <div class="col-75">
        <input type="text" id="dcontract" name="dcontract" placeholder="Your Contact number.." required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="ldate">License issuing date </label>
      </div>
      <div class="col-75">
        <input type="text" id="ldate" name="ldate" placeholder="Your license issuing date.." required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="ltype">License Type </label>
      </div>
      <div class="col-75">
        <input type="text" id="ltype" name="ltype" placeholder="License Type.." required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="permitted">Permitted Vehicle </label>
      </div>
      <div class="col-75">
        <input type="text" id="permitted" name="permitted" placeholder="Your permitted number.." required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="validity">Validity</label>
      </div>
      <div class="col-75">
        <input type="date" id="validity" name="validity" required>
        
      </div>
    </div>
  

    <div class="row">
      <div class="col-25">
        <label for="gender">Gender</label>
      </div>
      <div class="col-75">
        <select id="gender" name="gender" required>
        <option value="australia">Gender:</option>
          <option value="australia">Male</option>
          <option value="canada">Female</option>
          <option value="usa">Other</option>
        </select>
      </div> 
    </div>

    <div class="row">
      <div class="col-25">
        <label for="national">National Status</label>
      </div>
      <div class="col-75">
        <select id="national" name="national" required>
        <option value="bangladesh">Bangladesh</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">Usa</option>
        </select>
      </div>

    
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>


@endsection