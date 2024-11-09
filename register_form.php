<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Registration Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="jquery-ui.min.css">
</head>
<style>
  .card-registration .select-input.form-control[readonly]:not([disabled]) {
    font-size: 1rem;
    line-height: 2.15;
    padding-left: .75em;
    padding-right: .75em;
  }

  .card-registration .select-arrow {
    top: 13px;
  }

  .form-label,
  .form-check-label,
  h6 {
    font-size: 20px;
    font-family: 'Times New Roman', Times, serif;
  }

  .error {
    color: red;
    font-style: italic;
  }
</style>

<body>
  <section class="h-100 bg-dark">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card card-registration">
            <div class="row g-0">
              <div class="col-xl-6 d-none d-xl-block">
                <img src="Images/reg.jpg" alt="Sample photo" class="img-fluid"
                  style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
              </div>
              <div class="col-xl-6 p-3">
                <form action="register_form.php" method="POST" id="register">
                  <div class="card-body p-md-5 text-black">
                    <h3 class="mb-5 text-uppercase">User Registration form</h3>

                    <div class="row">
                      <div class="col-md-12 mb-4">
                        <div data-mdb-input-init class="form-outline">
                          <label class="form-label" for="username">User Name </label>
                          <input type="text" id="username" class="form-control form-control-lg" name="username" required />
                        </div>
                      </div>
                      <div class="col-md-12 mb-4">
                        <div data-mdb-input-init class="form-outline">
                          <label class="form-label" for="email">Email</label>
                          <input type="email" id="email" class="form-control form-control-lg" name="email" required />
                        </div>
                      </div>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label" for="contact">Contact</label>
                      <input type="tel" id="contact" class="form-control form-control-lg" name="contact" required />
                    </div>

                    <label class="form-label" for="address">Address</label>
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="text" id="address" class="form-control form-control-lg" name="address" required />
                    </div>

                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                      <h6 class="mb-0 me-4"> Gender: </h6>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" required />
                        <label class="form-check-label" for="femaleGender">Female</label>
                      </div>

                      <div class="form-check form-check-inline mb-0 me-4">
                        <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" />
                        <label class="form-check-label" for="maleGender">Male</label>
                      </div>

                      <div class="form-check form-check-inline mb-0">
                        <input class="form-check-input" type="radio" name="gender" id="otherGender" value="other" />
                        <label class="form-check-label" for="otherGender">Other</label>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12 mb-4">
                        <div data-mdb-input-init class="form-outline">
                          <label class="form-label" for="password">Password </label>
                          <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                        </div>
                      </div>
                      <div class="col-md-12 mb-4">
                        <div data-mdb-input-init class="form-outline">
                          <label class="form-label" for="confirmpassword">Confirm Password</label>
                          <input type="password" id="confirmpassword" name="confirmpassword" class="form-control form-control-lg" required />
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12 mb-4">
                      <div data-mdb-input-init class="form-outline">
                        <label class="form-label" for="profilephoto">Profile Photo</label>
                        <input type="file" id="profilephoto" name="profilephoto" class="form-control form-control-lg" />
                      </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-evenly pt-3">
                    <button type="reset" class="btn btn-light btn-lg">Reset All</button>
                    <button type="submit" name="submit" class="btn btn-outline-secondary btn-lg ms-2">Submit Form</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="register_form.js"></script>
</body>

</html>
