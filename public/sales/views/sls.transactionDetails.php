<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Details</title>
    <link href="./../../src/tailwind.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">

    <?php
    require_once 'function/fetchSaleDetails.php';
    ?>

</head>

<body class="bg-gray-100">
    <?php include "components/sidebar.php" ?>

    <!-- Start: Dashboard -->
    <main id="mainContent" class="w-full md:w-[calc(100%-256px)] md:ml-64 min-h-screen transition-all main">

        <!-- Start: Header -->

        <div class="py-2 px-6 bg-white flex items-center shadow-md sticky top-0 left-0 z-30">

            <!-- Start: Active Menu -->

            <button type="button" class="text-lg sidebar-toggle">
                <i class="ri-menu-line"></i>
            </button>

            <ul class="flex items-center text-md ml-4">

                <li class="mr-2">
                    <p class="text-black font-medium">Sales / Transaction Details</p>
                </li>

            </ul>

            <!-- End: Active Menu -->

            <!-- Start: Profile -->

            <ul class="ml-auto flex items-center">
                <div class="text-black font-medium">Sample User</div>
                <li class="dropdown ml-3">
                    <i class="ri-arrow-down-s-line"></i>
                </li>
            </ul>

            <!-- End: Profile -->

        </div>

        <!-- End: Header -->

        <div class="flex flex-col items-start justify-center min-h-screen w-full max-w-4xl mx-auto p-4">
            <div class="w-full bg-white rounded-lg overflow-hidden shadow-lg p-4">
                <div class="p-2 pl-6 text-green-800 text-xl">
                    <i class="ri-cash-line text-2xl"></i> <span class="font-regular text-green-800">AMOUNT</span>
                </div>
                <div class="p-2 pl-6 text-6xl font-semibold flex flex-row items-center border-b pb-4">
                    <span>₱<?php echo number_format(array_sum(array_column($items, 'TotalAmount')), 2); ?></span>
                    <!-- <div>
                        <div class="bg-gray-200 flex justify-center p-2 px-4 rounded-full ml-4 shadow-md border-gray-200 border">
                            <div class="bg-green-800 size-6 rounded-full mr-2"></div>
                            <span class="text-xl font-medium">Order Delivered</span>
                        </div>
                    </div> -->


                </div>


                <div class="p-6 rounded flex flex-row text-lg font-medium">
                    <div class="flex flex-col border-r-2 pr-8">
                        <span class="font-semibold text-gray-500">Transaction Date</span>
                        <span class="mt-4"><?php echo date('F j, Y, g:i a', strtotime($sale['SaleDate'])); ?></span>
                    </div>

                    <div class="flex flex-col ml-4 pl-4 border-r-2 pr-8">
                        <span class="font-semibold text-gray-500">Order ID</span>
                        <span class="mt-4"><?php echo $sale['SaleID']; ?></span>
                    </div>

                    <div class="flex flex-col ml-4 pl-4 border-r-2 pr-8">
                        <span class="font-semibold text-gray-500">Sale Preference</span>
                        <span class="mt-4"><?php echo $sale['SalePreference']; ?></span>
                    </div>

                    <div class="flex flex-col ml-4 pl-4 pr-8">
                        <span class="font-semibold text-gray-500">Payment Method</span>
                        <span class="mt-4"><?php echo $sale['PaymentMode']; ?></span>
                    </div>
                </div>

                <div class="p-6 pb-2 pt-2 rounded flex flex-row text-lg border-b">
                    <div class="text-lg text-gray-900 font-semibold">Transaction Details</div>
                </div>

                <div class="flex flex-row p-6 gap-44">
                    <div class="flex flex-col gap-4 text-gray-500">

                        <span class="p-2 font-bold">Name</span>
                        <span class="p-2 font-bold">Phone Number</span>
                        <span class="p-2 font-bold">Email</span>
                    </div>

                    <div class="flex flex-col gap-4 font-semibold ">

                        <span class="p-2"><?php echo $customer['FirstName'] . ' ' . $customer['LastName']; ?></span>
                        <span class="p-2"><?php echo $customer['Phone']; ?></span>
                        <span class="p-2"><?php echo $customer['Email']; ?></span>
                    </div>
                </div>

                <?php if ($sale['SalePreference'] == 'Delivery') { ?>
                    <div class="p-6 pb-2 pt-2 rounded flex flex-row text-lg border-b">
                        <div class="text-lg text-gray-900 font-semibold">Delivery Details</div>
                    </div>

                    <div class="flex flex-row p-6 gap-44">
                        <div class="flex flex-col gap-4 text-gray-500">
                            <span class="p-2 font-bold">Cargo Type</span>
                            <span class="p-2 font-bold">Delivery Address</span>
                            <span class="p-2 font-bold">Delivery Date</span>
                            <span class="p-2 font-bold">Delivery Status</span>
                            <span class="p-2 font-bold">Received Date</span>
                        </div>

                        <div class="flex flex-col gap-4 font-semibold ">
                            <div class="bg-gray-200 rounded-full p-2 text-center font-bold">Heavy</div>
                            <span class="p-2"><?php echo $deliveryOrder['DeliveryAddress']; ?></span>
                            <span class="p-2"><?php echo $deliveryOrder['DeliveryDate']; ?></span>
                            <span class="p-2"><?php echo $deliveryOrder['DeliveryStatus']; ?></span>
                            <span class="p-2"><?php echo $deliveryOrder['ReceivedDate']; ?></span>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($sale['PaymentMode'] == 'Card') { ?>
                    <div class="p-6 pb-2 pt-2 rounded flex flex-row text-lg border-b">
                        <div class="text-lg text-gray-900 font-semibold">Card Details</div>
                    </div>

                    <div class="flex flex-row p-6 gap-44">
                        <div class="flex flex-col gap-4 text-gray-500">
                            <span class="p-2 font-bold">Card Number</span>
                            <span class="p-2 font-bold">Expiry Date</span>
                            <span class="p-2 font-bold">CVV/CVC</span>
                        </div>

                        <div class="flex flex-col gap-4 font-semibold ">
                            <span class="p-2"><?php echo $sale['CardNumber']; ?></span>
                            <span class="p-2"><?php echo $sale['ExpiryDate']; ?></span>
                            <span class="p-2"><?php echo $sale['CVV']; ?></span>
                        </div>
                    </div>
                <?php } ?>

                <hr class=" border-gray-300">
                <h2 class="text-lg font-semibold text-center my-3 text-gray-700">Items</h2>
                <div class="flex justify-center">
                    <div class="grid grid-cols-3 gap-4 mx-auto">
                        <?php foreach ($items as $item) : ?>
                            <div class="w-52 h-70 p-6 flex flex-col items-center border rounded-lg border-solid border-gray-300 shadow-lg text-center" data-open-modal data-product='<?= json_encode($item) ?>'>
                                <div class="size-24 rounded-full shadow-md bg-yellow-200 mb-4">
                                    <!-- SVG icon -->
                                </div>
                                <div class="font-bold text-lg text-gray-700"><?php echo $item['ProductName']; ?></div>
                                <div class="font-normal text-sm text-gray-500"><?php echo $item['Category']; ?></div>
                                <div class="mt-6 text-lg font-semibold text-gray-700">&#8369;<?php echo number_format($item['UnitPrice'] * $item['Quantity'] * (1 + $item['TaxRate']), 2); ?></div>
                                <div class="text-gray-500 text-sm">Quantity: <?php echo $item['Quantity']; ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Modal Section -->
                <dialog data-modal class="rounded-lg shadow-xl  w-1/4 max-h-full">

                    <!-- Modal Header -->
                    <div class="w-full bg-green-800 h-10 flex justify-end items-center">
                        <button data-close-modal> <i class="ri-close-fill text-2xl font-bold text-white p-2"></i></button>
                    </div>

                    <!-- Modal Content -->
                    <div class="relative p-4">
                        <div class="relative bg-white">
                            <div class="flex justify-center">
                                <div class="size-64 rounded-full shadow-lg bg-yellow-200 mb-4"></div>
                            </div>
                            <div class="text-justify">
                                <div id="modal-product-category" class="text-justify font-semibold text-gray-800"></div>
                            </div>
                            <div class="flex justify-between pt-4">
                                <h3 id="modal-product-name" class="mb-5 text-2xl font-semibold text-gray-800 dark:text-gray-800"></h3>
                                <h3 id="modal-product-price" class="mb-5 text-2xl font-semibold text-gray-800 dark:text-gray-800"></h3>
                            </div>

                            <div class="text-justify ">
                                <div id="modal-product-description" class="text-justify"></div>
                            </div>

                            <div class="flex justify-between pt-6">
                                <h3 id="modal-product-quantity" class="pt-3 text-xl text-gray-500 font-medium"></h3>
                            </div>

                            <div class="flex justify-between">
                                <h3 id="modal-product-total" class="pt-3 text-xl text-gray-500 font-medium"></h3>
                            </div>
                        </div>
                    </div>
                </dialog>

                <script>
                    const openButtons = document.querySelectorAll('[data-open-modal]');
                    const closeButtons = document.querySelector('[data-close-modal]');
                    const modal = document.querySelector('[data-modal]');
                    const modalProductName = document.getElementById('modal-product-name');
                    const modalProductPrice = document.getElementById('modal-product-price');
                    const modalProductDescription = document.getElementById('modal-product-description');
                    const modalProductCategory = document.getElementById('modal-product-category');
                    const modalProductQuantity = document.getElementById('modal-product-quantity');
                    const modalProductTotal = document.getElementById('modal-product-total');

                    openButtons.forEach(button => {
                        button.addEventListener('click', () => {
                            const product = JSON.parse(button.dataset.product);
                            selectedProduct = {
                                id: product.ProductID,
                                name: product.ProductName,
                                price: Number(product.Price),
                                stocks: product.Stocks,
                                priceWithTax: Number(product.Price) * (1 + Number(product.TaxRate)),
                                TaxRate: Number(product.TaxRate),
                                deliveryRequired: product.DeliveryRequired
                            };
                            modalProductName.textContent = selectedProduct.name;
                            modalProductPrice.textContent = '₱' + (selectedProduct.price * (1 + selectedProduct.TaxRate)).toFixed(2);
                            modalProductCategory.textContent = product.Category;
                            modalProductDescription.textContent = product.Description;
                            modalProductQuantity.textContent = 'Quantity: ' + product.Quantity;
                            modalProductTotal.textContent = 'Total: ₱' + (selectedProduct.price * product.Quantity * (1 + selectedProduct.TaxRate)).toFixed(2);
                            modal.showModal();
                        });
                    });

                    closeButtons.addEventListener('click', () => {
                        modal.close();
                    });
                </script>

                <div class="p-6 pb-2 pt-2 rounded flex flex-row text-lg border-b mt-8">
                    <div class="text-lg text-gray-700 font-semibold">Order Summary</div>
                </div>
                <div class="flex flex-row p-6 gap-44">
                    <div class="flex flex-col gap-4 text-gray-500">
                        <span class="p-2 font-bold">Quantity</span>
                        <span class="p-2 font-bold">Subtotal</span>
                        <span class="p-2 font-bold">Tax</span>
                        <span class="p-2 font-bold">Shipping Fee</span>
                        <span class="p-2 font-bold">Price Discounted</span>
                        <span class="p-2 font-bold text-xl text-green-800">Total</span>
                    </div>

                    <div class="flex flex-col gap-4 font-semibold ">
                        <div class="p-2"><?php echo array_sum(array_column($items, 'Quantity')); ?></div>
                        <span class="p-2">&#8369;<?php echo number_format(array_sum(array_column($items, 'Subtotal')), 2); ?></span>
                        <span class="p-2">&#8369;<?php echo number_format(array_sum(array_column($items, 'Tax')), 2); ?></span>
                        <span class="p-2">&#8369;<?php echo number_format(array_sum(array_column($items, 'ShippingFee')), 2); ?></span>
                        <span class="p-2">N/A</span>
                        <span class="text-xl text-green-800 bg-gray-200 rounded-full p-1 px-8 text-center font-bold">₱<?php echo number_format(array_sum(array_column($items, 'TotalAmount')), 2); ?></span>
                    </div>
                </div>
                <button class="border-t print-button mt-4 w-full rounded-full text-black text-xl py-4 px-4 hover:bg-gray-200 hover:font-bold transition-all ease-in-out">
                    <i class="ri-import-line font-medium text-2xl"></i>
                    Print Receipt</button>
            </div>

        </div>
    </main>
    <script src="./../../src/form.js"></script>
    <script src="./../../src/route.js"></script>
</body>

</html>