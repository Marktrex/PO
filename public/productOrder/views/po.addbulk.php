
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Suppliers Add Product</title>

  <link href="../../src/tailwind.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
  <div class="flex h-screen bg-white">
    <!-- sidebar -->
    <div id="sidebar" class="flex h-screen">
      <?php include "components/po.sidebar.php" ?>
    </div>

    <!-- Main Content -->
    <div class="flex flex-col flex-1 overflow-y-auto">
      <!-- header -->
      <div class="flex items-center justify-between h-20 bg-white shadow-md px-4 py-2">
        <div class="flex items-center gap-4">
          <button id="toggleSidebar" class="text-gray-900 focus:outline-none focus:text-gray-700">
            <i class="ri-menu-line"></i>
          </button>
          <label class="text-black font-medium">Product Order / Add Items</label>
        </div>

        <!-- dropdown -->
        <div x-data="{ dropdownOpen: false }" class="relative my-32">
          <button @click="dropdownOpen = !dropdownOpen"
            class="relative z-10 border border-gray-50 rounded-md bg-white p-2 focus:outline-none">
            <div class="flex items-center gap-4">
              <a class="flex-none text-sm dark:text-white" href="#">David, Marc</a>
              <i class="ri-arrow-down-s-line"></i>
            </div>
          </button>

          <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

          <div x-show="dropdownOpen"
            class="absolute right-0 mt-2 py-2 w-40 bg-white border border-gray-200 rounded-md shadow-lg z-20">
            <a href="#" class="block px-8 py-1 text-sm capitalize text-gray-700">Log out</a>
          </div>
        </div>
      </div>

      <script>
        document.getElementById('toggleSidebar').addEventListener('click', function () {
          var sidebar = document.getElementById('sidebar');
          sidebar.classList.toggle('hidden', !sidebar.classList.contains('hidden'));
        });
      </script>

      <!-- New Form for add bulk product -->
      <div class="flex flex-col justify-center my-24 mx-10">
        <!--<div class="flex place-content-end mt-2 m-3">
           <button class="items-end rounded-full px-2 py-1 bg-violet-950 text-white">
            <i class="ri-add-circle-line"></i>
            <span>Add Row</span>
          </button> 
        </div> -->

        <div class="overflow-x-auto rounded-lg border border-gray-400">
          <table class="min-w-full text-center mx-auto bg-white">
            <thead class="bg-gray-200 border-b border-gray-400 text-sm">
              <tr>
                <th class="px-4 py-2 font-semibold">Product Image</th>
                <th class="px-4 py-2 font-semibold">Product Name</th>
                <th class="px-4 py-2 font-semibold">Category</th>
                <th class="px-4 py-2 font-semibold">Price</th>
                <th class="px-4 py-2 font-semibold">Description</th>
              </tr>
            </thead>
            <tbody>
                  <!-- Row 1 -->
                  <!-- Repeat this structure for each product row -->
                  <tr>
                    <td><input type="file" name="productImage1"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td><input type="text" name="productName1"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td>
                      <select name="category1" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                        <option value="Hand Tools">Hand Tools</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Category 3">Category 3</option>
                      </select>
                    </td>
                    <td><input type="number" name="price1" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                    </td>
                    <td><input type="text" name="description1"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                  </tr>
                  <!-- Repeat rows 2 to 5 similarly -->
                  <tr>
                    <td><input type="file" name="productImage2"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td><input type="text" name="productName2"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td>
                      <select name="category2" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                        <option value="Hand Tools">Hand Tools</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Category 3">Category 3</option>
                      </select>
                    </td>
                    <td><input type="number" name="price2" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                    </td>
                    <td><input type="text" name="description2"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                  </tr>
                  <!-- Row 3 -->

                  <tr>
                    <td><input type="file" name="productImage3"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td><input type="text" name="productName3"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td>
                      <select name="category3" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                        <option value="Hand Tools">Hand Tools</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Category 3">Category 3</option>
                      </select>
                    </td>
                    <td><input type="number" name="price3" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                    </td>
                    <td><input type="text" name="description3"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                  </tr>
                  <!-- Row 4 -->
                  <tr>
                    <td><input type="file" name="productImage4"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td><input type="text" name="productName4"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td>
                      <select name="category4" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                        <option value="Hand Tools">Hand Tools</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Category 3">Category 3</option>
                      </select>
                    </td>
                    <td><input type="number" name="price4" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                    </td>
                    <td><input type="text" name="description4"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                  </tr>
                  <!-- Row 5 -->
                  <tr>
                    <td><input type="file" name="productImage5"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td><input type="text" name="productName5"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td>
                      <select name="category5" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                        <option value="Hand Tools">Hand Tools</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Category 3">Category 3</option>
                      </select>
                    </td>
                    <td><input type="number" name="price5" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                    </td>
                    <td><input type="text" name="description5"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                  </tr>
                  <!-- You can copy the structure of Row 1 and paste it here for Rows 5 to 10 -->
                   <!-- Row 1 -->
                  <!-- Repeat this structure for each product row -->
                  <tr>
                    <td><input type="file" name="productImage1"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td><input type="text" name="productName1"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td>
                      <select name="category1" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                        <option value="Hand Tools">Hand Tools</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Category 3">Category 3</option>
                      </select>
                    </td>
                    <td><input type="number" name="price1" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                    </td>
                    <td><input type="text" name="description1"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                  </tr>
                  <!-- Repeat rows 2 to 5 similarly -->
                  <tr>
                    <td><input type="file" name="productImage2"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td><input type="text" name="productName2"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td>
                      <select name="category2" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                        <option value="Hand Tools">Hand Tools</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Category 3">Category 3</option>
                      </select>
                    </td>
                    <td><input type="number" name="price2" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                    </td>
                    <td><input type="text" name="description2"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                  </tr>
                  <!-- Row 3 -->

                  <tr>
                    <td><input type="file" name="productImage3"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td><input type="text" name="productName3"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td>
                      <select name="category3" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                        <option value="Hand Tools">Hand Tools</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Category 3">Category 3</option>
                      </select>
                    </td>
                    <td><input type="number" name="price3" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                    </td>
                    <td><input type="text" name="description3"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                  </tr>
                  <!-- Row 4 -->
                  <tr>
                    <td><input type="file" name="productImage4"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td><input type="text" name="productName4"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td>
                      <select name="category4" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                        <option value="Hand Tools">Hand Tools</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Category 3">Category 3</option>
                      </select>
                    </td>
                    <td><input type="number" name="price4" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                    </td>
                    <td><input type="text" name="description4"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                  </tr>
                  <!-- Row 5 -->
                  <tr>
                    <td><input type="file" name="productImage5"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td><input type="text" name="productName5"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td>
                      <select name="category5" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                        <option value="Hand Tools">Hand Tools</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Category 3">Category 3</option>
                      </select>
                    </td>
                    <td><input type="number" name="price5" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                    </td>
                    <td><input type="text" name="description5"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                  </tr>
                  <!-- You can copy the structure of Row 1 and paste it here for Rows 5 to 10 -->
                   <!-- Row 1 -->
                  <!-- Repeat this structure for each product row -->
                  <tr>
                    <td><input type="file" name="productImage1"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td><input type="text" name="productName1"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td>
                      <select name="category1" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                        <option value="Hand Tools">Hand Tools</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Category 3">Category 3</option>
                      </select>
                    </td>
                    <td><input type="number" name="price1" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                    </td>
                    <td><input type="text" name="description1"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                  </tr>
                  <!-- Repeat rows 2 to 5 similarly -->
                  <tr>
                    <td><input type="file" name="productImage2"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td><input type="text" name="productName2"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td>
                      <select name="category2" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                        <option value="Hand Tools">Hand Tools</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Category 3">Category 3</option>
                      </select>
                    </td>
                    <td><input type="number" name="price2" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                    </td>
                    <td><input type="text" name="description2"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                  </tr>
                  <!-- Row 3 -->

                  <tr>
                    <td><input type="file" name="productImage3"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td><input type="text" name="productName3"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td>
                      <select name="category3" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                        <option value="Hand Tools">Hand Tools</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Category 3">Category 3</option>
                      </select>
                    </td>
                    <td><input type="number" name="price3" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                    </td>
                    <td><input type="text" name="description3"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                  </tr>
                  <!-- Row 4 -->
                  <tr>
                    <td><input type="file" name="productImage4"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td><input type="text" name="productName4"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                    <td>
                      <select name="category4" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                        <option value="Hand Tools">Hand Tools</option>
                        <option value="Power Tools">Power Tools</option>
                        <option value="Category 3">Category 3</option>
                      </select>
                    </td>
                    <td><input type="number" name="price4" class="px-4 py-2 border border-gray-300 rounded-md w-full">
                    </td>
                    <td><input type="text" name="description4"
                        class="px-4 py-2 border border-gray-300 rounded-md w-full"></td>
                  </tr>
                 
                  <!-- You can copy the structure of Row 1 and paste it here for Rows 5 to 10 -->
                </tbody>
          </table>
        </div>

        <div class="flex flex-row justify-end gap-3 my-3">
            <button route='/po/suppliers' class="py-2 px-6 border border-gray-600 font-bold rounded-md">Back</button>
            <button type="submit" class="py-2 px-6 border border-gray-600 font-bold rounded-md bg-yellow-400">Save</button>
        </div>
      </div>
    </div>
  </div>
  <script src="./../../src/form.js"></script>
<script src="./../../src/route.js"></script>

</body>

</html>