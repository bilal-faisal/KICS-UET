<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- CDN Links -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
      integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7"
      crossorigin="anonymous"
    />

  </head>
  <body>
      <h1 class="display-4 text-center mt-3">WAPDA Bill Calculator</h1>
      <hr>
    <form action="" method="post" class="mt-5 ms-5">
      <table>
        <tr>
          <td>
            <label>Enter Units</label>
            <input type="text" name="units" />
          </td>
          <td>
            <input type="submit" name="submit"/>
          </td>
          <td>
            <input type="button" value="Reset" id="reset"/>
          </td>
        </tr>
        <tr>
          <td>
            <textarea name="output" id="output" cols="35" rows="3">
              <?php
                if(isset($_POST['submit'])){
                  $units = (int) $_POST['units'];
                  if($units >= 0){
                    $output = 0;
                    if($units >=0 && $units<=50){
                      $output = $units * 3.50;
                    }elseif($units >50 && $units<=150){
                      $output = 50 * 3.50;
                      $output += ($units-50) * 4.00;
                    }elseif($units >150 && $units<=250){
                      $output = 50 * 3.5;
                      $output += 100 * 4.00;
                      $output += ($units-150) * 5.20;
                    }elseif($units >250){
                      $output = 50 * 3.5;
                      $output += 100 * 4.00;
                      $output += 100 * 5.20;
                      $output += ($units-250) * 6.50;
                    }
                    echo "Rs: $output";
                  }else{
                  echo "Enter positive value";
                  }
                }
              ?>
            </textarea>
          </td>
        </tr>
      </table>
    </form>

    <!-- ///////////////////////////////////////// -->
    
    <script>

        var input = document.querySelector('#reset');
        var textarea = document.querySelector('#output');

        input.addEventListener('click', function () {
          textarea.value = '';
        }, false);
      
    </script>

    <!-- CDN Links -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <!-- Downloaded file links -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- <script src="js/jquery.js"></script> -->
    <!-- <script src="js/fontawesome-all.min.js"></script> -->

  </body>
</html>
