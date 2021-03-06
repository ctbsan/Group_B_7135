<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR?xhtmll/DTD/xhtmll-strict.dtd">

<!--
   | -Page for recruiters to create new job postings
   | -Buttons that lead to this page will only be available for recruiters
   | -Unfinished
-->

<html xmlns="http://ww.w3.org/1999/xhtml" lang="en" xml:lang="en">
     <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link href="https://fonts.googleapis.com/css?family=Work+Sans: 30%"  />
            <link type="text/css" rel="stylesheet" href="style.css"/>
            <title>Job Posting Page</title>
        </head>
<body>

<h1>Input Job Attributes </h1>
<!-- used for testing on w3schools.com
     The form can be found at https://www.w3schools.com/tags/tryit.asp?filename=tryhtml_input_value
-->
<form action="">  
  <label for="JobName">Job Name:</label>
  <input type="text" id="JobName" name="JobName" /><br/><br/>
  
  <label for="Description">Job Description:</label>
  <input type="text" id="Description" name="Description" /><br/><br/>
  
  <label for="CompanyID">Company ID:</label>
  <input type="text" id="CompanyID" name="CompanyID" /><br/><br/>  
  
  <label for="Open_Date">Open Date:</label>
  <input type="text" id="Open_Date" name="Open_Date" /><br/><br/>
  
  <label for="Close_Date">Close Date:</label>
  <input type="text" id="Close_date" name="Close_date" /><br/><br/>
  
  <label for="Number_available">Number of Openings:</label>
  <input type="text" id="Number_available" name="Number_available" /><br/><br/>
  
  <label for="Qualification">Qualification:</label>
  <input type="text" id="Qualification" name="Qualification" /><br/><br/>
  
  <label for="SalaryRange">Salary Range:</label>
  <input type="text" id="SalaryRange" name="SalaryRange" /><br/><br/>
  
  <label for="JobType">Job Type:</label>
  <input type="text" id="JobType" name="JobType" /><br/><br/>
  
  <label for="Location">Location:</label>
  <input type="text" id="Location" name="Location" /><br/><br/>
    
  <label for="Benefits">Benefits:</label>
  <input type="text" id="Benefits" name="Benefits" ><br><br>
  
  <label for="Questions">Questions:</label>
  <input type="text" id="Questions" name="Questions" /><br/><br/>
  
  <input type="submit" value="Submit"/>
</form>

</body>
</html>
