<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
  <?php include('layout/sidebar.php'); ?>
                            <div class="form-group mt-4">
                                <label class="form-label" for="password">Password 
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                            </div>
                            <button type="submit" name="login" class="btn btn-primary btn-lg w-100 mt-4">Login</button>
                            <div class="mt-4 text-center">
                                <p>
                                    Don't have an Account? <a href="register.html" class="fw-semibold">Register</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>