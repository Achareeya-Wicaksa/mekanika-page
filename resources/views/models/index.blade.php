<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Models Page</title>
    <!-- Tambahkan Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        /* Custom scroll bar */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        .scrollbar-hide {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
        /* Warna yang sesuai dengan contoh */
        .custom-sidebar-bg {
            background-color: #343a40; /* Warna abu-abu gelap untuk sidebar */
        }
        .custom-navbar-bg {
            background-color: #343a40; /* Warna abu-abu untuk navbar atas */
        }
        .custom-hover:hover {
            background-color: #495057; /* Warna hover sidebar */
        }
        .dropdown-menu {
            background-color: #343a40; /* Warna latar belakang dropdown menjadi abu-abu gelap */
        }
        .sidebar-text {
            color: #ffffff; /* Warna teks sidebar menjadi putih */
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Wrapper -->
    <div class="flex">

        <!-- Sidebar -->
        <div class="w-64 custom-sidebar-bg h-screen flex flex-col justify-between">
            <div class="p-4 flex-grow overflow-y-auto scrollbar-hide">
                <!-- Placeholder untuk Logo -->
                <div class="text-center mb-8">
                    <h1 class="text-2xl font-bold text-white">[LOGO]</h1>
                </div>
                <!-- Sidebar Menu -->
                <ul>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-sm py-3 px-6 rounded custom-hover sidebar-text">
                        <img src="{{ asset('images/svg/dashboard-dark.png') }}" alt="Logo" class="w-5 mx-2">
                            Dashboard
                        </a>
                    </li>
                    <li class="mb-4">
                        <button class="flex items-center text-sm py-3 px-6 rounded custom-hover sidebar-text w-full text-left" onclick="toggleDropdown('masterDataDropdown')">
                        <img src="{{ asset('images/svg/master-data-dark.png') }}" alt="Logo" class="w-5 mx-2">
                            Master Data
                            <span class="ml-auto"><i class="fas fa-chevron-down"></i></span>
                        </button>
                        <ul id="masterDataDropdown" class="hidden pl-6 dropdown-menu">
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/access-level-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Access Level
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/user-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Users
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/machine-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Machines
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/model-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Models
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/part-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Parts
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/dies-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Dies
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/cart-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Carts
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/client-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Clients
                                </a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="flex items-center text-sm py-2 rounded custom-hover sidebar-text">
                                <img src="{{ asset('images/svg/reject-reason-dark.png') }}" alt="Logo" class="w-5 mx-2">
                                    Reject Reason
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-sm py-3 px-6 rounded custom-hover sidebar-text">
                        <img src="{{ asset('images/svg/information-dark.png') }}" alt="Logo" class="w-5 mx-2">
                            Information
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-sm py-3 px-6 rounded custom-hover sidebar-text">
                        <img src="{{ asset('images/svg/transaction-dark.png') }}" alt="Logo" class="w-5 mx-2">
                            Transaction
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="flex items-center text-sm py-3 px-6 rounded custom-hover sidebar-text">
                        <img src="{{ asset('images/svg/report-dark.png') }}" alt="Logo" class="w-5 mx-2">
                            Report
                        </a>
                    </li>
                </ul>
            </div>
            <div class="p-4 text-sm text-center text-white">
                Achareeya Wicaksa P
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            <!-- Navbar Atas -->
            <div class="custom-navbar-bg p-4 flex justify-between items-center text-white">
                <div class="flex">
                <img src="{{ asset('images/svg/master-data-dark.png') }}" alt="Logo" class="w-5 mx-2">
                    <h1 class="font-semibold text-lg">Master Data</h1>
                </div>
                <div class="flex items-center">
                    <div class="mr-4">
                        <span id="currentDate">12 Agustus 2024</span>
                    </div>
                    <div class="mr-4">
                        <span class="mr-2"><i class="fas fa-sun"></i></span> <!-- Ikon Matahari -->
                    </div>
                    <div class="mr-4">
                        <span class="mr-2"><i class="fas fa-phone"></i></span> <!-- Ikon Telepon -->
                    </div>
                    <div class="mr-4">
                    <img src="{{ asset('images/svg/user-dark.png') }}" alt="Logo" class="w-5 mx-2">
                    </div>
                </div>
            </div>

            <!-- Tabel Model -->
            <div class="p-6 bg-gray-100 h-full overflow-y-auto">
                <div class="bg-white shadow-md rounded">
                    <table class="min-w-full table-auto">
                        <thead class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <tr>
                                <th class="py-3 px-6 text-left">No</th>
                                <th class="py-3 px-6 text-left">Model Name</th>
                                <th class="py-3 px-6 text-left">Description</th>
                                <th class="py-3 px-6 text-center">Status</th>
                                <th class="py-3 px-6 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <!-- Contoh data statis -->
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">1</td>
                                <td class="py-3 px-6 text-left">KVB</td>
                                <td class="py-3 px-6 text-left">Beat 120</td>
                                <td class="py-3 px-6 text-center">
                                    <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Active</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <a href="#" class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <!-- Tambah data sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        function toggleDropdown(dropdownId) {
            var dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle('hidden');
        }

        // Pastikan tanggal tetap "12 Agustus 2024"
        document.getElementById('currentDate').innerText = new Date().toLocaleDateString('us-US', {
            weekday: 'long',
            day: 'numeric',
            month: 'long',
            year: 'numeric'
        });
    </script>
</body>
</html>
