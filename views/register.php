<?php require __DIR__ . '/partials/header.php'; ?>

<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md mt-8">
    <h2 class="text-2xl font-semibold text-indigo-700 mb-6 text-center">Cadastro de Usuário</h2>

    <?php if (!empty($_SESSION['flash_message'])): ?>
        <div class="mb-4 p-3 rounded text-white bg-red-500">
            <?= htmlspecialchars($_SESSION['flash_message']) ?>
        </div>
        <?php unset($_SESSION['flash_message']); ?>
    <?php endif; ?>

    <form method="post" action="index.php?action=register" class="space-y-4">
        <div>
            <label for="name" class="block text-gray-700 font-medium mb-1">Nome</label>
            <input type="text" id="name" name="name" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>">
        </div>

        <div>
            <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
            <input type="email" id="email" name="email" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
        </div>

        <div>
            <label for="password" class="block text-gray-700 font-medium mb-1">Senha</label>
            <input type="password" id="password" name="password" required
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded hover:bg-indigo-700 transition">Cadastrar</button>
    </form>

    <p class="mt-6 text-center text-gray-600">
        Já tem conta? <a href="index.php?action=login" class="text-indigo-600 hover:underline">Entrar</a>
    </p>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
