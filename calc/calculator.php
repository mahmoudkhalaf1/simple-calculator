
<!doctype html>
<html lang="en">
<head>
 <title>calculator</title>
 <!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
     <div class="row">
         <div class="col-12 text-center text-danger h1 mt-5">
         calculator
         </div>
         <div class="col-6 offset-3">
             <form action="" method="post">
                 <div class="form-group">
                   <label for="">number1</label>
                   <input type="number" name="number1" id="" class="form-control" placeholder="" aria-describedby="helpId">
                 </div>
                 <div class="form-group">
                   <label for="">number2</label>
                   <input type="number" name="number2" id="" class="form-control" placeholder="" aria-describedby="helpId">
                 </div> 
                
                 <div class="form-group">
                     <button type="submit" name="operator" value="+"  class="btn btn-success btn-md">+</button>
                     <button type="submit" name="operator" value="-"  class="btn btn-success btn-md">-</button>
                     <button type="submit" name="operator" value="/"  class="btn btn-success btn-md">/</button>
                     <button type="submit" name="operator" value="*"  class="btn btn-success btn-md">*</button>
                     <button type="submit" name="operator" value="**"  class="btn btn-success btn-md">**</button>
                     <button type="submit" name="operator" value="%"  class="btn btn-success btn-md">%</button>



                 </div>
            

                 <div class="row">
         <div class="col-8 offset-2 ">
             <ul class="alert alert-success" >
             
<?php
  
  if($_POST ){
     $number1 = $_POST['number1'];
     $number2 = $_POST['number2'];
     $operator =$_POST['operator'];
     $answer = '';
     switch ($operator) {
        case "+":
        $answer = $number1 + $number2;
        break;
        case "-":
         $answer = $number1 - $number2;
        break;
        case "*":
        $answer = $number1 * $number2;
        break;
        case "/":
        $answer = $number1 / $number2;
        break;
        case "**":
          $answer = $number1 ** $number2;
          break;
          case "%":
            $answer = $number1 % $number2;
            break;
        }
        echo 'result is =   ' . $answer;
    }

    ?>    
     </ul>
     </div>
             </form>
         </div>
     </div>
   </div>
 
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

