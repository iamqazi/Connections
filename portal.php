<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg font-sans">
     <?php include 'navbar.php'; ?>

    <div class="flex p-4 gap-4">
        <!-- Left Sidebar -->
        <div class="w-64 bg-white rounded-lg shadow p-4">
            <div class="mb-4">
                <button class="flex items-center w-full p-2 text-gray-500 rounded-lg hover:bg-gray-100">
                    <span class="w-8 h-8 mr-2 flex items-center justify-center bg-gray-400 rounded-full">
                        <i class="fas fa-globe text-white text-sm"></i>
                    </span>
                    <span>All Portals</span>
                </button>
            </div>
            
            <hr class="my-4">
            
            <div class="space-y-2">
                <button class="flex items-center w-full p-2 text-blue-600 font-medium bg-blue-50 rounded-lg">
                    <span class="w-8 h-8 mr-2 flex items-center justify-center">
                        <i class="fas fa-briefcase text-blue-600"></i>
                    </span>
                    <span>Opportunity Portals</span>
                </button>
                
                <button class="flex items-center w-full p-2 text-gray-500 rounded-lg hover:bg-gray-100">
                    <span class="w-8 h-8 mr-2 flex items-center justify-center">
                        <i class="fas fa-book-open text-gray-500"></i>
                    </span>
                    <span>Research Community</span>
                </button>
                
                <button class="flex items-center w-full p-2 text-gray-500 rounded-lg hover:bg-gray-100">
                    <span class="w-8 h-8 mr-2 flex items-center justify-center">
                        <i class="fas fa-rocket text-gray-500"></i>
                    </span>
                    <span>Startup Portals</span>
                </button>
                
                <button class="flex items-center w-full p-2 text-gray-500 rounded-lg hover:bg-gray-100">
                    <span class="w-8 h-8 mr-2 flex items-center justify-center">
                        <i class="fas fa-users text-gray-500"></i>
                    </span>
                    <span>Collaboration Community</span>
                </button>
            </div>
        </div>
        
        <!-- Middle Content -->
        <div class="flex-1">
            <!-- Stats Bar -->
            <div class="bg-white rounded-lg shadow mb-4 p-6">
                <div class="flex justify-between">
                    <div class="text-center">
                        <div class="text-lg font-semibold">All Portals</div>
                        <div class="text-2xl font-bold text-blue-600">04</div>
                        <div class="border-t-4 border-blue-600 w-16 mx-auto mt-2"></div>
                    </div>
                    
                    <div class="text-center">
                        <div class="text-lg font-semibold flex items-center justify-center">
                            Created by you
                            <span class="ml-1 w-5 h-5 bg-blue-600 text-white text-xs rounded-full flex items-center justify-center">
                                1
                            </span>
                        </div>
                        <div class="text-2xl font-bold">01</div>
                    </div>
                    
                    <div class="text-center">
                        <div class="text-lg font-semibold">Joined by you</div>
                        <div class="text-2xl font-bold">03</div>
                    </div>
                </div>
            </div>
            
            <!-- Opportunities List -->
            <div class="bg-white rounded-lg shadow p-6">
                <!-- Job 1 -->
                <div class="flex items-center py-4">
                    <div class="w-12 h-12 mr-4">
                        <div class="w-12 h-12 bg-purple-200 rounded-lg overflow-hidden flex items-center justify-center">
                            <img src="https://via.placeholder.com/50" alt="Company Logo" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <div class="flex-1">
                        <h3 class="text-blue-500 font-semibold text-lg">Senior UI/UX Designer | Figma Expert</h3>
                        <p class="text-gray-700">Company Name</p>
                        <p class="text-gray-500 text-sm">Location (Type: Remote)</p>
                        <p class="text-gray-500 text-sm">Time Created:</p>
                    </div>
                </div>
                
                <!-- Job 2 -->
                <div class="flex items-center py-4 border-t border-gray-200">
                    <div class="w-12 h-12 mr-4">
                        <div class="w-12 h-12 bg-blue-200 rounded-lg overflow-hidden flex items-center justify-center">
                            <img src="https://via.placeholder.com/50" alt="Creative Studio Logo" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <div class="flex-1">
                        <h3 class="text-blue-500 font-semibold text-lg">Junior Graphic Designer | Illustrator Enthusiast</h3>
                        <p class="text-gray-700">Creative Studio</p>
                        <p class="text-gray-500 text-sm">Location (Type: In-Office)</p>
                        <p class="text-gray-500 text-sm">Time Created: 2 days ago</p>
                    </div>
                </div>
                
                <!-- Job 3 -->
                <div class="flex items-center py-4 border-t border-gray-200">
                    <div class="w-12 h-12 mr-4">
                        <div class="w-12 h-12 bg-teal-200 rounded-lg overflow-hidden flex items-center justify-center">
                            <img src="https://via.placeholder.com/50" alt="Tech Startup Logo" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <div class="flex-1">
                        <h3 class="text-blue-500 font-semibold text-lg">Product Designer | Adobe XD Specialist</h3>
                        <p class="text-gray-700">Tech Startup</p>
                        <p class="text-gray-500 text-sm">Location (Type: Hybrid)</p>
                        <p class="text-gray-500 text-sm">Time Created: 1 week ago</p>
                    </div>
                </div>
                
                <!-- Job 4 -->
                <div class="flex items-center py-4 border-t border-gray-200">
                    <div class="w-12 h-12 mr-4">
                        <div class="w-12 h-12 bg-purple-200 rounded-lg overflow-hidden flex items-center justify-center">
                            <img src="https://via.placeholder.com/50" alt="Digital Agency Logo" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <div class="flex-1">
                        <h3 class="text-blue-500 font-semibold text-lg">UX Researcher | Sketch Pro</h3>
                        <p class="text-gray-700">Digital Agency</p>
                        <p class="text-gray-500 text-sm">Location (Type: Remote)</p>
                        <p class="text-gray-500 text-sm">Time Created: 3 weeks ago</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Sidebar -->
        <div class="w-72 bg-white rounded-lg shadow p-4">
            <h2 class="text-lg font-semibold mb-4">Explore Opportunities</h2>
            
            <!-- Featured Job 1 -->
            <div class="mb-6">
                <div class="flex items-start mb-2">
                    <div class="w-10 h-10 mr-2">
                        <div class="w-10 h-10 bg-purple-200 rounded overflow-hidden flex items-center justify-center">
                            <img src="https://via.placeholder.com/40" alt="Company Logo" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-blue-500 font-medium">Senior UI/UX Designer | Figma Expert</h3>
                        <p class="text-gray-700 text-sm">Company Name</p>
                        <p class="text-gray-500 text-xs">Location (Type: Remote)</p>
                        <p class="text-gray-500 text-xs">Time Created:</p>
                    </div>
                </div>
                <button class="float-right text-blue-500 border border-blue-500 rounded-md px-4 py-1 text-sm flex items-center">
                    Learn Now
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
            
            <!-- Featured Job 2 -->
            <div class="mb-6">
                <div class="flex items-start mb-2">
                    <div class="w-10 h-10 mr-2">
                        <div class="w-10 h-10 bg-gray-300 rounded-full overflow-hidden flex items-center justify-center">
                            <img src="https://via.placeholder.com/40" alt="Profile Picture" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-blue-500 font-medium">Design a social media Webapp | Frontend</h3>
                        <p class="text-gray-700 text-sm">Budget: 40k-50k</p>
                        <p class="text-gray-500 text-xs">Time: Less than a month</p>
                        <p class="text-gray-500 text-xs">Time Created:</p>
                    </div>
                </div>
                <button class="float-right text-blue-500 border border-blue-500 rounded-md px-4 py-1 text-sm flex items-center">
                    Learn Now
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</body>
</html>