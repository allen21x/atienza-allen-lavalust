<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ProductFlow | Dashboard</title>

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
            background: rgba(255,255,255,0.18);
            border-radius: 13px;

            display: inline-flex;
            align-items: center;
            justify-content: center;

            font-size: 20px;
        }

        .brand-text {
            font-size: 20px;
            font-weight: 700;
            letter-spacing: -.5px;
        }


        /* HERO */

        .hero-card {
            background: linear-gradient(135deg, #6c63ff, #8b5cf6);
            border-radius: 24px;
            padding: 35px;

            color: white;

            position: relative;
            overflow: hidden;

            box-shadow: 0 15px 40px rgba(108,99,255,.25);
        }

        .hero-card::before {
            content: "";
            position: absolute;

            width: 250px;
            height: 250px;

            background: rgba(255,255,255,.08);

            border-radius: 50%;

            right: -80px;
            top: -100px;
        }

        .hero-card::after {
            content: "";

            position: absolute;

            width: 180px;
            height: 180px;

            background: rgba(255,255,255,.07);

            border-radius: 50%;

            right: 150px;
            bottom: -100px;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 32px;
            font-weight: 800;
        }

        .hero-text {
            opacity: .85;
            font-size: 15px;
        }


        /* STAT CARDS */

        .stat-card {
            border: none;

            border-radius: 20px;

            background: white;

            padding: 22px;

            box-shadow: 0 8px 30px rgba(0,0,0,.05);

            transition: .25s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            width: 52px;
            height: 52px;

            border-radius: 16px;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 23px;
        }

        .purple {
            background: #ede9fe;
            color: #7c3aed;
        }

        .blue {
            background: #e0f2fe;
            color: #0284c7;
        }

        .green {
            background: #dcfce7;
            color: #16a34a;
        }


        /* PRODUCT CARD */

        .products-card {

            background: white;

            border-radius: 22px;

            border: none;

            box-shadow: 0 10px 35px rgba(0,0,0,.06);

            overflow: hidden;

        }

        .products-header {

            padding: 25px 30px;

            border-bottom: 1px solid #f0f0f0;

        }

        .products-title {

            font-size: 20px;

            font-weight: 700;

            margin: 0;

        }


        /* BUTTON */

        .btn-add {

            background: linear-gradient(135deg, #6c63ff, #8b5cf6);

            border: none;

            padding: 11px 20px;

            border-radius: 12px;

            font-weight: 600;

            color: white;

            transition: .25s;

        }

        .btn-add:hover {

            transform: translateY(-2px);

            color: white;

            box-shadow: 0 8px 20px rgba(108,99,255,.35);

        }


        /* TABLE */

        .table {

            margin-bottom: 0;

        }

        .table thead {

            background: #fafafa;

        }

        .table thead th {

            padding: 17px;

            color: #6b7280;

            font-size: 12px;

            text-transform: uppercase;

            letter-spacing: .5px;

            border: none;

        }

        .table tbody td {

            padding: 18px 17px;

            vertical-align: middle;

            border-color: #f1f1f1;

        }

        .table tbody tr {

            transition: .2s;

        }

        .table tbody tr:hover {

            background: #fafaff;

        }


        /* PRODUCT ICON */

        .product-icon {

            width: 44px;

            height: 44px;

            border-radius: 13px;

            background: #f1f0ff;

            color: #6c63ff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 20px;

        }


        /* BADGES */

        .price {

            font-weight: 700;

            color: #16a34a;

        }

        .quantity-badge {

            background: #f3f4f6;

            color: #374151;

            padding: 6px 12px;

            border-radius: 20px;

            font-size: 12px;

            font-weight: 600;

        }


        /* ACTIONS */

        .btn-action {

            width: 38px;

            height: 38px;

            border-radius: 10px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            text-decoration: none;

            transition: .2s;

        }

        .btn-edit {

            background: #fff7ed;

            color: #ea580c;

        }

        .btn-delete {

            background: #fef2f2;

            color: #dc2626;

        }

        .btn-action:hover {

            transform: scale(1.08);

        }


        /* EMPTY */

        .empty-state {

            padding: 80px 20px;

            text-align: center;

        }

        .empty-icon {

            width: 90px;

            height: 90px;

            margin: auto;

            border-radius: 25px;

            background: #f1f0ff;

            color: #6c63ff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 40px;

        }


        @media(max-width:768px) {

            .hero-title {
                font-size: 25px;
            }

        }

    </style>

</head>


<body>


<!-- NAVBAR -->

<nav class="navbar navbar-custom navbar-dark">

    <div class="container">

        <a class="navbar-brand d-flex align-items-center gap-2" href="/products">

            <span class="brand-icon">
                <i class="bi bi-box-seam-fill"></i>
            </span>

            <span class="brand-text">
                ProductFlow
            </span>

        </a>


        <div class="d-flex align-items-center gap-3">

            <?php if (isset($_SESSION['username'])): ?>

                <span class="text-white d-none d-md-block">

                    <i class="bi bi-person-circle"></i>

                    <?= htmlspecialchars($_SESSION['username']); ?>

                </span>

            <?php endif; ?>


            <a href="/logout" class="btn btn-light rounded-pill px-3">

                <i class="bi bi-box-arrow-right"></i>

                Logout

            </a>

        </div>

    </div>

</nav>



<div class="container py-5">


<!-- HERO -->

<div class="hero-card mb-4">

    <div class="hero-content">

        <div class="row align-items-center">

            <div class="col-md-8">

                <h1 class="hero-title">

                    Manage your products ✨

                </h1>

                <p class="hero-text mb-0">

                    Keep track of your products, prices, and inventory in one place.

                </p>

            </div>


            <div class="col-md-4 text-md-end mt-4 mt-md-0">

                <a href="/products/create" class="btn btn-light rounded-pill px-4 py-2 fw-semibold">

                    <i class="bi bi-plus-lg"></i>

                    Add Product

                </a>

            </div>

        </div>

    </div>

</div>



<!-- STATISTICS -->

<div class="row g-4 mb-4">


    <div class="col-md-4">

        <div class="stat-card d-flex align-items-center gap-3">

            <div class="stat-icon purple">

                <i class="bi bi-boxes"></i>

            </div>

            <div>

                <small class="text-muted">
                    Total Products
                </small>

                <h3 class="mb-0 fw-bold">

                    <?= !empty($products) ? count($products) : 0; ?>

                </h3>

            </div>

        </div>

    </div>



    <div class="col-md-4">

        <div class="stat-card d-flex align-items-center gap-3">

            <div class="stat-icon blue">

                <i class="bi bi-bar-chart-fill"></i>

            </div>

            <div>

                <small class="text-muted">
                    Inventory Status
                </small>

                <h6 class="mb-0 fw-bold">
                    Active Products
                </h6>

            </div>

        </div>

    </div>



    <div class="col-md-4">

        <div class="stat-card d-flex align-items-center gap-3">

            <div class="stat-icon green">

                <i class="bi bi-shield-check"></i>

            </div>

            <div>

                <small class="text-muted">
                    Account
                </small>

                <h6 class="mb-0 fw-bold">
                    Authenticated
                </h6>

            </div>

        </div>

    </div>


</div>



<!-- PRODUCTS -->

<div class="products-card">


    <div class="products-header d-flex justify-content-between align-items-center">

        <div>

            <h3 class="products-title">

                Product Inventory

            </h3>

            <small class="text-muted">

                Manage all your products here

            </small>

        </div>


        <a href="/products/create" class="btn-add">

            <i class="bi bi-plus-circle"></i>

            Add Product

        </a>

    </div>



    <?php if (!empty($products)): ?>


        <div class="table-responsive">

            <table class="table align-middle">

                <thead>

                    <tr>

                        <th class="ps-4">Product</th>

                        <th>Description</th>

                        <th>Price</th>

                        <th>Quantity</th>

                        <th class="text-center">Actions</th>

                    </tr>

                </thead>


                <tbody>


                    <?php foreach ($products as $product): ?>


                        <tr>


                            <td class="ps-4">

                                <div class="d-flex align-items-center gap-3">

                                    <div class="product-icon">

                                        <i class="bi bi-box"></i>

                                    </div>


                                    <div>

                                        <div class="fw-bold">

                                            <?= htmlspecialchars($product['product_name']); ?>

                                        </div>

                                        <small class="text-muted">

                                            Product #<?= htmlspecialchars($product['id']); ?>

                                        </small>

                                    </div>

                                </div>

                            </td>


                            <td class="text-muted">

                                <?= htmlspecialchars($product['description']); ?>

                            </td>


                            <td>

                                <span class="price">

                                    ₱<?= number_format($product['price'], 2); ?>

                                </span>

                            </td>


                            <td>

                                <span class="quantity-badge">

                                    <?= htmlspecialchars($product['quantity']); ?> items

                                </span>

                            </td>


                            <td class="text-center">


                                <a href="/products/edit/<?= $product['id']; ?>"

                                   class="btn-action btn-edit"

                                   title="Edit Product">

                                    <i class="bi bi-pencil"></i>

                                </a>


                                <a href="/products/delete/<?= $product['id']; ?>"

                                   class="btn-action btn-delete"

                                   title="Delete Product"

                                   onclick="return confirm('Are you sure you want to delete this product?');">

                                    <i class="bi bi-trash"></i>

                                </a>


                            </td>


                        </tr>


                    <?php endforeach; ?>


                </tbody>

            </table>

        </div>


    <?php else: ?>


        <div class="empty-state">

            <div class="empty-icon">

                <i class="bi bi-box-seam"></i>

            </div>


            <h4 class="mt-4 fw-bold">

                No products yet

            </h4>


            <p class="text-muted">

                Start building your inventory by adding your first product.

            </p>


            <a href="/products/create" class="btn-add d-inline-block">

                <i class="bi bi-plus-lg"></i>

                Add Your First Product

            </a>

        </div>


    <?php endif; ?>


</div>


</div>


</body>

</html>