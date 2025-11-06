🎯 Descrição do Projeto
Sistema web para cadastro de jogadores e o ano em que venceram o mundial.
Desenvolvido em PHP + MySQL com interface estilizada em CSS.

⚙️ Funcionalidades
✅ Cadastro de jogadores

✅ Validação de campos

✅ Exibição em tabela

✅ Contador de registros

✅ Design responsivo e escuro

🛠 Tecnologias Utilizadas
PHP

MySQL

HTML5

CSS3

📁 Estrutura de Arquivos
text
projeto/
├── index2.php
└── style.css
🗃 Estrutura do Banco de Dados
Tabela: Jogadores

Campo	Tipo	Descrição
id	INT (PK, AI)	Identificador único
jogador	VARCHAR(255)	Nome do jogador
ano_mundial	INT	Ano da vitória no mundial
🎨 Layout
Cores: vermelho escuro (#c40000) e branco

Tabela estilizada com bordas e sombras

Formulário centralizado e responsivo

▶️ Como Executar
Coloque os arquivos na pasta do servidor (ex: XAMPP/htdocs)

Configure o MySQL com:

Database: formulario

Usuário: root

Senha: Senai@118

Acesse: http://localhost/index2.php

📸 Prévia
text
+------------------------+
|   Cadastro de Jogadores  |
+------------------------+
| Jogador: [_________]    |
| Ano Mundial: [____]     |
|      [Cadastrar]        |
+------------------------+

Tabela de Jogadores:
+----+-------------+-------------+
| ID |   Jogador   | Ano Mundial |
+----+-------------+-------------+
| 1  |   Zidane    |    1998     |
+----+-------------+-------------+
✍️ Autor
Desenvolvido como projeto de estudo em PHP/MySQL.

💡 Dica: Certifique-se de que o MySQL está rodando antes de acessar a página.
