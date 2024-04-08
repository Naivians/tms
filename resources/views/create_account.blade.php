<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="contact-container">
        <h1 class="text-center mb-4 mt-5">Create your account here!</h1>
        <form class="row">
            <div class="mb-3 col-lg-6">
                <label  class="form-label text-secondary">Employee Name</label>
                <input type="text" class="form-control"  required
                    placeholder="eg. Juan Dela Cruz">
            </div>

            <div class="mb-3 col-lg-6">
                <label class="form-label text-secondary">Employee #</label>
                <input type="text" class="form-control" required placeholder="EMP-00123">
            </div>

            <div class="mb-3 col-lg-6">
                <label class="form-label text-secondary">DingTok #</label>
                <input type="text" class="form-control" required placeholder="EMP-00123">
            </div>

            <div class="mb-3 col-lg-6">
                <label for="exampleInputEmail1" class="form-label text-secondary">DingTok Email</label>
                <input type="email" class="form-control" required id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>

            <div class="col-lg-12 mb-3">
                <select class="form-select form-select-md">
                    <option selected>Office Location</option>
                    <option value="Bulacan">Bulacan</option>
                    <option value="Ortigas">Ortigas</option>
                    <option value="BGC">BGC</option>
                </select>
            </div>

            <div class="mb-3 col-lg-6 mb-3">
                <label class="form-label text-secondary">Company</label>
                <input type="text" class="form-control" required placeholder="Vessel">
            </div>

            <div class="mb-3 col-lg-6 mb-3">
                <label class="form-label text-secondary">Department</label>
                <input type="text" class="form-control" required placeholder="IT">
            </div>

            <div class="mb-3 col-lg-6">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3 col-lg-6">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Show Password
                    </label>
                </div>
            </div>
            <div class="col-lg-6 mt-md-3">
                <button type="submit" class="btn btn-primary float-end">Register</button>
            </div>
            <div class="col-lg-6 mt-md-3">
                <a href="{{ route('Logins.redirectToLogin') }}" class="text-decoration-none btn btn-outline-primary" id="backBtn">Back</a>
            </div>

            <div class="mb-3 mt-4">
                <p class="text-center">Already have account? <a href="{{ route('Logins.redirectToLogin') }}">Sign in here!</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
