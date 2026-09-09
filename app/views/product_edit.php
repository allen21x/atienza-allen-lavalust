<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit Product | ProductFlow</title>

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
            background: #f5f7fb;
            min-height: 100vh;
        }

        /* NAVBAR */

        .navbar-custom {
            background: linear-gradient(135deg, #6c63ff, #8b5cf6);
            padding: 16px 0;
            box-shadow: 0 5px 25px rgba(108, 99, 255, 0.25);
        }

        .brand-icon {
            width: 42px;
            height: 42px;
            background: rgba(255,255,255,.15);
            border-radius: 13px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 20px;
        }

        /* PAGE HEADER */

        .page-header {
            margin-bottom: 30px;
        }

        .page-title {
            font-size: 32px;
            font-weight: 800;
            color: #1f2937;
        }

        .page-subtitle {
            color: #6b7280;
        }

        /* FORM CARD */

        .form-card {
            background: white;
            border: none;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,.06);
        }

        .form-card-header {
            background: linear-gradient(135deg, #6c63ff, #8b5cf6);
            color: white;
            padding: 28px 35px;
        }

        .form-card-header h4 {
            font-weight: 700;
            margin: 0;
        }

        .form-card-body {
            padding: 35px;
        }

        /* INPUT */

        .form-label {
            font-weight: 600;
            color: #374151;
            font-size: 14px;
        }

        .input-wrapper {
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

        .textarea-icon {
            top: 20px;
            transform: none;
        }

        .form-control {
            border-radius: 12px;
            border: 1px solid #e5e7eb;
            padding: 14px 15px 14px 45px;
        }

        textarea.form-control {
            padding-top: 14px;
        }

        .form-control:focus {
            border-color: #7c3aed;
            box-shadow: 0 0 0 4px rgba(124,58,237,.12);
        }

        /* BUTTONS */

        .btn-update {
            background: linear-gradient(135deg, #6c63ff, #8b5cf6);
            color: white;
            border: none;
            padding: 13px 25px;
            border-radius: 12px;
            font-weight: 600;
            transition: .25s;
        }

        .btn-update:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(108,99,255,.30);
        }

        .btn-cancel {
            border-radius: 12px;
            padding: 13px 25px;
            font-weight: 600;
        }

        .info-box {
            background: #f5f3ff;
            border-left: 4px solid #7c3aed;
            padding: 15px;
            border-radius: 10px;
            color: #5b21b6;
            font-size: 14px;
        }

    </style>

</head>


<body>


<!-- NAVBAR -->

<nav class="navbar navbar-custom navbar-dark">

    <div class="container">

        <a href="/products"
           class="navbar-brand d-flex align-items-center gap-2 fw-bold">

            <div class="brand-icon">
                <i class="bi bi-box-seam-fill"></i>
            </div>

            ProductFlow

        </a>


        <a href="/products"
           class="btn btn-light rounded-pill px-3">

            <i class="bi bi-arrow-left"></i>

            Back to Products

        </a>

    </div>

</nav>



<!-- MAIN -->

<div class="container py-5">


    <!-- HEADER -->

    <div class="page-header">

        <h1 class="page-title">
            Edit Product ✏️
        </h1>

        <p class="page-subtitle">
            Update the information for this product.
        </p>

    </div>



    <div class="row justify-content-center">

        <div class="col-lg-9">


            <!-- FORM CARD -->

            <div class="form-card">


                <div class="form-card-header">

                    <h4>
                        <i class="bi bi-pencil-square"></i>
                        Update Product Information
                    </h4>

                    <small class="opacity-75">
                        Modify the details and save your changes.
                    </small>

                </div>



                <div class="form-card-body">


                    <form action="/products/update/<?= $product['id']; ?>" method="POST">


                        <!-- PRODUCT NAME -->

                        <div class="mb-4">

                            <label class="form-label">
                                Product Name
                            </label>

                            <div class="input-wrapper">

                                <i class="bi bi-box input-icon"></i>

                                <input
                                    type="text"
                                    name="product_name"
                                    class="form-control"
                                    value="<?= $product['product_name']; ?>"
                                    required
                                >

                            </div>

                        </div>



                        <!-- DESCRIPTION -->

                        <div class="mb-4">

                            <label class="form-label">
                                Description
                            </label>

                            <div class="input-wrapper">

                                <i class="bi bi-card-text input-icon textarea-icon"></i>

                                <textarea
                                    name="description"
                                    class="form-control"
                                    rows="4"
                                ><?= $product['description']; ?></textarea>

                            </div>

                        </div>



                        <div class="row">


                            <!-- PRICE -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Price
                                </label>

                                <div class="input-wrapper">

                                    <i class="bi bi-cash-stack input-icon"></i>

                                    <input
                                        type="number"
                                        name="price"
                                        class="form-control"
                                        step="0.01"
                                        min="0"
                                        value="<?= $product['price']; ?>"
                                        required
                                    >

                                </div>

                            </div>



                            <!-- QUANTITY -->

                            <div class="col-md-6 mb-4">

                                <label class="form-label">
                                    Quantity
                                </label>

                                <div class="input-wrapper">

                                    <i class="bi bi-boxes input-icon"></i>

                                    <input
                                        type="number"
                                        name="quantity"
                                        class="form-control"
                                        min="0"
                                        value="<?= $product['quantity']; ?>"
                                        required
                                    >

                                </div>

                            </div>


                        </div>



                        <!-- INFO BOX -->

                        <div class="info-box mb-4">

                            <i class="bi bi-info-circle-fill"></i>

                            Review your changes before updating the product.

                        </div>



                        <!-- BUTTONS -->

                        <div class="d-flex gap-3">

                            <button type="submit" class="btn btn-update">

                                <i class="bi bi-check-circle"></i>

                                Update Product

                            </button>


                            <a href="/products"
                               class="btn btn-outline-secondary btn-cancel">

                                Cancel

                            </a>

                        </div>


                    </form>

                </div>

            </div>

        </div>

    </div>


</div>

</body>

</html>