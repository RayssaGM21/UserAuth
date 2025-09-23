<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UserAuth</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col mx-auto">
    <header class="bg-white shadow-md">
        <div class="max-w-full py-4 px-10 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-indigo-600">UserAuth</h1>
            <nav class="space-x-4 flex items-center">
                <a href="index.php" class="text-gray-700 hover:text-indigo-600">Início</a>
                <a href="index.php?action=register" class="text-gray-700 hover:text-indigo-600">Cadastrar</a>
                <a href="index.php?action=login" class="text-gray-700 hover:text-indigo-600">Login</a>
                <a href="index.php?action=users" class="text-gray-700 hover:text-indigo-600">Usuários</a>
                <?php if (!empty($_SESSION['user_email'])): ?>
                    <form method="post" action="index.php?action=logout" title="Sair" class="inline">
                        <button type="submit" class="text-gray-700 hover:text-indigo-700 transition" aria-label="Sair">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                            </svg>
                        </button>
                    </form>
                <?php endif; ?>

            </nav>
        </div>
    </header>
    <main class="flex-grow max-w-full">