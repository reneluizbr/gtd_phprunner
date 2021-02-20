# 2021-02-19 21:18, Fri - Criacao do repositorio dos fontes no GitHub
    echo "# gtd_phprunner" >> README.md
    git init
    git add README.md
    git commit -m "first commit"
    git branch -M main
    git remote add origin https://github.com/reneluizbr/gtd_phprunner.git
    git push -u origin main

    vscode://vscode.github-authentication/did-authenticate?windowid=1&code=aa9ea7e1e8ac3f3652ae&state=fbecb261-3968-4b50-af44-a9c1c8563b86

    Erro que aconteceu no primeiro commit com o GMaster:
    git error user cancelled certificate check:

# 2020-07-29 16:30, Wed -
    Responsividade
    I18N (Internationalization) multi-idioma
    Multi-usuário
    Autenticação - Somente usuário logado
    Autorização  - Acesso somente a paginas autorizadas

# 2020-07-28 15:00, Tue - Integração do GTD feito em PHPRunner com páginas SSP
    Colocar a estrutura de pastas do SSP em "output/_ssp1" ou "output/ssp"
    Configurar  no PHPRunner, Misc, Landing Page:
        URL: _ssp1/index.html    (antiga: menu.php?page=menu)
    Configurar na SSP "C:\UwAmp\www\GTD_PHPRunner\output\_ssp1\index.html" o link
        <a href="../menu.php" class="btn btn-border-filled">Experimente agora</a>
    O "menu.php" redireciona o controle para a aplicação do PHPRunner

    Customização da visão da Prioridade da Atividade,
        campo "ativ_prioridade", "View as", "Custom":
           // Rene: Se prioridade for Alta exibe em vermelho
           if ($value == "Alta") {
              $color   = "red;";
              $negrito = "font-weight: bold;";
           } else {
              $color   = "black";
              $negrito = "font-weight: normal;";
           }
           //$value="<span style='color: " . $color . "'>" .$value . "</span>";
           $value="<span style='color: " . $color . $negrito . "'>" . $value . "</span>";

# 2020-05-20 15:15, Wed - GTD, Testes com ferramenta PHPRunner:

PHPRunner: Desenvolvimento 2020.05q2 (Maio, Quinzena 2)
    [ ] Permissões dinâmicas para o perfil "Administrador". Não para "Cliente", "Usuario" nem "Convidado"
    [x] Implementação de múltiplos idiomas: português, inglês e espanhol (21/05/2020)
    [x] Criptografia de senhas dos usuários com algoritmo BCrypt (https://bcrypt-generator.com/) (20/05/2020)
    [x] Primeira versão de imagem de fundo na página de login e logotipo no sistema (19/05/2020)
    [x] Filtros nas atividades (18/05/200)
    [x] Login/Data de inclusão/alteração em eventos pré-insert/pré-update em Listas e Atividades (17/05/2020)

PHPRunner: Desenvolvimento 2020.05q1 (Maio, Quinzena 1)
    [x] Testar layout com label acima e grupos de campos
    [x] Alterar tela Atividades (16/05/2020)
    [x] Alterar tela Lista Atividades, com master-detail com atividades (16/05/2020)
    [x] Identificar usuário logado (16/05/2020)
    [x] Renderizar Combo clientes se for usuário root campos lookup

PHPRad: Telas Atividade (12/05)
    [ ] Testar layout com label acima e grupos de campos
    [ ] Alterar tela Lista Atividades
    [x] Alterar tela Atividades
    [x] Identificar usuário logado
    [x] Renderizar Combo clientes se for usuário root

# 2020-05-06 10:00, Wed - GTD, Testes com ferramenta PHPRad:
PHPRad: Início de testes (06/05)
    Iniciado testes em 2020-05-06, quarta

PHPRad: Reunião Clayton (09/05/2020)
    Reunião para ajuda com coluna em grid responsiva e filtros de data e hora

# 2020-05-09 10:00, Wed - GTD, Testes com ferramenta FormDin:
GTD FormDin: TB_Sessoes (09/05)
    Passando a usar o RADPhp no lugar do FormDin, que tem uma solução nativa semelhante para este item
    Tb_Sessoes: SysGen
        Usua_ID
        IP
        Data Login
        Data Logout
        Modo Logout

GTD FormDin: utilRene.php (08/05)
    utilRene.php
    fctPC()

GTD FormDin: Telas Atividades 03/05
GTD FormDin: Versionamento git 08/05
GTD FormDin: Criar projeto 28/04

# 2020-05-06 10:00, Wed - GTD, Testes com outras ferramentas:
GTD FormDin: Frameworks PHP 08/05
    BuildWith? PHPGenerator
    Laravel (composer!)
    CodeIgniter
    Simphony (composer!)
    Fuel
    Yii (composer!)
GTD FormDin: Reunião depuração PHP com Clayton 08/05
GTDTasks 2019 com PHPGenerator em 25/12/2019

GTDTasks 2019 com Prado e Bootstrap 3 11/11/2019


# 2016-09-12 15:00, Mon - GTD Conceito em 12/09/2016
    https://pt.wikipedia.org/wiki/Getting_Things_Done

    Getting Things Done, cuja abreviação é GTD, é um método de gerenciamento de ações que dá nome ao livro de David Allen. No Brasil este livro foi inicialmente lançado em 2001 com o título "Produtividade Pessoal - A arte da produtividade sem stress". Em 2005 o livro foi relançado com o título "A Arte de Fazer Acontecer - Uma Fórmula Anti-stress para Estabelecer Prioridades e Entregar Soluções no Prazo" (ISBN 13 978-85-352-1908-1); (ISBN 85-352-1908-0), 2001-2005; edição original (ISBN 0-670-89924-0).

    O GTD se baseia no princípio de que uma pessoa precisa tirar as tarefas de sua mente e registrá-las em algum lugar. Desta forma, a mente fica livre do trabalho de lembrar de tudo o que necessita ser feito e pode se concentrar em realmente executar essas tarefas.
