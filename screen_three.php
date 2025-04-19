<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="output.css">

    <title>Screen 3</title>
    <style>
        .dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #ccc;
            margin: 0 5px;
        }
        .dot.active {
            background-color: #023564;
        }
    </style>
</head>
<body class="bg-white flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-[#023564] mt-10 text-4xl font-bold">Personalized AI Experience</h1>
        <img src="images/group.svg" class="mx-auto my-6 w-90" alt="Description of the image">
        
         <div class="flex flex-col items-center justify-center">
            <img src="images/screen_three.svg" class="mx-auto my-6" />
             <h1 class="text-[#023564] mt-10 text-2xl font-bold">AI-Powered Personalized Feeds</h1>
            <p class="mb-4 text-gray-600 ">Get tailored opportunities and updates based on your interests.<br>Let AI help you stay on top of what matters most to you!</p>
        </div>

        <!-- Dots for navigation -->
        <div class="flex justify-center mt-4">
            <span id="dot1" class="dot"></span>
            <span id="dot2" class="dot"></span>
            <span id="dot3" class="dot active"></span>
        </div>

          <!-- Next Button -->
        <div class="my-6">
        <button id="nextButton" class="bg-customBlue w-[350px] h-[60px] text-white px-6 py-2 rounded-lg hover:bg-[#023564]">
        Continue
        </button>
        </div>

        <div>
            <button class="flex my-6 mx-auto">
                Skip Intro
                <img src="images/Advance.svg" class="pl-2" /><img src="images/Advance.svg" />
            </button>
        </div>
    </div>

    <script>
        // Handle the dot update on the current page
        function updateDots(screenNumber) {
            for (let i = 1; i <= 3; i++) {
                const dot = document.getElementById('dot' + i);
                if (i <= screenNumber) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            }
        }

        // Set the screen number for the third screen
        updateDots(3); // Next button functionality
        document.getElementById('nextButton').addEventListener('click', function() {
            // Navigate to the next screen and update dots accordingly
            window.location.href = 'signup.php'; // Change this to your actual URL for the next screen
            updateDots(3); // Update dots for screen 3
        });
    </script>
</body>
</html>
