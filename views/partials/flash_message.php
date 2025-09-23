<?php if (!empty($_SESSION['flash_message'])):
    $type = $_SESSION['flash_type'] ?? 'error';

    $colors = [
        'success' => 'bg-green-200 text-green-800',
        'error' => 'bg-red-200 text-red-800',
    ];

    $colorClass = $colors[$type] ?? $colors['error'];
?>
    <p id="flash-message" class="fixed bottom-5 right-5 mb-4 p-3 rounded shadow-lg min-w-[300px] <?= $colorClass ?>">
        <?= htmlspecialchars($_SESSION['flash_message']) ?>
    </p>
    <?php unset($_SESSION['flash_message'], $_SESSION['flash_type']); ?>
    <script>
        setTimeout(() => {
            const flash = document.getElementById('flash-message');
            if (flash) {
                flash.style.transition = 'opacity 0.8s ease';
                flash.style.opacity = '0';
                setTimeout(() => flash.remove(), 800);
            }
        }, 5000);
    </script>
<?php endif; ?>
