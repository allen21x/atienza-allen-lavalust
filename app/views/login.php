<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login | ProductFlow</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>

        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #6c63ff, #8b5cf6);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
        }

        .circle-one {
            width: 350px;
            height: 350px;
            top: -120px;
            left: -100px;
        }

        .circle-two {
            width: 450px;
            height: 450px;
            bottom: -200px;
            right: -150px;
        }

        .login-wrapper {
            width: 100%;
            max-width: 1000px;
            padding: 20px;
            position: relative;
            z-index: 2;
        }

        .login-card {
            background: white;
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.20);
        }

        /* LEFT SIDE */

        .login-left {
            background: linear-gradient(135deg, #5b52e8, #7c3aed);
            color: white;
            padding: 60px;
            min-height: 550px;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .logo-box {
            width: 65px;
            height: 65px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 20px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 30px;
            margin-bottom: 25px;
        }

        .welcome-title {
            font-weight: 800;
            font-size: 38px;
            line-height: 1.2;
        }

        .welcome-text {
            opacity: 0.85;
            margin-top: 15px;
            line-height: 1.7;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 18px;
            font-size: 14px;
        }

        .feature i {
            background: rgba(255, 255, 255, 0.15);
            padding: 8px;
            border-radius: 10px;
        }

        /* RIGHT SIDE */

        .login-right {
            padding: 55px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-title {
            font-size: 30px;
            font-weight: 800;
            color: #1f2937;
        }

        .login-subtitle {
            color: #6b7280;
            margin-bottom: 20px;
        }

        /* ERROR NOTIFICATION */

        .error-notification {
            background: #fff1f2;
            color: #dc2626;
            border-left: 4px solid #dc2626;
            border-radius: 10px;
            padding: 12px 15px;
            margin-bottom: 20px;
            font-size: 14px;
            font-weight: 500;
        }

        .form-label {
            font-weight: 600;
            font-size: 14px;
            color: #374151;
        }

        .input-group-custom {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            z-index: 5;
        }

        .form-control {
            padding: 14px 15px 14px 45px;
            border-radius: 12px;
            border: 1px solid #e5e7eb;
        }

        .form-control:focus {
            border-color: #7c3aed;
            box-shadow: 0 0 0 4px rgba(124, 58, 237, .12);
        }

        .login-btn {
            width: 100%;
            border: none;
            padding: 14px;
            border-radius: 12px;

            background: linear-gradient(135deg, #6c63ff, #8b5cf6);
            color: white;

            font-weight: 600;
            transition: .25s;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 10px 25px rgba(108, 99, 255, .35);
        }

        .register-link {
            text-align: center;
            margin-top: 25px;
            color: #6b7280;
            font-size: 14px;
        }

        .register-link a {
            color: #7c3aed;
            font-weight: 700;
            text-decoration: none;
        }

        @media(max-width: 768px) {

            body {
                overflow: auto;
            }

            .login-left {
                display: none;
            }

            .login-right {
                padding: 40px 30px;
            }

        }

    </style>

</head>

<body>

    <!-- Background Decorations -->
    <div class="circle circle-one"></div>
    <div class="circle circle-two"></div>


    <div class="login-wrapper">

        <div class="login-card">

            <div class="row g-0">

                <!-- LEFT SIDE -->
                <div class="col-md-6 login-left">

                    <div class="logo-box">
                        <i class="bi bi-box-seam-fill"></i>
                    </div>

                    <h1 class="welcome-title">
                        Welcome to<br>
                        ProductFlow 🚀
                    </h1>

                    <p class="welcome-text">
                        Manage your products, inventory, and business information
                        in one simple and powerful platform.
                    </p>

                    <div class="feature">
                        <i class="bi bi-boxes"></i>
                        Manage your products easily
                    </div>

                    <div class="feature">
                        <i class="bi bi-shield-lock"></i>
                        Secure authentication system
                    </div>

                    <div class="feature">
                        <i class="bi bi-speedometer2"></i>
                        Modern product dashboard
                    </div>

                </div>


                <!-- RIGHT SIDE -->
                <div class="col-md-6 login-right">

                    <h2 class="login-title">
                        Welcome Back 👋
                    </h2>

                    <p class="login-subtitle">
                        Login to access your ProductFlow dashboard.
                    </p>


                    <!-- ERROR NOTIFICATION -->
                    <?php if (isset($_SESSION['error'])): ?>

                        <div class="error-notification">

                            <i class="bi bi-exclamation-circle-fill"></i>

                            <?= $_SESSION['error']; ?>

                        </div>

                        <?php unset($_SESSION['error']); ?>

                    <?php endif; ?>


                    <!-- LOGIN FORM -->
                    <form action="/login/authenticate" method="POST">

                        <!-- USERNAME -->
                        <div class="mb-3">

                            <label class="form-label">
                                Username
                            </label>

                            <div class="input-group-custom">

                                <i class="bi bi-person input-icon"></i>

                                <input
                                    type="text"
                                    name="username"
                                    class="form-control"
                                    placeholder="Enter your username"
                                    required
                                >

                            </div>

                        </div>


                        <!-- PASSWORD -->
                        <div class="mb-4">

                            <label class="form-label">
                                Password
                            </label>

                            <div class="input-group-custom">

                                <i class="bi bi-lock input-icon"></i>

                                <input
                                    type="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="Enter your password"
                                    required
                                >

                            </div>

                        </div>


                        <!-- LOGIN BUTTON -->
                        <button type="submit" class="login-btn">

                            <i class="bi bi-box-arrow-in-right"></i>

                            Login to Dashboard

                        </button>

                    </form>


                    <!-- REGISTER LINK -->
                    <div class="register-link">

                        Don't have an account?

                        <a href="/register">
                            Create Account
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>