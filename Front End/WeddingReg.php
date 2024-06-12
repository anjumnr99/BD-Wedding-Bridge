<?php
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Host Wedding</title>
    <link rel="icon" href="../images/Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.6.0/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="../style.css">

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body class="FormPage">
  <?php
  include("header.php")
  ?>

      <!-- Form Create -->

        <section class="container my-10 w-50 text-light p-2 regForm ">
        <form class="row g-3 p-3" id="WedRegForm" action="../Back End/WedReg.php" method="post" enctype="multipart/form-data">
        
              <div class="col-md-6">
                  <label for="wedding_id" class="form-label">Wedding Registration ID</label>
                  <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" id="wedding_id" name="wedding_id"  aria-describedby="inputGroupPrepend2" required>
                  </div>
                </div>

              <div class="col-md-6">
                <label for="price" class="form-label">Per Person Entry Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
              </div>
          
          <div class="col-md-12 text-center">
            <h1 class="text-black fw-light" style="font-size: 1.5rem; width: auto; height: 30px;">Groom Information</h1>
            <hr style="width: 100%; border: 2px solid #000000;">
          </div>
            <div class="col-md-4">
                <label for="G_first_name" class="form-label">First name</label>
                <input type="text" class="form-control" id="G_first_name" name="G_first_name" required>
              </div>
              <div class="col-md-4">
                <label for="G_last_name" class="form-label">Last name</label>
                <input type="text" class="form-control" id="G_last_name" name="G_last_name" required>
              </div>
              <!-- <div class="col-md-4">
                <label for="GroomUsername" class="form-label">Username</label>
                <div class="input-group">
                  <span class="input-group-text" id="inputGroupPrepend2">@</span>
                  <input type="text" class="form-control" id="GroomUsername" name="GroomUsername" aria-describedby="inputGroupPrepend2" required>
                </div>
              </div> -->
            <div class="col-md-6">
              <label for="inputEmailG" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmailG" name="inputEmailG" required>
            </div>
            <div class="col-md-6">
              <label for="inputContactG" class="form-label">Contact</label>
              <input type="number" class="form-control" id="inputContactG" name="inputContactG" required>
            </div>
            
            
            <div class="col-md-12 text-center pt-3">
              <h1 class="text-black fw-light" style="font-size: 1.5rem; width: auto; height: 30px;">Bride Information</h1>
              <hr style="width: 100%; border: 2px solid #000000;">
            </div>
              <div class="col-md-4">
                  <label for="B_first_name" class="form-label">First name</label>
                  <input type="text" class="form-control" id="B_first_name" name="B_first_name" required>
                </div>
                <div class="col-md-4">
                  <label for="B_last_name" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="B_last_name" name="B_last_name" required>
                </div>
                <!-- <div class="col-md-4">
                  <label for="BrideUsername" class="form-label">Username</label>
                  <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" id="BrideUsername" name="BrideUsername"  aria-describedby="inputGroupPrepend2" required>
                  </div>
                </div> -->
              <div class="col-md-6">
                <label for="inputEmailB" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmailB" name="inputEmailB" required>
              </div>
              <div class="col-md-6">
                <label for="inputContactB" class="form-label">Contact</label>
                <input type="number" class="form-control" id="inputContactB" name="inputContactB" required>
              </div>
          

          <div class="col-md-12 text-center pt-3">
            <h1 class="text-black fw-light" style="font-size: 1.5rem; width: auto; height: 30px;">Wedding Information</h1>
            <hr style="width: 100%; border: 2px solid #000000;">
          </div>

            <div class="col-md-12">
                <label for="wedding_image">Wedding Image:</label>
                <input type="file" id="wedding_image" name="wedding_image" required><br>
              </div>

              <div class="col-md-12">
                <label for="WedLocation" class="form-label">Wedding Location</label>
                <input type="text" class="form-control" id="WedLocation" name="WedLocation" required>
              </div>
              <div class="col-md-6">
                <label for="StartDate" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="StartDate" name="StartDate"  required>
              </div>
              <div class="col-md-6">
                <label for="EndDate" class="form-label">End Date</label>
                <input type="date" class="form-control" id="EndDate" name="EndDate" required>
              </div>
              
            <div class="col-md-12">
              <label for="program_list" class="form-label">Wedding Day Program List</label>
              <textarea class="form-control" id="program_list" name="program_list" required></textarea>
            </div>

            <div class="col-md-12">
              <label for="Food_list" class="form-label">Wedding Food</label>
              <textarea class="form-control" id="Food_list" name="Food_list" required></textarea>
            </div>

            <div class="col-md-12">
              <label for="Accommodation" class="form-label">Accommodation</label>
              <textarea class="form-control" id="Accommodation" name="Accommodation" required></textarea>
              </div>
          
          <div class="col-md-12 text-center pt-3">
            <h1 class="text-black fw-light" style="font-size: 1.5rem; width: auto; height: 30px;">Payment Receiving Information</h1>
            <hr style="width: 100%; border: 2px solid #000000;">
          </div>


          <div class="col-md-6">
            <label for="bank_name" class="form-label">Bank Name</label>
            <select class="form-select" aria-label="bank_name" id="bank_name" name="bank_name" required>
              <option selected>Select Bank</option>
              <option value="Standard Chartered">Standard Chartered</option>
              <option value="Eastern Bank PLC">Eastern Bank PLC</option>
              <option value="Bank Asia PLC">Bank Asia PLC</option>
              <option value="Brac Bank">Brac Bank</option>
            </select>
          </div>

          <div class="col-md-6">
                <label for="acc_name" class="form-label">Account Name</label>
                <input type="text" class="form-control" id="acc_name" name="acc_name" required>
              </div>
              <div class="col-md-12">
                <label for="acc_no" class="form-label">Account Number</label>
                <input type="text" class="form-control" id="acc_no" name="acc_no" required>
              </div>

              <div class="col-md-6">
                <label for="bb_name" class="form-label">Branch Name</label>
                <input type="text" class="form-control" id="bb_name" name="bb_name" required>
              </div>

            <div class="col-md-6">
              <label for="br_no" class="form-label">Routing Number</label>
              <input type="number" class="form-control" id="br_no" name="br_no" required>
            </div>

            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn btn-primary">Confirm Registration</button>
            </div>

          </form>
       </section>
      </div>
      <?php
      include("footer.php")
      ?>
</body>
</html>