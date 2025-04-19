<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adding Post</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">       <?php include 'navbar.php'; ?>

    <div class="flex min-h-screen">
        <!-- Left Sidebar -->
        <div class="w-64 bg-white p-6 border-r border-gray-200">
          <?php include 'left-sidebar.php'; ?>
        </div>
     <div class="flex-1 p-6">
            <div class="max-w-4xl mx-auto bg-white rounded-md shadow-sm">        
        <div class="p-6">
            <h1 class="text-2xl font-bold text-center text-[rgba(2,53,100,1)]">Adding Post</h1>
            <p class="text-gray-500 text-center text-sm mt-1">Share updates and post anything you want to share with your connections</p>
            
            <!-- Progress Bar -->
            <div class="mt-6 relative">
                <div class="w-full bg-gray-200 h-1 rounded-full">
                    <div class="bg-blue-600 h-1 rounded-full" style="width: 100%;"></div>
                </div>
                <div class="text-gray-400 text-sm absolute right-0 top-2">1/1</div>
            </div>
        </div>

        <!-- Form Content -->
        <form action="process_post.php" method="post" enctype="multipart/form-data" class="px-6 pb-6">
            <!-- Description Field -->
            <div class="mb-6">
                <label for="description" class="block text-[rgba(2,53,100,1)] font-bold mb-2">Write Description</label>
                <div class="relative">
                    <textarea id="description" name="description" rows="4" 
                        class="w-full p-3 border border-gray-500 rounded-lg  focus:outline-none focus:ring-2 focus:ring-blue-500" 
                        placeholder="Enter the description of the job"></textarea>
                    <button type="button" class="absolute right-3 bottom-3 text-gray-400">
                        <i class="fas fa-align-left"></i>
                    </button>
                </div>
            </div>
            
            <!-- Media Upload Section -->
            <div class="mb-6">
                <label class="block text-[rgba(2,53,100,1)] font-bold mb-2">Add Media</label>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 flex flex-col items-center justify-center">
                    <div class="text-gray-400 mb-2">
                        <i class="far fa-file-alt text-2xl"></i>
                    </div>
                    <p class="text-center mb-2">
                        <span class="text-gray-500">Drag and Drop or</span> 
                        <span class="text-blue-500 cursor-pointer">Click to Upload</span>
                    </p>
                    <p class="text-gray-400 text-sm text-center">
                        Supported formats: JPG, PNG, PDF, SVG, MP4 <span class="font-medium">Max Size: 25MB</span>
                    </p>
                    <input type="file" name="media" id="media" class="hidden" accept=".jpg,.jpeg,.png,.pdf,.svg,.mp4">
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="flex justify-between">
                <button type="button" class="px-6 py-2 border border-red-500 text-red-500 rounded-md hover:bg-red-50 transition-colors">
                    Cancel
                </button>
                <button type="submit" class="px-10 py-2 bg-blue-900 text-white rounded-md hover:bg-blue-800 transition-colors">
                    Post
                </button>
            </div>
        </form>
    </div>

    <script>
        // Script to handle the file upload click functionality
        document.addEventListener('DOMContentLoaded', function() {
            const uploadArea = document.querySelector('.border-dashed');
            const fileInput = document.getElementById('media');
            
            uploadArea.addEventListener('click', function() {
                fileInput.click();
            });
            
            fileInput.addEventListener('change', function() {
                if (this.files.length > 0) {
                    const fileName = this.files[0].name;
                    // You could display the file name here if desired
                    console.log('File selected:', fileName);
                }
            });
            
            // Drag and drop functionality
            uploadArea.addEventListener('dragover', function(e) {
                e.preventDefault();
                this.classList.add('border-blue-500');
            });
            
            uploadArea.addEventListener('dragleave', function() {
                this.classList.remove('border-blue-500');
            });
            
            uploadArea.addEventListener('drop', function(e) {
                e.preventDefault();
                this.classList.remove('border-blue-500');
                
                if (e.dataTransfer.files.length > 0) {
                    fileInput.files = e.dataTransfer.files;
                    const fileName = e.dataTransfer.files[0].name;
                    console.log('File dropped:', fileName);
                }
            });
        });
    </script>
</body>
</html>