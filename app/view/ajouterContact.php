<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com/2.2.19/tailwind.min.css" rel="stylesheet">
    <title>Ajouter Contact</title>
</head>

<body>
    <header class="mt-7">
        <div class="text-center">
            <h1 class="text-5xl font-bold">
                Add Contact
            </h1>
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <form class="max-w-md mx-auto" method="post" action="add-contact.php">
            <div class="mb-4">
                <label for="name" class="block font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="number" class="block font-bold mb-2">Number</label>
                <input type="text" id="number" name="number" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label for="email" class="block font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2">
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded">Add</button>
            </div>
        </form>
    </main>
</body>

</html>

