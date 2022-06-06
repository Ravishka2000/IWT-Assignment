function gents()
{
    output = '<div class="brow prow1"> <h1> Gents </h1>'
    output+='<button id = "al" onclick="home()"> All </button> <button id = "gent" onclick="gents()"> Gents </button> <button id = "lady" onclick="lady()"> Ladies </button> <button id = "gent" onclick="kids()"> Kids </button>'
    output+='<select> <option> Sort </option> <option> Sort by Price </option> <option> Sort by Ratings </option> <option> Sort by Sale </option> </select> </div>'
   
    output+='<div class="pcategories"><div><a href=""><img src="images/g5.jpg"></a><a href = ""><h4>Long Sleeve Shirt</h4></a><h6>Rs.1500.00</h6></div>'
    output+='<div><a href=""><img src="images/g11.jpg"></a><a href = ""><h4>Classic Slim Fit Suit</h4></a><h6>Rs.4500.00</h6></div>'
    output+='<div><a href=""><img src="images/g3.jpg"></a><a href = ""><h4>White T-Shirt</h4></a><h6>Rs.1000.00</h6></div>'
    output+='<div><a href=""><img src="images/g2.jpg"></a><a href = ""><h4>Classic Slim Fit Suit</h4></a><h6>Rs.3500.00</h6></div>'
    output+='<div><a href=""><img src="images/g4.jpg"></a><a href = ""><h4>Short Sleeve Shirt</h4></a><h6>Rs.1200.00</h6></div></div>';
   
    output+='<div class="pcategories"><div><a href=""><img src="images/g6.jpg"></a><a href = ""><h4>Classic Slim Fit Blazer</h4></a><h6>Rs.15000.00</h6></div>'
    output+='<div><a href=""><img src="images/g7.jpg"></a><a href = ""><h4>Long Sleeve Shirt</h4></a><h6>Rs.1750.00</h6></div>'
    output+='<div><a href=""><img src="images/g8.jpg"></a><a href = ""><h4>Army Style Jacket</h4></a><h6>Rs.2000.00</h6></div>'
    output+='<div><a href=""><img src="images/g9.jpg"></a><a href = ""><h4>Long Sleeve Shirt</h4></a><h6>Rs.2500.00</h6></div>'
    output+='<div><a href=""><img src="images/g10.jpg"></a><a href = ""><h4>Classic Slim Fit Suit</h4></a><h6>Rs.4000.00</h6></div></div>';

    document.getElementById("cat").innerHTML = output;
}

function lady()
{
    output = '<div class="brow prow1"> <h1> Ladies </h1>'
    output+='<button id = "al" onclick="home()"> All </button> <button id = "gent" onclick="gents()"> Gents </button> <button id = "lady" onclick="lady()"> Ladies </button> <button id = "gent" onclick="kids()"> Kids </button>'
    output+='<select> <option> Sort </option> <option> Sort by Price </option> <option> Sort by Ratings </option> <option> Sort by Sale </option> </select> </div>'
   
    output+='<div class="pcategories"><div><a href=""><img src="images/row51.png"></a><a href = ""><h4>Jump Suit</h4></a><h6>Rs.2500.00</h6></div>'
    output+='<div><a href = ""><img src="images/l2.jpg"></a><a href = ""><h4>Crop Top</h4></a><h6>Rs.1500.00</h6></div>'
    output+='<div><a href=""><img src="images/l3.jpg"></a><a href = ""><h4>Ladies Maxi Dress</h4></a><h6>Rs.3500.00</h6></div>'
    output+='<div><a href=""><img src="images/l4.jpg"></a><a href = ""><h4>Mini Dress</h4></a><h6>Rs.1000.00</h6></div>'
    output+='<div><a href=""><img src="images/l5.jpg"></a><a href = ""><h4>Office Wear</h4></a><h6>Rs.4500.00</h6></div></div>';
  
    output+='<div class="pcategories"><div><a href=""><img src="images/l6.jpg"></a><a href = ""><h4>Mini Skirt</h4></a><h6>Rs.2500.00</h6></div>'
    output+='<div><a href = ""><img src="images/l7.jpg"></a><a href = ""><h4>Maxi Dress</h4></a><h6>Rs.3000.00</h6></div>'
    output+='<div><a href=""><img src="images/l8.jpg"></a><a href = ""><h4>Skinny Blouse</h4></a><h6>Rs.1200.00</h6></div>'
    output+='<div><a href=""><img src="images/l9.jpg"></a><a href = ""><h4>Wedding Dress</h4></a><h6>Rs.5500.00</h6></div>'
    output+='<div><a href=""><img src="images/l10.jpg"></a><a href = ""><h4>Drawstring Waist Curved Hem Dress</h4></a><h6>Rs.2800.00</h6></div></div>';
  
    document.getElementById("cat").innerHTML = output;
}

function kids()
{
    output = '<div class="brow prow1"> <h1> Kids </h1>'
    output+='<button id = "al" onclick="home()"> All </button> <button id = "gent" onclick="gents()"> Gents </button> <button id = "lady" onclick="lady()"> Ladies </button> <button id = "gent" onclick="kids()"> Kids </button>'
    output+='<select> <option> Sort </option> <option> Sort by Price </option> <option> Sort by Ratings </option> <option> Sort by Sale </option> </select> </div>'
 
    output+='<div class="pcategories"><div><a href=""><img src="images/k1.jpg"></a><a href = ""><h4>Long Sleeved Dress</h4></a><h6>Rs.1300.00</h6></div>'
    output+='<div><a href = ""><img src="images/k2.jpg"></a><a href = ""><h4>Skirt</h4></a><h6>Rs.1000.00</h6></div>'
    output+='<div><a href=""><img src="images/k3.jpg"></a><a href = ""><h4>Jumpsuit</h4></a><h6>Rs.1200.00</h6></div>'
    output+='<div><a href=""><img src="images/k4.jpg"></a><a href = ""><h4>Frock</h4></a><h6>Rs.2000.00</h6></div>'
    output+='<div><a href=""><img src="images/k5.jpg"></a><a href = ""><h4>T-Shirt</h4></a><h6>Rs.1500.00</h6></div></div>';
  
    output+='<div class="pcategories"><div><a href=""><img src="images/k6.jpg"></a><a href = ""><h4>Pyjamas</h4></a><h6>Rs.2800.00</h6></div>'
    output+='<div><a href = ""><img src="images/k7.jpg"></a><a href = ""><h4>Frock</h4></a><h6>Rs.2200.00</h6></div>'
    output+='<div><a href=""><img src="images/k8.jpg"></a><a href = ""><h4>Pyjama</h4></a><h6>Rs.2200.00</h6></div>'
    output+='<div><a href=""><img src="images/k9.jpg"></a><a href = ""><h4>Jacket</h4></a><h6>Rs.1300.00</h6></div>'
    output+='<div><a href=""><img src="images/k10.jpg"></a><a href = ""><h4>Short</h4></a><h6>Rs.990.00</h6></div></div>';

    document.getElementById("cat").innerHTML = output;
}

function home()
{
    output = '<div class="brow prow1"> <h1> All Products </h1>'
    output+='<button id = "al" onclick="home()"> All </button> <button id = "gent" onclick="gents()"> Gents </button> <button id = "lady" onclick="lady()"> Ladies </button> <button id = "gent" onclick="kids()"> Kids </button>'
    output+='<select> <option> Sort </option> <option> Sort by Price </option> <option> Sort by Ratings </option> <option> Sort by Sale </option> </select> </div>'
   
    output+='<div class="pcategories"><div><a href=""><img src="images/l6.jpg"></a><a href = ""><h4>Mini Skirt</h4></a><h6>Rs.2500.00</h6></div>'
    output+='<div><a href = ""><img src="images/l7.jpg"></a><a href = ""><h4>Maxi Dress</h4></a><h6>Rs.3000.00</h6></div>'
    output+='<div><a href=""><img src="images/l8.jpg"></a><a href = ""><h4>Skinny Blouse</h4></a><h6>Rs.1200.00</h6></div>'
    output+='<div><a href=""><img src="images/l9.jpg"></a><a href = ""><h4>Wedding Dress</h4></a><h6>Rs.5500.00</h6></div>'
    output+='<div><a href=""><img src="images/l10.jpg"></a><a href = ""><h4>Drawstring Waist Curved Hem Dress</h4></a><h6>Rs.2800.00</h6></div></div>';
   
    output+='<div class="pcategories"><div><a href=""><img src="images/k6.jpg"></a><a href = ""><h4>Pyjamas</h4></a><h6>Rs.2800.00</h6></div>'
    output+='<div><a href = ""><img src="images/k7.jpg"></a><a href = ""><h4>Frock</h4></a><h6>Rs.2200.00</h6></div>'
    output+='<div><a href=""><img src="images/k8.jpg"></a><a href = ""><h4>Pyjama</h4></a><h6>Rs.2200.00</h6></div>'
    output+='<div><a href=""><img src="images/k9.jpg"></a><a href = ""><h4>Jacket</h4></a><h6>Rs.1300.00</h6></div>'
    output+='<div><a href=""><img src="images/k10.jpg"></a><a href = ""><h4>Short</h4></a><h6>Rs.990.00</h6></div></div>';

    output+='<div class="pcategories"><div><a href=""><img src="images/g6.jpg"></a><a href = ""><h4>Classic Slim Fit Blazer</h4></a><h6>Rs.15000.00</h6></div>'
    output+='<div><a href=""><img src="images/g7.jpg"></a><a href = ""><h4>Long Sleeve Shirt</h4></a><h6>Rs.1750.00</h6></div>'
    output+='<div><a href=""><img src="images/g8.jpg"></a><a href = ""><h4>Army Style Jacket</h4></a><h6>Rs.2000.00</h6></div>'
    output+='<div><a href=""><img src="images/g9.jpg"></a><a href = ""><h4>Long Sleeve Shirt</h4></a><h6>Rs.2500.00</h6></div>'
    output+='<div><a href=""><img src="images/g10.jpg"></a><a href = ""><h4>Classic Slim Fit Suit</h4></a><h6>Rs.4000.00</h6></div></div>';

    output+='<div class="pcategories"><div><a href=""><img src="images/k1.jpg"></a><a href = ""><h4>Long Sleeved Dress</h4></a><h6>Rs.1300.00</h6></div>'
    output+='<div><a href = ""><img src="images/k2.jpg"></a><a href = ""><h4>Skirt</h4></a><h6>Rs.1000.00</h6></div>'
    output+='<div><a href=""><img src="images/k3.jpg"></a><a href = ""><h4>Jumpsuit</h4></a><h6>Rs.1200.00</h6></div>'
    output+='<div><a href=""><img src="images/k4.jpg"></a><a href = ""><h4>Frock</h4></a><h6>Rs.2000.00</h6></div>'
    output+='<div><a href=""><img src="images/k5.jpg"></a><a href = ""><h4>T-Shirt</h4></a><h6>Rs.1500.00</h6></div></div>';

    output+='<div class="pcategories"><div><a href=""><img src="images/g5.jpg"></a><a href = ""><h4>Long Sleeve Shirt</h4></a><h6>Rs.1500.00</h6></div>'
    output+='<div><a href=""><img src="images/g11.jpg"></a><a href = ""><h4>Classic Slim Fit Suit</h4></a><h6>Rs.4500.00</h6></div>'
    output+='<div><a href=""><img src="images/g3.jpg"></a><a href = ""><h4>White T-Shirt</h4></a><h6>Rs.1000.00</h6></div>'
    output+='<div><a href=""><img src="images/g2.jpg"></a><a href = ""><h4>Classic Slim Fit Suit</h4></a><h6>Rs.3500.00</h6></div>'
    output+='<div><a href=""><img src="images/g4.jpg"></a><a href = ""><h4>Short Sleeve Shirt</h4></a><h6>Rs.1200.00</h6></div></div>';

    output+='<div class="pcategories"><div><a href=""><img src="images/row51.png"></a><a href = ""><h4>Jump Suit</h4></a><h6>Rs.2500.00</h6></div>'
    output+='<div><a href = ""><img src="images/l2.jpg"></a><a href = ""><h4>Crop Top</h4></a><h6>Rs.1500.00</h6></div>'
    output+='<div><a href=""><img src="images/l3.jpg"></a><a href = ""><h4>Ladies Maxi Dress</h4></a><h6>Rs.3500.00</h6></div>'
    output+='<div><a href=""><img src="images/l4.jpg"></a><a href = ""><h4>Mini Dress</h4></a><h6>Rs.1000.00</h6></div>'
    output+='<div><a href=""><img src="images/l5.jpg"></a><a href = ""><h4>Office Wear</h4></a><h6>Rs.4500.00</h6></div></div>';

    document.getElementById("cat").innerHTML = output;
}