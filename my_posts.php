<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>My Posts</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
</head>
<body class="font-sans bg-gray-50 p-4">
  <?php include 'navbar.php'; ?>

  <div class="flex min-h-screen">
    <!-- Left Sidebar -->
    <div class="w-64 bg-white p-6 border-r border-gray-200">
      <?php include 'left-sidebar-2.php'; ?>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
      <!-- Filters Section -->
      <div class="max-w-7xl mx-auto border rounded-xl shadow-sm p-4 flex flex-wrap justify-between items-center mb-8">
        <div class="text-center border-b-2 border-blue-500 px-4">
          <p class="text-sm text-gray-500">All Posts</p>
          <p class="text-xl font-semibold text-blue-600">10</p>
        </div>
        <div class="text-center px-4">
          <p class="text-sm text-gray-500">Opportunity Listed</p>
          <p class="text-xl font-semibold">01</p>
        </div>
        <div class="text-center px-4">
          <p class="text-sm text-gray-500">Research Ideas</p>
          <p class="text-xl font-semibold">02</p>
        </div>
        <div class="text-center px-4">
          <p class="text-sm text-gray-500">Startup Ideas</p>
          <p class="text-xl font-semibold">02</p>
        </div>
        <div class="text-center px-4">
          <p class="text-sm text-gray-500">Collaborations</p>
          <p class="text-xl font-semibold">02</p>
        </div>
      </div>

      <!-- Image Grid -->
      <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Repeatable Image Card -->
        <div class="bg-white rounded-xl overflow-hidden shadow-md border w-[322px] h-[325.33px]">
          <img src="images/grid-img1.svg" alt="Freelance Design" class="w-[322px] h-[325.33px] object-cover">
        </div>
        <div class="bg-white rounded-xl overflow-hidden shadow-md border w-[322px] h-[325.33px]">
          <img src="images/grid-img2.svg" alt="AI Research" class="w-[322px] h-[325.33px] object-cover">
        </div>
        <div class="bg-white rounded-xl overflow-hidden shadow-md border w-[322px] h-[325.33px]">
          <img src="images/grid-img3.svg" alt="We Are Hiring" class="w-[322px] h-[325.33px] object-cover">
        </div>
        <div class="bg-white rounded-xl overflow-hidden shadow-md border w-[322px] h-[325.33px]">
          <img src="images/grid-img4.svg" alt="Cleaning Promo" class="w-[322px] h-[325.33px] object-cover">
        </div>
        <div class="bg-white rounded-xl overflow-hidden shadow-md border w-[322px] h-[325.33px]">
          <img src="images/grid-img5.svg" alt="AfroMoves" class="w-[322px] h-[325.33px] object-cover">
        </div>
        <div class="bg-white rounded-xl overflow-hidden shadow-md border w-[322px] h-[325.33px]">
          <img src="images/grid-img6.svg" alt="App Showcase" class="w-[322px] h-[325.33px] object-cover">
        </div>
      </div>
    </div>
  </div>
</body>
</html>
