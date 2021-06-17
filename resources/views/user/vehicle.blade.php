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

<h2>Vehicle Information</h2>
<p> This page is only used for issuing new vehicle information. There are thirteen fields on this page. This information is essential to issue a car license. The user is bound to fulfill all thirteen fields. It is not possible to save this information without single field information. So the user has to fulfill all thirteen field information.</p>

<div class="container">
  <form action="{{ route('store.vehicle')}}" method="post">
  @csrf
    <div class="row">
      <div class="col-25">
        <label for="fname">Vehicle number</label>
      </div>
      <div class="col-75">
        <input type="text" id="vname" name="vname" placeholder="Your Vehicle number.." required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Vehicle Owner</label>
      </div>
      <div class="col-75">
        <input type="text" id="voname" name="voname" placeholder="Your name.."required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="subject">Owner’s address</label>
      </div>
      <div class="col-75">
        <textarea id="voaddress" name="voaddress" placeholder="Your address.." style="height:50px" required></textarea>
      </div>
    </div>


    <!-- <div class="row">
      <div class="col-25">
        <label for="lname">Date of birth</label>
      </div>
      <div class="col-75">
        <input type="date" id="vobirthday" name="vobirthday" required>
        
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <input type="date" id="myDate" value="2014-02-09">

      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Driver’s Occupation</label>
      </div>
      <div class="col-75">
        <input type="text" id="voccupation" name="voccupation" placeholder="Your occupation.." required>
      </div>
    </div> -->

    <div class="row">
      <div class="col-25">
        <label for="lname">Contact number </label>
      </div>
      <div class="col-75">
        <input type="text" id="vcontract" name="vcontract" placeholder="Your Contact number.." required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="lname">Insurance company </label>
      </div>
      <div class="col-75">
        <input type="text" id="icompany" name="icompany" placeholder="Your company name.." required>
      </div>
    </div>

   

    <div class="row">
      <div class="col-25">
        <label for="lname">License issuing date </label>
      </div>
      <div class="col-75">
        <input type="date" id="lisssu_date" name="lisssu_date" placeholder="Your license issuing date.." required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="lname">Vehicle  Type </label>
      </div>
      <div class="col-75">
        <input type="text" id="vtype" name="vtype" placeholder="Vehicle type Type.." required>
      </div>
    </div>


    <div class="row">
      <div class="col-25">
        <label for="lname">Permitted Vehicle </label>
      </div>
      <div class="col-75">
        <input type="text" id="pervehicle" name="pervehicle" placeholder="Your permitted number.." required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Validity</label>
      </div>
      <div class="col-75">
        <input type="date" id="Validity" name="Validity" required>
        
      </div>
    </div>
  


    <div class="row">
      <div class="col-25">
        <label for="bfitness">Body fitness</label>
      </div>
      <div class="col-75">
        <select id="bfitness" name="bfitness" required>
        <option >Body fitness:</option>
          <option >Yes</option>
          <option >No</option>
          <!-- <option value="usa">All</option> -->
        </select>
      </div> 
    </div>




    <div class="row">
      <div class="col-25">
        <label for="rpremit">Road permit</label>
      </div>
      <div class="col-75">
        <select id="rpremit" name="rpremit" required>
        <option value="#">Road permit:</option>
          <option value="Yes">Yes</option>
          <option value="No">No</option>
          <!-- <option value="usa">All</option> -->
        </select>
      </div> 
    </div>

    

    
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>



@endsection