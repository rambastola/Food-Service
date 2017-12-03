<?php 

include 'top.php'; 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>FIRE & ICE MENU FORM</title>
    
    <link rel="stylesheet" href="css/entry.css" type="text/css" media="screen" />
    

  </head>
  
  
  <main>
      <form class="form-basic" method="post" action="takein.php" enctype="multipart/form-data" id="houseform">

            <div class="form-title-row">
                <h1>Fill in Fire & Ice Menu Info</h1>
            </div>
            
          <fieldset>
                <legend>Menu Item 1:</legend>
            <div class="form-row">
                    <label>
                    <span>Food Name</span>
                    <input type="text" name="name" required autofocus>
                    </label>
            </div>
                
                <div class="form-row">
                    <label>  
                    <span>Description</span>
                    <input type="text" name="about" required autofocus>
                    </label>
                </div>
                
                <div class="form-row">
                        <label>
                    <span>Calories</span>
                    <input type="number" name="cal" required>
                        </label>
                </div>
                
                <div class="form-row">
                <label>
                    <span>Food Image</span>
                    <input type="file" name="pics[]" accept="image/*" id="pics"  required>                   
                </label>
                </div>
                    </fieldset>
          
          <br>
          
 
            <div class="form-row">
                <button type="submit">Submit Menu</button>
            </div>
            
            <div class="form-row">
                <button type="reset" onclick="removeAll()" style="width: 9.5em;  height: 3em;">Clear Entry</button>
            </div>

        </form>
      

  </main>
  
</html>
<?php include 'bottom.php'; ?>

