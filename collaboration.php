<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Collaboration</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">       <?php include 'navbar.php'; ?>

    <div class="flex min-h-screen">
        <!-- Left Sidebar -->
        <div class="w-64 bg-white p-6 border-r border-gray-200">
          <?php include 'left-sidebar.php'; ?>
        </div>
        <div class="flex-1 p-6">
            <div class="max-w-4xl mx-auto my-10 p-6 bg-white rounded-lg shadow-sm">
        <div class="mb-8 p-6">
            <h1 class="text-2xl text-center font-bold text-blue-900">Post Collaboration</h1>
            <p class="text-gray-600 mt-1">Share your collaboration with people so that you can work together on something amazing.</p>
        </div>

        <!-- Progress Bar -->
        <div class="mb-8 relative">
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-blue-600 h-2 rounded-full" style="width: 33%"></div>
            </div>
            <div class="text-right mt-1 text-sm text-gray-600">1/3</div>
        </div>

        <!-- Form -->
        <form action="process_collaboration.php" method="post" enctype="multipart/form-data">
            <div class="mb-6">
                <label for="title" class="block mb-2 font-medium text-blue-900">Collaboration Title</label>
                <input type="text" id="title" name="title" placeholder="Enter the Title of the Collaboration" 
                    class="w-full p-3 border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-6">
                <label for="description" class="block mb-2 font-medium text-blue-900">Write Description</label>
                <div class="relative">
                    <textarea id="description" name="description" rows="4" placeholder="Enter the description of the job"
                        class="w-full p-3 border border-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                    <button type="button" class="absolute right-3 bottom-3 text-gray-400">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="21" y1="10" x2="3" y2="10"></line>
                            <line x1="21" y1="6" x2="3" y2="6"></line>
                            <line x1="21" y1="14" x2="3" y2="14"></line>
                            <line x1="21" y1="18" x2="3" y2="18"></line>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="mb-8">
                <label class="block mb-2 font-medium text-blue-900">Add Media <span class="font-normal text-gray-500">(Case Study of the Idea)</span></label>
                <div class="border border-dashed border-blue-500 rounded-lg p-10 text-center ">
                    <div class="flex flex-col items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-900 mb-2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                        </svg>
                        <p class="mb-2 text-sm text-gray-700">Drag and Drop or <a href="#" class="text-blue-500">Click to Upload</a></p>
                        <input type="file" id="media" name="media" class="hidden">
                        <p class="text-xs text-gray-500">Supported formats: JPG, PNG, PDF, SVG, MP4 <span class="ml-1">Max Size: 25MB</span></p>
                    </div>
                </div>
            </div>

            <div class="flex justify-between">
                <button type="button" class="px-6 py-2 border border-red-300 text-red-500 rounded-lg hover:bg-red-50">
                    Cancel
                </button>
                <button type="submit" class="px-8 py-2 bg-blue-900 text-white rounded-lg hover:bg-blue-800">
                    Next
                </button>
            </div>
        </form>

        <?php
        // PHP Processing Logic would go here
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Process form submission
            $title = htmlspecialchars($_POST['title'] ?? '');
            $description = htmlspecialchars($_POST['description'] ?? '');
            
            // File upload handling
            if (isset($_FILES['media']) && $_FILES['media']['error'] == 0) {
                $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'svg', 'mp4');
                $filename = $_FILES['media']['name'];
                $filetype = pathinfo($filename, PATHINFO_EXTENSION);
                
                if (in_array(strtolower($filetype), $allowed)) {
                    $max_size = 25 * 1024 * 1024; // 25MB
                    if ($_FILES['media']['size'] <= $max_size) {
                        // File is valid, process it
                        // In a real application, you'd move the file to a permanent location
                        // move_uploaded_file($_FILES['media']['tmp_name'], 'uploads/' . $filename);
                    } else {
                        echo '<p class="text-red-500 mt-4">File is too large. Maximum size is 25MB.</p>';
                    }
                } else {
                    echo '<p class="text-red-500 mt-4">Invalid file type. Allowed types: JPG, PNG, PDF, SVG, MP4</p>';
                }
            }
            
            // In a real application, you would save data to database here
            // Then redirect to the next page
            // header('Location: collaboration_step2.php');
        }
        ?>
    </div></div>
    
</body>
</html>