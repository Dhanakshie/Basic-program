<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        #header {color: #FFFF00; text-align: center; background-color: rgba(0, 0, 0, 0.5);  padding: 25px; border: none;}
        #header h1 { color: #FFF8DC; text: bold 18px/18px arial; margin: 0 0 5px 0;}
    </style>
</head>
<body>
    <div id="header">
        <h1>Add Business Card Infomation</h1>
        
    </div>

    <div class="main">

        <div class="container">
            <form action="dbcon.php" method="post" class="appointment-form" id="appointment-form">
                <h2>Basic Information</h2>
                <div class="form-group-1">
                    <input type="text" name="Name" id="name" placeholder="Name" autocomplete="off" required/>
                    <div class="select-list">
                    <select name="profession">
     <option value="0">Select Profession</option>
     <option value="Agriculture">Agriculture</option>
     <option value="Plantation and Livestock">Plantation and Livestock</option>
     <option value="Art Design and Media(Visual and Performing)">Art Design and Media(Visual and Performing)</option>
     <option value="Automobile Repair and Maintenance">Automobile Repair and Maintenance</option>
     <option value="Building and Construction">Building and Construction</option>
     <option value="Electrical, Electronics and Telecommunication">Electrical, Electronics and Telecommunication</option>
     <option value="Finance Banking and Management">Finance Banking and Management</option>
     <option value="Food Technology">Food Technology</option>
     <option value="Gem and Jewellery">Gem and Jewellery</option>
     <option value="Heavy Vehicles Operations">Heavy Vehicles Operations</option>
     <option value="Hotel and Tourism">Hotel and Tourism</option>
     <option value="Human Resource Management">Human Resource Management</option>
     <option value="Information Communication and Multimedia Technology">Information Communication and Multimedia Technology</option>
     <option value="Languages">Languages</option>
     <option value="Leather and Footwear">Leather and Footwear</option>
     <option value="Marine and Nautical Science">Marine and Nautical Science</option>
     <option value="Mechatronics Technology">Mechatronics Technology</option>
     <option value="Medical and Health Science">Medical and Health Science</option>
     <option value="Metal and Light Engineering">Metal and Light Engineering</option>
     <option value="Office Management">Office Management</option>
     <option value="Personal and Community Development">Personal and Community Development</option>
     <option value="Printing and Packaging">Printing and Packaging</option>
     <option value="Refrigeration and Air Conditioning">Refrigeration and Air Conditioning</option>
     <option value="Textile and Garment">Textile and Garment</option>
     <option value="Wood Related">Wood Related</option>
     <option value="Computer Science">Computer Science</option>
     <option value="Dentistry">Dentistry</option>
     <option value="Engineering">Engineering</option>
     <option value="Hospitality">Hospitality</option>
     <option value="Human Resource Management">Human Resource Management</option>
     <option value="Law">Law</option>
     <option value="Management">Management</option>
     <option value="Marketing">Marketing</option>
     <option value="Medicine">Medicine</option>
     <option value="Nursing">Nursing</option>
     <option value="Pharmacy">Pharmacy</option>
     <option value="Quantity surveying">Quantity surveying</option> 
     <option value="Town planning">Town planning</option>
     <option value="Valuation">Valuation</option>
                        </select> 
                    <input type="email" name="Email" id="email" placeholder="E-mail" autocomplete="off" required />
                    <input type="number" name="phone_number" id="phone_number" placeholder="Phone number" autocomplete="off" required />
                    <input type="website" name="Website" id="website" placeholder="Web site" autocomplete="off" required />
                         
                <div class="form-group-2">
                    <h3>Billing Address:</h3>
                    <input type="text" name="Billing_name" id="Billing_name" placeholder="Billing_name" autocomplete="off" required />
                    <input type="text" name="Billing_Number" id="Billing_Number" placeholder="Billing_Number" autocomplete="off" required />
                    <input type="text" name="Billing_street" id="Billing_street" placeholder="Billing_street" autocomplete="off" required />
                    <input type="text" name="Billing_City" id="Billing_City" placeholder="Billing_City" autocomplete="off" required />
                </div>
                <div class="form-submit">
                    <input type="submit" name="" class="submit"/>
                    <input type="reset" name="reset" class="reset" value="Clear" />
                </div>
            </form>
        </div>

    </div>

</body>
</html>