<!DOCTYPE html>
<html>
    <head>
        <title>Enter details</title>
    </head>
    <body>
        <h2>Enter details</h2>
        <form name="user_info" method="post" id="user_info" action='<?= base_url("process-user"); ?>'>
            <p>
                <label>First Name</label><br>
                <input type="text" name="first_name" id="first_name" />
            </p>
            <p>
                <label>Age</label><br>
                <input type="number" name="age" id="age" />
            </p>
            <p>
                <input type="submit" name="sumit" id="submit" value="Enter"/>
            </p>            
        </form>
    </body>  
</html>