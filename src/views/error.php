<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Error has occurred</title>
  <link rel="stylesheet" href="views/css/style.css">
</head>

<body>
  <div class="mx-auto text-center p-1 bg-slate-50 shadow-md rounded-lg flex flex-col h-screen justify-center md:max-w-lg">
    <div class="shadow-lg bg-red-300 py-3 px-2 rounded-lg">
      <h1 class="text-xl font-bold text-red-500">An Error has happened!</h1>
      <hr class="border-red-400 border" />
      <p class="my-2 text-white"><?= $message ?></p>
      <button onclick="location.href='<?= $goto ?>'" class="py-1 px-2 bg-red-400 text-red-600 font-semibold rounded-md shadow-md focus:outline-none focus:ring-1 focus:ring-red-400 active:bg-red-800 hover:opacity-90">
        Back to Home
      </button>
    </div>
  </div>
</body>

</html>