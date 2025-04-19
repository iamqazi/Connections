<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans bg-gray-50 p-4">
    <?php include 'navbar.php'; ?>

  <div class="flex min-h-screen">
    <!-- Left Sidebar -->
    <div class="w-64 bg-white p-6 border-r border-gray-200">
      <?php include 'left-sidebar-2.php'; ?>
    </div>
   <div class="w-[1046px]  mx-auto bg-white rounded-lg shadow-sm">
 
        <!-- Profile Section -->
        <div class="bg-white rounded-lg shadow-md mb-6 p-5">
            <div class="flex justify-between items-center mb-4">
                <div class="flex items-center">
    <img src="<?php echo $profile_image ?? 'images/profile.svg'; ?>" alt="Profile Picture" class="w-[120px] h-[120px] rounded-full mr-4 object-cover">
                    <div>
                        <h1 class="text-xl font-bold text-[rgba(2,53,100,1)]"><?php echo $name ?? 'Zulqarnain Farooq'; ?></h1>
                        <p class="text-gray-600"><?php echo $title ?? 'UI/UX Designer | Figma Expert'; ?></p>
                        <p class="text-gray-500 text-[16px]
"><?php echo $education ?? 'BS Software Engineering'; ?></p>
                    </div>
                </div>
                <button class="text-blue-500 flex items-center border border-blue-500 rounded px-3 py-1 hover:bg-blue-50">
                    <i class="fas fa-edit mr-1"></i> Edit
                </button>
            </div>
        </div>

        <!-- Websites and Accounts Section -->
        <div class="bg-white rounded-lg shadow-md mb-6 p-5">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-[rgba(2,53,100,1)]

">Website and Accounts</h2>
                <button class="text-blue-500 flex items-center border border-blue-500 rounded px-3 py-1 hover:bg-blue-50">
                    <i class="fas fa-edit mr-1"></i> Edit
                </button>
            </div>
            
            <!-- Website Row -->
          <div class="flex items-center py-2 border-b"> 
    <div class="w-8 h-8 rounded-full bg-blue-900 flex items-center justify-center mr-3">
        <i class="fas fa-globe text-white text-[16px]
"></i>
    </div>
    <div class="flex-grow">
        <div class="flex items-center gap-[40px]">
            <p class="text-[16px] font-medium">Website</p>
            <a href="<?php echo $website_url ?? 'https://domain.name.com'; ?>" class="text-gray-500 hover:text-blue-500">
                <?php echo $website_url ?? 'https://domain.name.com'; ?>
            </a>
        </div>
    </div>
</div>

            
            <!-- Social Media Accounts -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-4">
                <!-- LinkedIn -->
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center">
                        <i class="fab fa-linkedin-in text-white"></i>
                    </div>
                    <p class="text-[16px]
 text-gray-600 mt-1">LinkedIn</p>
                    <div class="flex items-center text-xs text-blue-500 mt-1">
                        <i class="fas fa-edit mr-1"></i>
                        <span>@zulqarnao</span>
                    </div>
                </div>
                
                <!-- Behance -->
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center">
                        <i class="fab fa-behance text-white"></i>
                    </div>
                    <p class="text-[16px]
 text-gray-600 mt-1">Behance</p>
                    <div class="flex items-center text-xs text-blue-500 mt-1">
                        <i class="fas fa-edit mr-1"></i>
                        <span>@ZulqarnainFarooq</span>
                    </div>
                </div>
                
                <!-- Fiverr -->
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-green-500 flex items-center justify-center">
                        <i class="fas fa-globe text-white"></i>
                    </div>
                    <p class="text-[16px]
 text-gray-600 mt-1">Fiverr</p>
                    <div class="flex items-center text-xs text-blue-500 mt-1">
                        <i class="fas fa-edit mr-1"></i>
                        <span>@zulqarnainfa297</span>
                    </div>
                </div>
                
                <!-- Upwork -->
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full bg-gray-300 flex items-center justify-center">
                        <i class="fas fa-briefcase text-white"></i>
                    </div>
                    <p class="text-[16px]
 text-gray-600 mt-1">Upwork</p>
                    <div class="flex items-center text-xs text-blue-500 mt-1">
                        <i class="fas fa-edit mr-1"></i>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Resume Section -->
        <div class="bg-white rounded-lg shadow-md p-5">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-[rgba(2,53,100,1)]

">My Resume</h2>
                <button class="text-blue-500 flex items-center border border-blue-500 rounded px-3 py-1 hover:bg-blue-50">
                    <i class="fas fa-edit mr-1"></i> Edit
                </button>
            </div>
            
            <a href="#" class="text-blue-500 hover:underline text-[16px]
 mb-4 inline-block">Zulqarnain CV.PDF</a>
            
            <!-- Resume Content - This will be loaded from database -->
            <div id="resume-content" class="border rounded-md overflow-hidden">
                <?php
                // This is where you would load the resume content from the database
                // For now, just displaying a placeholder image to match your design
                ?>
                <img src="<?php echo $resume_image ?? 'images/resume.png'; ?>" alt="Resume Preview" class="w-[450px] h-[556px] ">
                
                <!-- Alternatively, if you're loading HTML content from database: -->
                <div class="p-4 hidden">
                    <?php echo $resume_html ?? ''; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- <script>
        // You can add JavaScript for any interactive elements here
        document.addEventListener('DOMContentLoaded', function() {
            // For example, handling edit button clicks
            const editButtons = document.querySelectorAll('button');
            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const section = this.closest('div').querySelector('h2')?.textContent || 'Profile';
                    alert(`Edit ${section} section`);
                });
            });
        });
    </script> -->
</body>
</html>