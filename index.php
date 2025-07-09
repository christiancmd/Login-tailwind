<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <title>Document</title>
</head>

<body>
  <header class="bg-gray-800 p-4 text-white flex justify-between items-center">
    <h1>ClinicaApp</h1>
    <nav>
      <ul class="flex space-x-4">
        <li><a href="#" class="text-white">Home</a></li>
        <li><a href="#" class="text-white">About</a></li>
        <li><a href="#" class="text-white">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main class=" w-full h-[calc(100vh-4rem)] ">
    <section class="bg-purple-200 w-full h-full flex justify-center items-center gap-4 flex-wrap">

      <article
        class=" w-[250px] md:w-[300px] lg:w-[350px] h-[350px] bg-white rounded-lg overflow-hidden shadow-[0_0_0_2px_rgba(0,0,0,0.3)] hover:shadow-[0_0_0_4px_rgba(0,0,0,0.3)] transition-shadow duration-300 ease-in-out">
        <header class="bg-purple-300 py-1">
          <h2 class="text-xl font-bold p-4">Card Title</h2>
        </header>

        <div class=" p-6 ">
          <hgroup>
            <h3 class="text-s font-semibold mb-2">Card Subtitle</h3>
            <p class="text-gray-700 mb-4 text-justify">This is a brief description of the card content. It provides an
              overview of
              what the card is about.</p>
          </hgroup>
          <span
            class="block mx-auto w-[40px]  h-[2px] bg-black opacity-40  rounded-full shadow-[0_0_6px_rgba(0,0,0,0.3)]"></span>

        </div>
      </article>

      <article
        class="w-[250px] md:w-[300px] lg:w-[350px] h-[350px] h-[350px] bg-white rounded-lg overflow-hidden shadow-[0_0_0_2px_rgba(0,0,0,0.3)] hover:shadow-[0_0_0_4px_rgba(0,0,0,0.3)] transition-shadow duration-300 ease-in-out">

        <header class="bg-purple-300 py-1">
          <h2 class="text-xl font-bold p-4">Card Title</h2>
        </header>

        <div class=" p-6 ">
          <hgroup>
            <h3 class="text-s font-semibold mb-2">Card Subtitle</h3>
            <p class="text-gray-700 mb-4 text-justify">This is a brief description of the card content. It provides an
              overview of
              what the card is about.</p>
          </hgroup>
          <span
            class="block mx-auto w-[40px] h-[2px] bg-black opacity-40  rounded-full shadow-[0_0_6px_rgba(0,0,0,0.3)]"></span>
        </div>

      </article>
    </section>

  </main>

  <footer></footer>
</body>

</html>