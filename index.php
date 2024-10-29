<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        html {
            scroll-behavior: smooth;
        }


        .text {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 6em;
            text-transform: uppercase;
            color: #120404;
            background: linear-gradient(90deg, rgba(2, 0, 36, 0.555234593837535) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            letter-spacing: 2px;
            margin: 0.5em 0;
            padding: 10px;
            display: inline-block;
            animation: pulse 1.5s infinite;
        }
        a{
            text-decoration: none;
            color:black;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .background-container {
            width: 1290px;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: Arial, sans-serif;
            animation: changeBackground 12s infinite alternate;
            background-size: cover;
            background-position: center;
        }


        @keyframes changeBackground {
            0% {
                background-image: url('images/img1.jpg');
            }

            33% {
                background-image: url('images/img2.jpg');
            }

            66% {
                background-image: url('images/img3.jpg');
            }

            100% {
                background-image: url('images/img4.jpg');
            }
        }
    </style>
</head>

<body style="background-color: rgb(220, 218, 218);">
    <div class="conatiner sticky-top">
        <div class="row">
            <div class="col  pt-5" style="background: white;">
                <p class="h1 text-center" style="color:green;">CAREER FAIR</p>
            </div>
        </div>
    </div>

    <header class="sticky-top">
        <nav class="navbar  navbar-expand-lg me-0" style="background-color: white;">
            <div class="container m-1">
                <div class="col-5 ">
                    <img src="images/logo.png">
                </div>
                <div class="col-6 ">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item h5 me-3" style="border-radius: 5px;background-color:white;"> <a
                                href="#about" class="nav-link active " style="color: rgb(60,4,109);">About</a></li>
                        <li class="nav-item h5 " style="border-radius: 5px;background-color:white;"><a href="#features"
                                class="nav-link " style="color: rgb(60,4,109);">Features</a></li>
                        <li class="nav-item h5 me-3" style="border-radius: 5px;background-color:white;"> <a
                                href="https://www.csc.jfn.ac.lk/contact-us/" class="nav-link active "
                                style="color: rgb(60,4,109);">Contact</a></li>
                        <li class="nav-item h5 me-3" style="border-radius: 5px;background-color:white;"> <a
                                href="https://www.csc.jfn.ac.lk/contact-us/" class="nav-link active "
                                style="color: rgb(60,4,109);">Department of Computer Science</a></li>

                    </ul>
                </div>

                <div class="auth-buttons" style="position: absolute; top: 20px; right: 20px;">
                    <button> <a href="login.php">Login</a></button>
                    <button onclick="showRegisterSwal()">Register</button>
                </div>
            </div>
        </nav>
    </header>



    <div class="conatiner mt-4">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-5 "
                style="background: white; border-radius:9px 0 0 9px;display: flex;align-items: center;justify-content: center;">
                <p class="text" style="font-size:50px;"><b>YOUR FUTURE <br> STARTS TODAY!</b></p>

            </div>
            <div class="col-5  p-2" style="background: white;border-radius:0 9px 9px 0;">
                <img src="images/future.png" alt="Career Fair Banner" style="width: 80%; height: auto;">
            </div>
            <div class="col-1"></div>
        </div>
    </div>

    <section id="about" class="about">

        <div class="container mt-5">
            <div class="row">
                <div class="col " style="background: white;border-radius:5px;">
                    <h2 class="text-center p-1">About Us</h2>
                    <p class="text-center" style="font-size: 18px;">Our Career Fair Management System helps connect
                        students, professionals, and companies in one platform to facilitate recruitment, internships,
                        and networking opportunities.</p>
                </div>

            </div>
        </div>
    </section>

    <div class="container mt-3" id="features">
        <div class="row">
            <div class="col " style="background: white;border-radius:5px;height: 600px;">
                <h2 class="text-center m-3">Features</h2>
                <div class="background-container">
                    <div class="row">
                        <div class="col bg-success pt-3 me-1">
                            <p class="text-center">Company and Student Registration</p>
                        </div>
                        <div class="col bg-danger pt-4 me-1">
                            <p class="text-center">Event Scheduling</p>
                        </div>
                        <div class="col bg-warning pt-4 me-1">
                            <p class="text-center">Real-time Notifications</p>
                        </div>
                        <div class="col bg-info pt-3 me-1">
                            <p class="text-center">Live Chat and Video Interviews</p>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col" style="background: white;border-radius:5px;">
                <h2 class="text-center m-3">Contact Us</h2>
                <p class="text-center" style="font-size: 18px;">If you have any questions or need assistance, feel free
                    to reach out!</p>
                <div class="text-center m-2">
                    <button class="btn btn-danger"><a href = "https://www.csc.jfn.ac.lk/contact-us/" >Contact Support</a></button>
                </div>

            </div>
        </div>
    </div>

    <footer class="bg-body-tertiary text-center text-lg-start mt-3">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.3);">
            <p class="h5 mt-1 ">&copy; 2024 Career Fair Management System. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function showLoginSwal() {
            Swal.fire({
                title: 'Login as',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Student',
                denyButtonText: 'Employer',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'login.php'; 
                } else if (result.isDenied) {
                    window.location.href = 'login.php'; 
                }
            });
        }

        function showRegisterSwal() {
            Swal.fire({
                title: 'Register as',
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: 'Student',
                denyButtonText: 'Employer',
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = 'student_register.php';
                } else if (result.isDenied) {
                    window.location.href = 'register_employer.php'; 
                }
            });
        }
    </script>

</body>

</html>