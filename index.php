<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/tailwind.css">
  <link rel="stylesheet" href="./src/styles.css">
  <title>Trip</title>
</head>

<body>

<div class="flex items-center justify-center h-screen" style="background: url('img/wall.jpg')">
<div class="bg-gray-100 p-10 rounded-md bg-opacity-90">
<h1 class="text-5xl mb-10 flex justify-center font-bold">Jūsų kelionė</h1>

<form class="w-full max-w-lg" action="tripinfo" method="POST">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
        Dalyviai:
      </label>
      <input class="appearance-none block w-full bg-green-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-first-name" type="number" placeholder="Dalyvių skaičius" name="count" required >
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
        Atstumas:
      </label>
      <input class="appearance-none block w-full bg-green-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="number" placeholder="km" required name="km">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
        Per kiek dienų:
      </label>
      <input class="appearance-none block w-full bg-green-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" name="days" placeholder="Dienos" required type="number">
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
        Maistui €
      </label>
      <div class="relative">
        <input class="block appearance-none w-full bg-green-50 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" type="number" name="food" placeholder="10 €" required>
        </input>
      </div>
    </div>
    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
        Nakvynei €
      </label>
      <input class="appearance-none block w-full bg-green-50 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" class="" type="number" name="rest" placeholder="20 €" required>

    </div>
  </div>
  <div class="flex items-center justify-center mt-8">
  <button type="submit" name="button" class="bg-transparent hover:bg-green-500  font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
    Pradėti kelionę
  </button>
  </div>

</form>
</div>
</div>

</body>

</html>