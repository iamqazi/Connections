<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Interests</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'custom-blue': '#023564',
                    }
                }
            }
        }
    </script>
</head>
<body class=" font-sans bg-gray-50 p-4"> <?php include 'navbar.php'; ?>

  <div class="flex min-h-screen">
    <!-- Left Sidebar -->
    <div class="w-64 bg-white p-6 border-r border-gray-200">
      <?php include 'left-sidebar-2.php'; ?>
    </div>
    <div class="max-w-6xl mx-auto">
        <!-- Selected Interests Section -->
        <div class="bg-white rounded-lg border border-gray-200 p-6 mb-6">
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-lg font-medium text-gray-700">Your Interests</h2>
                    <p class="text-sm text-gray-500">40</p>
                </div>
                <button class="flex items-center text-custom-blue hover:opacity-80">
                    <i class="fas fa-home mr-2"></i>
                    <span class="font-medium">Edit</span>
                </button>
            </div>
            
            <div class="flex flex-wrap gap-2">
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>Artificial Intelligence</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>Blockchain</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>Design and Arts</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>React JS</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>React JS</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>React JS</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>React JS</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>React JS</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>App development</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>Virtual Reality Developer</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>User Experience Design</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>Tag 1 related</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>Tag 1 related</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>Tag 1 related</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>Tag 1 related</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
                <div class="bg-custom-blue text-white px-4 py-2 rounded-full flex items-center">
                    <span>Tag 1 related</span>
                    <button class="ml-2 focus:outline-none">×</button>
                </div>
            </div>
        </div>
        
        <!-- Add More Interests Section -->
        <h2 class="text-lg font-medium text-gray-700 mb-4">Add More Interests</h2>
        
        <!-- Search Bar -->
        <div class="relative mb-6">
            <input type="text" placeholder="Search the tags" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-custom-blue">
            <button class="absolute right-3 top-2.5 text-gray-500">
                <i class="fas fa-search"></i>
            </button>
        </div>
        
        <!-- Recommended Tags -->
        <div class="mb-6">
        <h3 class="text-gray-600 font-bold text-base leading-[100%] mb-4">Recommended</h3>

            <div class="flex flex-wrap gap-3">
                <button class="flex items-center border border-custom-blue text-gray-700 px-4 py-2 rounded-full hover:bg-gray-100">
                    <span>Artificial Intelligence</span>
                    <span class="ml-2 text-custom-blue">+</span>
                </button>
                <button class="flex items-center border border-custom-blue text-gray-700 px-4 py-2 rounded-full hover:bg-gray-100">
                    <span>Blockchain</span>
                    <span class="ml-2 text-custom-blue">+</span>
                </button>
                <button class="flex items-center border border-custom-blue text-gray-700 px-4 py-2 rounded-full hover:bg-gray-100">
                    <span>Design and Arts</span>
                    <span class="ml-2 text-custom-blue">+</span>
                </button>
                <button class="flex items-center border border-custom-blue text-gray-700 px-4 py-2 rounded-full hover:bg-gray-100">
                    <span>React JS</span>
                    <span class="ml-2 text-custom-blue">+</span>
                </button>
                <button class="flex items-center border border-custom-blue text-gray-700 px-4 py-2 rounded-full hover:bg-gray-100">
                    <span>React JS</span>
                    <span class="ml-2 text-custom-blue">+</span>
                </button>
                <button class="flex items-center border border-custom-blue text-gray-700 px-4 py-2 rounded-full hover:bg-gray-100">
                    <span>App development</span>
                    <span class="ml-2 text-custom-blue">+</span>
                </button>
                <button class="flex items-center border border-custom-blue text-gray-700 px-4 py-2 rounded-full hover:bg-gray-100">
                    <span>Virtual Reality Developer</span>
                    <span class="ml-2 text-custom-blue">+</span>
                </button>
                <button class="flex items-center border border-custom-blue text-gray-700 px-4 py-2 rounded-full hover:bg-gray-100">
                    <span>User Experience Design</span>
                    <span class="ml-2 text-custom-blue">+</span>
                </button>
                <button class="flex items-center border border-custom-blue text-gray-700 px-4 py-2 rounded-full hover:bg-gray-100">
                    <span>Tag 1 related</span>
                    <span class="ml-2 text-custom-blue">+</span>
                </button>
                <button class="flex items-center border border-custom-blue text-gray-700 px-4 py-2 rounded-full hover:bg-gray-100">
                    <span>Tag 1 related</span>
                    <span class="ml-2 text-custom-blue relative">
                        +
                        <span class="absolute -top-1 -right-1 bg-orange-500 rounded-full w-2 h-2"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>

    <?php
    // PHP code to handle the tag selection/deselection
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Handle adding tags
        if (isset($_POST['add_tag'])) {
            $tag = $_POST['add_tag'];
            // Add the tag to the user's interests in your database
            // This is where you'd implement your database logic
        }
        
        // Handle removing tags
        if (isset($_POST['remove_tag'])) {
            $tag = $_POST['remove_tag'];
            // Remove the tag from the user's interests in your database
            // This is where you'd implement your database logic
        }
    }

    // Get the user's current interests from your database
    // Example code:
    // $user_id = $_SESSION['user_id'];
    // $interests = getUserInterests($user_id);
    
    // Get recommended tags
    // Example code:
    // $recommended_tags = getRecommendedTags($user_id);
    ?>

    <script>
        // JavaScript for handling tag interactions
        document.addEventListener('DOMContentLoaded', function() {
            // Add tag functionality
            const addButtons = document.querySelectorAll('.add-tag');
            addButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const tagName = this.getAttribute('data-tag');
                    // You could use AJAX to send this to your PHP backend
                    console.log('Adding tag:', tagName);
                    
                    // Example AJAX request
                    // fetch('process_tags.php', {
                    //     method: 'POST',
                    //     body: JSON.stringify({ add_tag: tagName }),
                    //     headers: { 'Content-Type': 'application/json' }
                    // }).then(response => response.json())
                    //   .then(data => { console.log('Success:', data); })
                    //   .catch(error => { console.error('Error:', error); });
                });
            });
            
            // Remove tag functionality
            const removeButtons = document.querySelectorAll('.remove-tag');
            removeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const tagName = this.getAttribute('data-tag');
                    console.log('Removing tag:', tagName);
                    
                    // Similar AJAX request for removal
                });
            });
        });
    </script>
</body>
</html>