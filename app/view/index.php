<?php

require_once 'Gestionairedecontact.php';


$gestion = new Gestiondecontact();


$gestion->addContact('John Doe', '123456789', 'john@example.com');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $name = $_POST["name"];
    $number = $_POST["number"];
    $email = $_POST["email"];

  
    $gestion->addContact($name, $number, $email);

  
    header("Location: index.php");
    exit();
}


$contacts = $gestion->getContacts();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.tailwindcss.com/2.2.19/tailwind.min.css" rel="stylesheet">
    <title>Gestion de contact</title>
</head>

<body>
    <header class="mt-7">
        <div class="text-center">
            <h1 class="text-5xl font-bold">
                Welcome to your gestion de contact
            </h1>
        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="text-3xl font-bold mb-4">Contact List</h2>
        <table class="border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="p-2 border border-gray-300">Name</th>
                    <th class="p-2 border border-gray-300">Number</th>
                    <th class="p-2 border border-gray-300">Email</th>
                    <th class="p-2 border border-gray-300"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td class="p-2 border border-gray-300"><?php echo $contact['name']; ?></td>
                    <td class="p-2 border border-gray-300"><?php echo $contact['number']; ?></td>
                    <td class="p-2 border border-gray-300"><?php echo $contact['email']; ?></td>
                    <td class="p-2 border border-gray-300">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded mr-2">Update</button>
                        <button class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded">Delete</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <footer class="fixed bottom-0 left-0 right-0 bg-gray-100 py-2 text-center">
        <a href="ajouterContact.php" class="text-blue-500 underline">Add Contact</a>
    </footer>
</body>

</html>
