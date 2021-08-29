<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Task</title>
</head>

<body>
    <form auto_complete="off" action="info.php" method="POST">
    <div class="card">
        <h2 class="card-title text-center">Register</h2>
        <p><span class="error">* Required Field</span></p>
        <div class="card-body">

                <div class="form-group">
                    <Label class="Label-title">First Name</Label>
                    <input type="text" class="form-control" id="name" required="required" name="fname"
                        placeholder="Name">
                  

                </div>
                <div class="form-group">
                    <Label class="Label-title">Last Name</Label> <input type="text" class="form-control" id="lname"
                         name="lname" placeholder="Last Name" required="required">
                
                </div>
                <div class="form-group">
                    <Label class="Label-title">Email Addr</Label>
                    <input type="email" class="form-control" id="email" required="required"  name="email"
                        placeholder=" Email">
                    
                </div>
                <div class="form-group">
                    <Label class="Label-title">Date of Birth</Label><input type="date" required="required" class="form-control" id="date" 
                        name="dob">
                        
                      
                </div>
                <div class="form-group">
                    <Label class="Label-title">Mobile No. </Label><input type="tel" required="required" class="form-control" id="number" 
                        name="mobile" placeholder="Mobile number">
                        
                </div>
                <div class="form-group">
                    <Label class="Label-title">Designation</Label><input type="text" class="form-control"
                        id="Designation" name="designation" placeholder="Designation">
                </div>
                <div class="class-gender">
                    <Label class="titlegender">Gender </Label>
                    <input type="radio" name="gender"value="female">Female
                    <input type="radio" name="gender"value="male">Male
                    <input type="radio" name="gender"value="other">Other
                    
                </div>
                <div class="class-checkbox">
                    <Label class="title-hobby">Hobbies</Label><br>
                    <div class="hob"><input type="checkbox" id="coding" name="hobies[]" value="coding">
                        <label for="coding"> Coding</label>
                        <input type="checkbox" id="reading" name="reading" value="hobies[]">
                        <label for="reading"> Reading</label>
                        <input type="checkbox" id="movie" name="movie" value="hobies[]">
                        <label for="movie"> Watching Movie</label>
                        <input type="checkbox" id="sport" name="sport" value="hobies[]">
                        <label for="sport"> I Love Sport</label>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="link"><a  href="show.php">Show Data</a> </div>
                    <button type="submit" class="btn btn-primary" name="submit" value="Submit" >Create Account</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>