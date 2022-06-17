<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome</title>
  <link rel="stylesheet" href="views/css/style.css">
</head>

<body>
  <div class="mx-auto text-center p-1 bg-slate-50 shadow-md rounded-lg flex flex-col h-screen justify-center md:max-w-lg">
    <div class="shadow-lg bg-white py-3 px-2 rounded-lg">
      <h1 class="text-xl font-bold"><?= $name ?></h1>
      <hr class="border-slate-300 border" />
      <p class="my-2">How are u today? Btw, u're login as <?= $role ?></p>
      <form method="POST">
        <button type="submit" name="logout" class="py-1 px-2 bg-slate-600 text-white rounded-md shadow-md focus:outline-none focus:ring-1 focus:ring-slate-200 active:bg-slate-800 hover:bg-slate-500">
          Logout
        </button>
      </form>
    </div>
  </div>
</body>

</html>