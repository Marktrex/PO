<?php
  // require_once './public/humanResources/func/add-employee.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
  <link href="./../../src/tailwind.css" rel="stylesheet">
  <title>New Employee</title>
</head>
<body class="text-gray-800 font-sans">

<!-- sidenav -->
<?php 
    include 'inc/sidenav.php';
?>
<!-- end of sidenav -->

<!-- MAIN -->
<main id = "mainContent" class="w-full md:w-[calc(100%-256px)] md:ml-64 min-h-screen transition-all main">
  <!-- Top Bar -->
  <div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/10">
   <button type="button" class="text-lg text-gray-600 sidebar-toggle">
  <i class="ri-menu-line"></i>
   </button>
   <ul class="flex items-center text-sm ml-4">  
  <li class="mr-2">
    <a route="/hr/dashboard" class="text-[#151313] hover:text-gray-600 font-medium">Human Resources</a>
  </li>
  <li class="text-[#151313] mr-2 font-medium">/</li>
  <a route="/hr/employees" class="text-[#151313] mr-2 font-medium hover:text-gray-600">Employees</a>
  <li class="text-[#151313] mr-2 font-medium">/</li>
  <a href="#" class="text-[#151313] mr-2 font-medium hover:text-gray-600">Add New</a>
   </ul>
   <ul class="ml-auto flex items-center">
  <li class="mr-1">
    <a href="#" class="text-[#151313] hover:text-gray-600 text-sm font-medium">Sample User</a>
  </li>
  <li class="mr-1">
    <button type="button" class="w-8 h-8 rounded justify-center hover:bg-gray-300"><i class="ri-arrow-down-s-line"></i></button> 
  </li>
   </ul>
  </div>
  <!-- End Top Bar -->

  
  <div class="flex items-center flex-wrap">
    <h3 class="ml-6 mt-8 text-xl font-bold">Employee Information</h3>
  </div>
  
<!-- Profile -->
<div class="py-2 px-6 mt-4">
  <div class="flex">
    <form action="/hr/employees/add" method="POST" enctype="multipart/form-data">
    <div class="mr-4">
      <img src="https://placehold.co/192x192" alt="Profile Picture" class="w-48 h-48 object-cover ml-3">
      <span>
        <div class="ml-2 mb-20 mt-4">
          <!-- The file input for uploading pictures. It's hidden because the custom upload button is used instead. -->
          <input type="file" id="fileInput" style="display: none;">

          <!-- The custom upload button. When clicked, it triggers the click event of the file input. -->
          <button type="button" onclick="document.getElementById('fileInput').click();" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Upload</button>

          <!-- The remove button. When clicked, it removes the selected file from the file input. -->
          <button type="button" onclick="removeFile();" class="focus:outline-none text-black bg-white hover:bg-gray-100 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Remove</button>

        </div>    
      </span>
    </div>
  <!-- Employee Information -->
  
<!-- <form action= "/hr/employees/add" method="POST"> -->
  <div class="flex flex-col ml-20">
    <div class="mb-4">
      <div class="flex">
        <div class="mr-2">
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="firstName">
              First Name
            </label>
            <input
              class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
              name="firstName"
              id="firstName"
              type="text"
              placeholder="First Name"
            />
        </div>
        <div class="mr-2">
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="middleName">
              Middle Name
            </label>
            <input
              class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
              name="middleName"
              id="middleName"
              type="text"
              placeholder="Middle Name"
            />
        </div>
        <div>
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="lastName">
              Last Name
            </label>
            <input  
              class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
              name="lastName"
              id="lastName"
              type="text"
              placeholder="Last Name"
            />
        </div>
      </div>
    </div>
      <!-- Employee Information 2 -->
  <div class="flex flex-col">
    <div class="mb-4">
      <div class="flex">
        <div class="mr-2">
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="dateofbirth">
              Date of Birth
            </label>
            <input
              class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
              name="dateofbirth"
              id="dateofbirth"
              type="date"
            />
        </div>
        <div class="mr-2">
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="gender">
              Gender
            </label>
            <select
            class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
            name="gender"
            id="gender">
            <option value="">Select Gender</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
          </select>
        </div>
        <div>
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="nationality">
              Nationality
            </label>
            <input  
              class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
              name="nationality"
              id="nationality"
              type="text"
              placeholder="Nationality"
            />
        </div>
      </div>
    </div>
    <!-- Employee Information 3-->
    <div class="flex flex-col">
      <div class="mb-4">
        <div class="flex">
          <div class="mr-2">
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="civilstatus">
              Civil Status
            </label>
            <select
              class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
              id="civilstatus"
              name="civilstatus">
              <option value="">Select Status</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Widowed">Widowed</option>
              <option value="Divorced">Divorced</option>
          </select>
          </div>
          <div class="mr-2">
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="address">
              Address
            </label>
            <input  
            class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
            name="address"
            id="address"
            type="text"
            placeholder="Address"
          />
          </div>
          <div>
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="contactnumber">
              Contact Number
            </label>
            <input  
              class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
              name="contactnumber"
              id="contactnumber"
              type="tel"
              placeholder="Contact Number"
            />
          </div>
        </div>
      </div>

      <!-- Employee Information 4-->
      <div class="flex flex-col">
      <div class="mb-4">
        <div class="flex">
          <div class="mr-2">
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="email">
              Email
            </label>
            <input
              class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
              name="email"
              id="email"
              placeholder="example@example.com">
          </div>
          <div class="mr-2">
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="department">
              Department
            </label>
            <select
              class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        name="department" id="Department" placeholder="Department">
                        
                        <option value="">Select Department</option>
                        <option value="Product Order">Product Order</option>
                        <option value="Inventory">Inventory</option>
                        <option value="Inventory">Delivery</option>
                        <option value="Human Resources">Human Resources</option>
                        <option value="Point of Sales">Point of Sales</option>
                        <option value="Finance">Finance/Accounting</option>
                      
                      </select>
          </div>
          <div>
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="Position">
              Position
            </label>
            <input  
              class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
              name="position"
              id="Position"
              type="text"
              placeholder="Position"
            />  
          </div>
        </div>
      </div>

    <!-- Employee Information 5 : EMPLOYMENT INFO-->
    <div class="flex flex-col">
      <div class="mb-4">
        <div class="flex">
          <div class="mr-2">
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="dateofhire">
              Date of Hire
            </label>
            <input  
            class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
            name="dateofhire"
            id="dateofhire"
            type="date"
            placeholder="Date of Hire"
          />
          </div>
          <div class="mr-2">
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="startdate">
              Start of Employment
            </label>
            <input  
            class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
            name="startdate"
            id="startdate"
            type="date"
            placeholder="Start Date"
          />
          </div>
          <div>
            <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="enddate">
              End of Employment
            </label>
            <input  
              class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
              name="enddate"
              id="enddate"
              type="date"
              placeholder="enddate"
            />
          </div>
        </div>
      </div>

        <!-- Salary Information and Tax Information -->
  <div>
    <h2 class="block mb-2 mt-8 text-base font-bold text-gray-700">Salary and Tax Information</h2>
    <div class="flex flex-col">
      <div class="mb-4 mt-4">
        <div class="flex">
          <div class="mr-2">
              <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="monthlysalary">
                Monthly Salary
              </label>
              <input
                class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                name="monthlysalary"
                id="monthlysalary"
                type="number"
                placeholder="Ex. 20000"
              />
          </div>
          <!-- TAX INFO -->
          <div class="mr-2">
              <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="incometax">
                Income Tax
              </label>
              <input
                class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                name="incometax"
                id="incometax"
                type="number"
                placeholder="Income Tax"
              />
          </div>
          <div>
              <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="withholdingtax">
                Withholding tax
              </label>
              <input  
                class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                name="withholdingtax"
                id="withholdingtax"
                type="number"
                placeholder="Withholding Tax"
              />
          </div>
        </div>
      </div>
      <div>
        <!-- BENEFIT INFO -->
        <div class="flex flex-col">
          <div class="mb-4">
            <div class="flex">
              <div class="mr-2">
                  <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="sss">
                    SSS
                  </label>
                  <input
                    class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    name="sss"
                    id="sss"
                    type="text"
                    placeholder="SSS"
                  />
              </div>
              <div class="mr-2">
                  <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="pagibig">
                    Pag-IBIG Fund
                  </label>
                  <input
                    class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    name="pagibig"
                    id="pagibig"
                    type="text"
                    placeholder="PAG-IBIG Fund"
                  />
              </div>
              <div>
                  <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="philhealth">
                    Philhealth
                  </label>
                  <input  
                    class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                    name="philhealth"
                    id="philhealth"
                    type="text"
                    placeholder="Philhealth"
                  />
              </div>
            </div>
          </div>
          <div class="flex flex-col">
            <div class="mb-4">
              <div class="flex">
                <div class="mr-2">
                    <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="thirteenthmonth">
                      13th Month Pay
                    </label>
                    <input
                      class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                      name="thirteenthmonth"
                      id="thirteenthmonth"
                      type="number"
                      placeholder="13th Month Pay"
                    />
                </div>
                <div class="mr-2">
                    <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="totalsalary">
                      Total Salary (with Tax reductions)
                    </label>
                    <input
                      class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                      name="totalsalary"
                      id="totalsalary"
                      type="number"
                      placeholder="Total Salary"
                    />
                </div>
            </div>

    <!-- Account Information -->
    <div>
      <h2 class="block mb-2 mt-8 text-base font-bold text-gray-700">Account Information</h2>
      <div class="flex flex-col">
        <div class="mb-4 mt-4">
          <div class="flex">
            <div class="mr-2">
                <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="username">
                  Username
                </label>
                <input
                  class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  name="username"
                  id="username"
                  type="text"
                  placeholder="Username"
                />
            </div>
            <!-- TAX INFO -->
            <div class="mr-2">
                <label class="block mb-2 mt-0 text-sm font-bold text-gray-700" for="incometax">
                  Password
                </label>
                <input
                  class="w-64 px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                  name="password"
                  id="password"
                  type="password"
                  placeholder="Password"
                />
                <input type="checkbox" id="togglePassword"> Show Password
            </div>
          </div>
        </div>
      </div>
      <div>
      </div>
      <div class="flex flex-row mt-8 justify-center">
        <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Save</button>
        <button route="/hr/employees" type="button" class="focus:outline-none text-gray-700 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">Cancel</button>
      </div>
      </form>
    </div>
  </div>
</div> 
</main>

<script  src="./../../src/route.js"></script>
<script  src="./../../src/form.js"></script>

<script>
  // Sidebar toggle function
  document.querySelector('.sidebar-toggle').addEventListener('click', function() {
    document.getElementById('sidebar-menu').classList.toggle('hidden');
    document.getElementById('sidebar-menu').classList.toggle('transform');
    document.getElementById('sidebar-menu').classList.toggle('-translate-x-full');
    document.getElementById('mainContent').classList.toggle('md:w-full');
    document.getElementById('mainContent').classList.toggle('md:ml-64');
  });

  // Show password
  document.getElementById('togglePassword').addEventListener('change', function () {
    const passwordInput = document.getElementById('password');
    if (this.checked) {
        passwordInput.type = 'text';
    } else {
        passwordInput.type = 'password';
    }
  });
  
  // Remove profile picture
  function removeFile() {
      document.getElementById('fileInput').value = '';
  }
</script>
</body>
</html> 