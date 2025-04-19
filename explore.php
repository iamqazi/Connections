<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancing Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg">
 <?php include 'navbar.php'; ?>
    <div class="container mx-auto p-4 flex">
        <!-- Left Sidebar -->
        <div class="w-1/4 mr-4">
            <div class="bg-white rounded-lg p-4 shadow">
                <div class="p-2 flex items-center text-gray-500 mb-4">
                    <span class="bg-gray-400 rounded-full w-6 h-6 flex items-center justify-center mr-3">
                        <i class="fas fa-file-alt text-white text-xs"></i>
                    </span>
                    <span class="text-sm">Simple Post</span>
                </div>
                
                <div class="p-2 flex items-center bg-blue-50 rounded-lg text-blue-600 mb-4">
                    <span class="bg-blue-600 rounded-full w-6 h-6 flex items-center justify-center mr-3">
                        <i class="fas fa-briefcase text-white text-xs"></i>
                    </span>
                    <span class="text-sm font-medium">Opportunity Listing</span>
                </div>
                
                <div class="p-2 flex items-center text-gray-500 mb-4">
                    <span class="bg-gray-400 rounded-full w-6 h-6 flex items-center justify-center mr-3">
                        <i class="fas fa-book text-white text-xs"></i>
                    </span>
                    <span class="text-sm">Research Idea</span>
                </div>
                
                <div class="p-2 flex items-center text-gray-500 mb-4">
                    <span class="bg-gray-400 rounded-full w-6 h-6 flex items-center justify-center mr-3">
                        <i class="fas fa-lightbulb text-white text-xs"></i>
                    </span>
                    <span class="text-sm">Startup Idea</span>
                </div>
                
                <div class="p-2 flex items-center text-gray-500">
                    <span class="bg-gray-400 rounded-full w-6 h-6 flex items-center justify-center mr-3">
                        <i class="fas fa-users text-white text-xs"></i>
                    </span>
                    <span class="text-sm">Post a Collaboration</span>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="w-2/4 mx-4">
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <!-- Header -->
                <div class="p-4 flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="bg-gray-300 rounded-lg p-1 mr-2">
                            <i class="fas fa-laptop text-gray-500 text-xs"></i>
                        </span>
                        <span class="text-gray-500 text-sm">Freelancing Project</span>
                    </div>
                    <div class="flex items-center">
                        <span class="text-gray-500 text-sm mr-2">Created by</span>
                        <img src="https://via.placeholder.com/30" class="rounded-full w-6 h-6 mr-1" alt="Profile">
                        <span class="text-blue-600 text-sm">Abdullah Tajammal</span>
                    </div>
                </div>
                
                <!-- Project Details -->
                <div class="px-4 pb-4">
                    <div class="flex mb-2">
                        <img src="https://via.placeholder.com/60" class="w-12 h-12 rounded mr-3" alt="Project">
                        <div>
                            <h2 class="font-medium mb-1">Name of freelancing Project</h2>
                            <div class="flex flex-wrap mb-1">
                                <span class="bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded-full mr-1 mb-1">• Focus of Interest</span>
                                <span class="bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded-full mr-1 mb-1">• Focus of Interest</span>
                                <span class="bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded-full mr-1 mb-1">• Focus of Interest</span>
                                <span class="bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded-full mr-1 mb-1">• Focus of Int</span>
                                <span class="bg-blue-100 text-blue-600 text-xs px-2 py-1 rounded-full mb-1">+2</span>
                            </div>
                            <div class="text-gray-500 text-xs">4 days ago</div>
                        </div>
                    </div>
                    
                    <p class="text-gray-700 text-sm mb-2">Description of the post written by the Author. Varius bibendum egestas imperdiet purus risks dolor. Pellentesque quis blandit aenean sed nisl. Dolor nibh habitant mauris felis vivamus.</p>
                    <span class="text-blue-600 text-sm">...more</span>
                    
                    <!-- Project Image -->
                    <div class="mt-4 mb-4 border rounded-lg overflow-hidden relative">
                        <div class="bg-beige-100 p-4 relative">
                            <!-- Abstract shapes backdrop -->
                            <div class="absolute inset-0 opacity-20">
                                <div class="absolute top-10 left-10 w-20 h-20 bg-pink-300 rounded-full"></div>
                                <div class="absolute top-20 right-10 w-16 h-16 bg-green-300 rounded-full"></div>
                                <div class="absolute bottom-10 left-20 w-24 h-24 bg-yellow-300 rounded-full"></div>
                            </div>
                            
                            <!-- Center text box -->
                            <div class="flex flex-col justify-center items-center h-72">
                                <div class="bg-beige-50 border border-gray-300 rounded-lg p-4 text-center w-64">
                                    <div class="text-gray-700 text-xl mb-1">Freelance Design</div>
                                    <div class="text-gray-900 text-4xl font-bold tracking-wider">PROJECT</div>
                                </div>
                                
                                <!-- Apply Button -->
                                <div class="mt-8">
                                    <button class="bg-yellow-300 text-gray-700 px-4 py-1 rounded-full text-sm">Apply Now</button>
                                </div>
                            </div>
                            
                            <!-- Notebook binding effect -->
                            <div class="absolute left-0 inset-y-0 w-6 flex flex-col justify-around">
                                <div class="w-4 h-4 bg-gray-300 rounded-full mb-2"></div>
                                <div class="w-4 h-4 bg-gray-300 rounded-full mb-2"></div>
                                <div class="w-4 h-4 bg-gray-300 rounded-full mb-2"></div>
                                <div class="w-4 h-4 bg-gray-300 rounded-full mb-2"></div>
                                <div class="w-4 h-4 bg-gray-300 rounded-full mb-2"></div>
                                <div class="w-4 h-4 bg-gray-300 rounded-full mb-2"></div>
                                <div class="w-4 h-4 bg-gray-300 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Likes and Comments -->
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <img src="https://via.placeholder.com/20" class="w-5 h-5 rounded-full mr-1" alt="User">
                        <span>Faizan and 123 other likes</span>
                        <span class="ml-auto">22 comments</span>
                        <span class="ml-4 text-orange-500">•</span>
                    </div>
                    
                    <!-- Action buttons -->
                    <div class="flex border-t pt-2">
                        <button class="flex items-center justify-center w-1/4 text-gray-600 py-2">
                            <i class="far fa-thumbs-up mr-2"></i>
                            <span>Like</span>
                        </button>
                        <button class="flex items-center justify-center w-1/4 text-gray-600 py-2">
                            <i class="far fa-comment mr-2"></i>
                            <span>Comment</span>
                        </button>
                        <button class="flex items-center justify-center w-1/4 text-gray-600 py-2">
                            <i class="fas fa-download mr-2"></i>
                            <span>Download</span>
                        </button>
                        <button class="flex items-center justify-center w-1/4 text-gray-600 py-2">
                            <i class="fas fa-share mr-2"></i>
                            <span>Share</span>
                        </button>
                        <button class="flex items-center justify-center w-1/12 text-gray-600 py-2">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Sidebar - People Suggestions -->
        <div class="w-1/4 ml-4">
            <div class="bg-white rounded-lg p-4 shadow">
                <h3 class="text-sm font-medium mb-4 text-gray-700">Explore People</h3>
                
                <!-- Person Card -->
                <div class="mb-4">
                    <div class="flex items-center mb-2">
                        <div class="bg-blue-600 rounded-full w-8 h-8 flex items-center justify-center mr-3">
                            <span class="text-white font-bold">A</span>
                        </div>
                        <div>
                            <div class="font-medium text-sm">Abdullah Tajammal</div>
                            <div class="text-gray-500 text-xs">Profile Headline</div>
                        </div>
                        <button class="ml-auto bg-white border border-blue-500 text-blue-500 px-3 py-1 rounded-full text-xs flex items-center">
                            Connect
                            <i class="fas fa-external-link-alt ml-1 text-xs"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Course Card 1 -->
                <div class="mb-4">
                    <div class="flex items-start">
                        <div class="bg-blue-600 rounded w-8 h-8 flex items-center justify-center mr-3">
                            <span class="text-white font-bold">F</span>
                        </div>
                        <div class="flex-1">
                            <div class="font-medium text-sm">Fundamentals of UI/UX Designs | Figma</div>
                            <div class="text-xs text-gray-500 mt-1">
                                Interests: • <span class="text-gray-700">UI/UX Design</span> • <span class="text-gray-700">Figma</span>
                            </div>
                        </div>
                        <button class="ml-auto bg-white border border-blue-500 text-blue-500 px-3 py-1 rounded-full text-xs flex items-center">
                            Learn Now
                            <i class="fas fa-external-link-alt ml-1 text-xs"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Course Card 2 -->
                <div>
                    <div class="flex items-start">
                        <div class="bg-blue-600 rounded w-8 h-8 flex items-center justify-center mr-3">
                            <span class="text-white font-bold">F</span>
                        </div>
                        <div class="flex-1">
                            <div class="font-medium text-sm">Fundamentals of UI/UX Designs | Figma</div>
                            <div class="text-xs text-gray-500 mt-1">
                                Interests: • <span class="text-gray-700">UI/UX Design</span> • <span class="text-gray-700">Figma</span>
                            </div>
                        </div>
                        <button class="ml-auto bg-white border border-blue-500 text-blue-500 px-3 py-1 rounded-full text-xs flex items-center">
                            Learn Now
                            <i class="fas fa-external-link-alt ml-1 text-xs"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>