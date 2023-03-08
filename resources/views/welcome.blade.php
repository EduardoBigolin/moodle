<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <x-header />
    <main>
        <div class="relative">
            <h1 class=" absolute inset-0 flex items-center justify-center text-2xl text-green-500 font-bold z-50">Seja Bem Vindo ao Campus IFRS Bento Gonçalves</h1>
            <div class="bg-gray-800 absolute inset-0 flex items-center justify-center opacity-50"></div>
            <img class="w-full h-96 object-cover" src="https://ifrs.edu.br/bento/wp-content/uploads/sites/13/2018/05/portico.png" alt="">
        </div>
        <div class="grid grid-cols-2 items-center">
            <x-card title="Ambiente Virtual" description="Guia de para os estudantes do cursos de Pós-graduação, Graduação e Ensino Médio." iconName="laptop-outline" buttonValue="Guia de Utilização - Estudante" />
            <x-card title="Espaço do estudante" description="Dados em relação ao estudante nos lugares digitais do campus" iconName="folder-outline" buttonValue="Açessar espaço do estudante" />
        </div>
        <div class="flex items-center w-80 py-2 px-4 border border-gray-300 bg-white rounded m-5 shadow-sm">
            <span class="text-gray-500">
                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 19.8834L16.661 15.5444C17.6254 14.3111 18.167 12.7644 18.167 11.0834C18.167 6.52839 14.6395 3.00001 10.0845 3.00001C5.52956 3.00001 2.00208 6.52839 2.00208 11.0834C2.00208 15.6384 5.52956 19.1667 10.0845 19.1667C11.7655 19.1667 13.3122 18.6251 14.5456 17.6607L18.8846 22L21 19.8834ZM3.50049 11.0834C3.50049 7.20344 6.70406 4.00001 10.5841 4.00001C14.4641 4.00001 17.6677 7.20344 17.6677 11.0834C17.6677 14.9634 14.4641 18.1667 10.5841 18.1667C6.70406 18.1667 3.50049 14.9634 3.50049 11.0834Z" fill="currentColor" />
                </svg>
            </span>
            <input class="w-full bg-white border-none focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 pl-2" type="text" placeholder="Pesquisar curso">
        </div>
        <table class="border border-collapse w-full  p-5 my-5">
            <thead>
                <tr>
                    <th class="whitespace-nowrap text-left py-2 px-4 font-medium bg-gray-50 text-gray-700 text-sm">Nome</th>
                    <th class="whitespace-nowrap text-left py-2 px-4 font-medium bg-gray-50 text-gray-700 text-sm">Sigla</th>
                    <th class="whitespace-nowrap text-left py-2 px-4 font-medium bg-gray-50 text-gray-700 text-sm">Info</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="whitespace-nowrap text-left py-2 px-4 bg-white text-gray-700 text-sm">Técnico em Informatica</td>
                    <td class="whitespace-nowrap text-left py-2 px-4 bg-white text-gray-700 text-sm">INFO</td>
                    <td class="whitespace-nowrap text-left py-2 px-4 bg-white text-gray-700 text-sm"><button class="bg-green-700 px-4 py-2 rounded-sm text-white">Informaçãoes</button></td>
                </tr>
            </tbody>
        </table>
    </main>
</body>

</html>