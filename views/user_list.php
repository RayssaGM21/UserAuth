<?php
require __DIR__ . '/partials/header.php';
require __DIR__ . '/partials/flash_message.php';
?>

<div class="px-10 mt-8">
    <h2 class="text-2xl font-semibold text-indigo-700 mb-6">Lista de Usuários</h2>

    <?php if (empty($users)): ?>
        <p class="text-gray-600">Nenhum usuário cadastrado.</p>
    <?php else: ?>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow overflow-hidden w-full">
                <thead class="bg-gray-200 text-gray-700 uppercase text-sm">
                    <tr>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Nome</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-6"><?= htmlspecialchars((string)$user->getId()) ?></td>
                            <td class="py-3 px-6"><?= htmlspecialchars($user->getName()) ?></td>
                            <td class="py-3 px-6"><?= htmlspecialchars($user->getEmail()) ?></td>
                            <td class="py-3 px-6">
                                <button
                                    class="text-indigo-600 hover:text-indigo-800 font-medium"
                                    onclick="openResetModal(<?= $user->getId() ?>, '<?= htmlspecialchars($user->getName()) ?>')">
                                    Resetar Senha
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>

<!-- Modal -->
<div id="resetModal" class="fixed inset-0 bg-black bg-opacity-30 backdrop-blur-sm flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-lg p-6 w-full max-w-md shadow-lg relative">
        <h2 class="text-xl font-semibold text-indigo-700 mb-4">Resetar Senha de <span id="resetUserName"></span></h2>
        <form method="post" action="index.php?action=resetPassword">
            <input type="hidden" name="user_id" id="resetUserId" />

            <label for="new_password" class="block text-sm font-medium text-gray-700 mb-1">Nova Senha</label>
            <input
                type="password"
                name="new_password"
                id="new_password"
                required
                class="w-full px-4 py-2 border border-gray-300 rounded mb-4 focus:outline-none focus:ring-2 focus:ring-indigo-500" />

            <div class="flex justify-end space-x-3 mt-4">
                <button type="button" onclick="closeResetModal()" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded">Cancelar</button>
                <button type="submit" class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded">Salvar</button>
            </div>
        </form>

        <!-- Botão de Fechar -->
        <button onclick="closeResetModal()" class="absolute top-3 right-3 text-gray-400 hover:text-gray-600 text-xl">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>

<script>
    function openResetModal(userId, userName) {
        document.getElementById('resetUserId').value = userId;
        document.getElementById('resetUserName').innerText = userName;
        document.getElementById('resetModal').classList.remove('hidden');
    }

    function closeResetModal() {
        document.getElementById('resetModal').classList.add('hidden');
    }
</script>

<?php require __DIR__ . '/partials/footer.php'; ?>