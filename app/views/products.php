<!DOCTYPE html>
<html>
<head>
    <title>Product Management System</title>
</head>

<body>

    <h1>Product Management System</h1>

    <a href="/products/create">+ Add Product</a>

    <br><br>

    <table border="1" cellpadding="10">

        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Actions</th>
        </tr>

        <?php if (!empty($products)): ?>

            <?php foreach ($products as $product): ?>

                <tr>
                    <td><?= $product['id']; ?></td>
                    <td><?= $product['product_name']; ?></td>
                    <td><?= $product['description']; ?></td>
                    <td><?= $product['price']; ?></td>
                    <td><?= $product['quantity']; ?></td>

                    <td>
                        <a href="/products/edit/<?= $product['id']; ?>">
                            Edit
                        </a>

                        |

                        <a href="/products/delete/<?= $product['id']; ?>">
                            Delete
                        </a>
                    </td>
                </tr>

            <?php endforeach; ?>

        <?php else: ?>

            <tr>
                <td colspan="6">No products found.</td>
            </tr>

        <?php endif; ?>

    </table>

</body>
</html>