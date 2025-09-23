<?php
require __DIR__ . '/partials/header.php';
?>

<section id="inicio" class="relative bg-gradient-to-br from-indigo-600 to-indigo-800 text-white overflow-hidden">

    <div class="absolute -top-10 -left-10 w-60 h-60 bg-white opacity-5 rounded-full blur-3xl animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full blur-2xl animate-ping"></div>

    <div class="max-w-7xl mx-auto px-6 py-20 text-center relative z-10 animate-fade-in">

        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight mb-4">
            Bem-vindo ao UserAuth
        </h1>

        <p class="text-base md:text-lg max-w-2xl mx-auto mb-8 leading-relaxed text-gray-100">
            Um sistema robusto de autenticação desenvolvido para garantir a segurança e facilidade no gerenciamento de usuários.
            Cadastre-se, faça login e visualize todos os usuários com uma interface moderna!
        </p>

        <a href="index.php?action=register"
            class="inline-block px-8 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-xl hover:shadow-2xl transition hover:scale-105 relative group cursor-pointer">

            <span class="relative z-10 cursor-pointer">Comece Agora - Cadastre-se</span>
            <span
                class="absolute inset-0 bg-white opacity-20 rounded-full blur-xl group-hover:opacity-40 transition"></span>
        </a>

        <p class="mt-8 italic text-gray-200 text-base">
            “A gestão de usuários, elevada a um novo nível”
        </p>
    </div>
</section>

<!-- Seção Funcionalidades -->
<section id="funcionalidades" class="bg-gray-50 py-16 px-6">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl text-indigo-900 mb-12">Funcionalidades Principais</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="bg-white rounded-xl shadow-md p-8 hover:shadow-lg transition">
                <div class="text-indigo-600 mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                    </svg>

                </div>
                <h3 class="text-xl font-semibold text-indigo-800 mb-3">Cadastro Seguro</h3>
                <p class="text-gray-700 leading-relaxed text-sm">
                    Validações rigorosas no cadastro garantem e-mails válidos e senhas fortes, aplicando hashing seguro com <code>password_hash</code> para máxima proteção dos dados.
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-md p-8 hover:shadow-lg transition">
                <div class="text-indigo-600 mb-5">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>

                </div>
                <h3 class="text-xl font-semibold text-indigo-800 mb-3">Login e Segurança</h3>
                <p class="text-gray-700 leading-relaxed text-sm">
                    Fluxo de login com validação de credenciais usando <code>password_verify</code>, gerenciamento de sessão e mensagens claras para melhor experiência do usuário.
                </p>
            </div>

            <div class="bg-white rounded-xl shadow-md p-8 hover:shadow-lg transition">
                <div class="text-indigo-600 mb-5">

                    <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                    </svg>

                </div>
                <h3 class="text-xl font-semibold text-indigo-800 mb-3">Gerenciamento com SQLite</h3>
                <p class="text-gray-700 leading-relaxed text-sm">
                    Integração com banco SQLite para persistência realista, garantindo um ambiente leve e eficiente para seus dados.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Seção Boas Práticas -->
<section id="boas-praticas" class="bg-indigo-900 py-20 px-6 text-white">
    <div class="max-w-7xl mx-auto text-center">
        <h2 class="text-3xl mb-12">Boas Práticas e Arquitetura</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-left">
            <div class="bg-indigo-800 rounded-lg p-8 shadow-md hover:bg-indigo-700 transition">
                <h3 class="text-xl font-semibold mb-3 flex items-center gap-2">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                    </svg>

                    PSR-12 e Clean Code
                </h3>
                <p class="text-sm leading-relaxed">
                    Código organizado e legível seguindo PSR-12, facilitando manutenção e colaboração, aliado aos princípios do Clean Code para qualidade máxima.
                </p>
            </div>

            <div class="bg-indigo-800 rounded-lg p-8 shadow-md hover:bg-indigo-700 transition">
                <h3 class="text-xl font-semibold mb-3 flex items-center gap-2">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                    </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M2.25 5.25a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3V15a3 3 0 0 1-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 0 1-.53 1.28h-9a.75.75 0 0 1-.53-1.28l.621-.622a2.25 2.25 0 0 0 .659-1.59V18h-3a3 3 0 0 1-3-3V5.25Zm1.5 0v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5Z" clip-rule="evenodd" />
                    </svg>

                    POO, DRY e KISS
                </h3>
                <p class="text-sm leading-relaxed">
                    Uso de POO para organização, DRY para evitar repetição, e KISS para simplicidade — facilitando futuras melhorias e compreensão do código.
                </p>
            </div>

            <div class="bg-indigo-800 rounded-lg p-8 shadow-md hover:bg-indigo-700 transition">
                <h3 class="text-xl font-semibold mb-3 flex items-center gap-2">

                    <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                    </svg> -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                    </svg>


                    Segurança Avançada
                </h3>
                <p class="text-sm leading-relaxed">
                    Armazenamento seguro de senhas com <code>password_hash</code>, validação rigorosa das entradas e proteção de sessões para evitar vulnerabilidades.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Seção Casos de Uso -->
<section id="casos-uso" class="bg-gray-50 py-16 px-6">
    <div class="max-w-5xl mx-auto text-indigo-900">
        <h2 class="text-3xl mb-4 text-center">Casos de Uso Testados</h2>
        <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
            Esses são os principais cenários que nossa aplicação foi validada para garantir uma experiência segura e confiável.
        </p>

        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
            <div class="flex space-x-4">
                <div class="flex-shrink-0 text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>

                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-1">Cadastro Válido</h3>
                    <p class="text-gray-700 leading-relaxed text-sm">
                        Registro bem-sucedido com validação de e-mail e senha forte.
                    </p>
                </div>
            </div>

            <div class="flex space-x-4">
                <div class="flex-shrink-0 text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-1">Cadastro com E-mail Inválido</h3>
                    <p class="text-gray-700 leading-relaxed text-sm">
                        Bloqueio imediato e mensagem clara de erro.
                    </p>
                </div>
            </div>

            <div class="flex space-x-4">
                <div class="flex-shrink-0 text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-1">Login com Senha Incorreta</h3>
                    <p class="text-gray-700 leading-relaxed text-sm">
                        Feedback imediato de credenciais inválidas.
                    </p>
                </div>
            </div>

            <div class="flex space-x-4">
                <div class="flex-shrink-0 text-yellow-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-1">Reset de Senha</h3>
                    <p class="text-gray-700 leading-relaxed text-sm">
                        Atualização segura com validação rigorosa e hash.
                    </p>
                </div>
            </div>

            <div class="flex space-x-4">
                <div class="flex-shrink-0 text-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0 1 19.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 0 0 4.5 10.5a7.464 7.464 0 0 1-1.15 3.993m1.989 3.559A11.209 11.209 0 0 0 8.25 10.5a3.75 3.75 0 1 1 7.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 0 1-3.6 9.75m6.633-4.596a18.666 18.666 0 0 1-2.485 5.33" />
                    </svg>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-1">Prevenção de E-mail Duplicado</h3>
                    <p class="text-gray-700 leading-relaxed text-sm">
                        Mensagem de erro imediata que evita conflitos no cadastro.
                    </p>
                </div>
            </div>

            <div class="flex space-x-4">
                <div class="flex-shrink-0 text-amber-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-10 h-10" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                    </svg>

                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-1">Validação de Senha Forte</h3>
                    <p class="text-gray-700 leading-relaxed text-sm">
                        Senhas com no mínimo 8 caracteres, incluindo letra maiúscula e número.
                    </p>

                </div>
            </div>
        </div>

    </div>
</section>

<!-- Call to Action Final -->
<section id="cta" class="bg-gradient-to-r from-indigo-900 to-indigo-700 py-20 px-6 text-white text-center">
    <h2 class="text-3xl md:text-3xl mb-6 drop-shadow">Pronto para experimentar um sistema seguro e eficiente?</h2>
    <p class="mb-10 max-w-xl mx-auto text-indigo-200 text-base md:text-lg leading-relaxed drop-shadow">
        Faça seu cadastro agora e veja como o UserAuth pode facilitar o gerenciamento de usuários na sua aplicação!
    </p>

    <a href="index.php?action=register"
        class="inline-block px-8 py-3 bg-white text-blue-700 font-semibold rounded-full shadow-xl hover:shadow-2xl transition hover:scale-105 relative group cursor-pointer">

        <span class="relative z-10 cursor-pointer">Cadastre-se Já</span>
        <span
            class="absolute inset-0 bg-white opacity-20 rounded-full blur-xl group-hover:opacity-40 transition"></span>
    </a>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>