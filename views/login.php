<?php
require __DIR__ . '/partials/header.php';
require __DIR__ . '/partials/flash_message.php';

?>

<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md mt-8">
    <h2 class="text-2xl font-semibold text-indigo-700 mb-6 text-center">Login</h2>
    <form method="post" action="index.php?action=login" class="space-y-4">
        <label for="email" class="block mb-2 font-semibold">Email:</label>
        <input
            type="email"
            id="email"
            name="email"
            required
            value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>"
            class="w-full p-2 mb-4 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">

        <label for="password" class="block mb-2 font-semibold">Senha:</label>
        <input
            type="password"
            id="password"
            name="password"
            required
            class="w-full p-2 mb-6 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500">

        <button
            type="submit"
            class="w-full bg-indigo-600 text-white font-semibold py-2 rounded hover:bg-indigo-700 transition">
            Entrar
        </button>
    </form>

    <p class="text-center mt-6 text-gray-600">
        Não tem uma conta?
        <a href="index.php?action=register" class="text-indigo-600 hover:underline">Registre-se aqui.</a>
    </p>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>