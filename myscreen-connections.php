<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connections Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-50 p-4"><?php include 'navbar.php'; ?>

  <div class="flex min-h-screen">
    <!-- Left Sidebar -->
    <div class="w-64 bg-white p-6 border-r border-gray-200">
      <?php include 'left-sidebar-2.php'; ?>
    </div>
   <div class="w-[1046px]  mx-auto bg-white rounded-lg shadow-sm">
 
<!-- Tabs Navigation --> 
<div class="flex border-b relative">
    <div class="w-1/3 text-center">
        <button class="w-full py-4 font-medium text-[rgba(2,53,100,1)]">
            All Connections
            <div class="font-bold text-[rgba(2,53,100,1)]">102</div>
        </button>
        <!-- Updated active indicator -->
        <div class="absolute bottom-0 left-0 w-1/3 h-1 bg-[rgba(2,53,100,1)]"></div>
    </div>
    <div class="w-1/3 text-center">
        <button class="w-full py-4 font-medium text-gray-500">
            Connection Requests
            <div class="font-bold text-[rgba(2,53,100,1)]">20+</div>
        </button>
    </div>
    <div class="w-1/3 text-center">
        <button class="w-full py-4 font-medium text-gray-500">
            Recommended
            <div class="font-bold text-[rgba(2,53,100,1)]">10+</div>
        </button>
    </div>
</div>

        <!-- Connection List -->
        <div class="px-4">
            <?php
            // Sample data - in a real application, this would come from a database
            $connections = array_fill(0, 8, [
                'name' => 'Name of User',
                'headline' => 'Profile Headline'
            ]);
            
            foreach ($connections as $connection) {
                echo '<div class="flex items-center justify-between py-5 border-b border-gray-200">
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-gray-200 rounded-full mr-3"></div>
                        <div>
                            <div class="font-medium">' . $connection['name'] . '</div>
                            <div class="text-sm text-gray-500">' . $connection['headline'] . '</div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <button class="px-4 py-1 border border-red-500 rounded-full text-red-500 text-sm flex items-center gap-1">
    Remove
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
    </svg>
</button>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</body>
</html>