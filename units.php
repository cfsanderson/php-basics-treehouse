<?php
// number in pounds that we want to convert to kilograms
$pounds = 140;
// floating point value fro the pound to kg conversion
$lb_to_kg = 0.453592;
// use the variables above to calculate pounds multiplied by the kg conversion
$kilograms = $pounds * $lb_to_kg;
// display the pounds to kilograms
echo "Weight: ";
echo $pounds;
echo " lb = ";
echo $kilograms;
echo "kg";

// number in miles we want to convert to kilograms
$miles = 2.5;
// floating point value for the mile to kilometer conversion
$mile_to_km = 1.60934;
// use the variable above to calculate miles multiplied by the km conversion
$kilometers = $miles * $mile_to_km;
// display the miles to kilometers
echo "Distance: ";
echo $miles;
echo " miles = ";
echo $kilometers;
echo "km";

/*
Practice: write more conversions for...
- [ ] miles to kilometers
- [ ] hours to minutes
- [ ] minutes to hours
- [ ] oz to grams
- [ ] beginning time to ending time (get an interval based on calling a date function)
- [ ] 
?>
