/*
   Project  : gtd_v4.sql
   Model    : Desenvolvimento do GTD com "SQLite PHP Generator" (SQLMaestro)
   Author   : Renê Luiz
   Versions :
      2020-01-24 12:15, Fri; Campos FK com nomes simplificados.
         Campos FK sem prefixo agora com nomes iguais às PKs tabelas referenciadas.
         A notação ORACLE que eu usava antes é muito formal para projetos pequenos.
         Ex:  DE           PARA
            ativ_lista_id lista_id
            ativ_stat_id  stat_id
      2020-01-08 17:30, Tue; v.1.10; Simplificação da propósito da solução
         Simplificação da propósito da solução, ficando mais parecida com o conceito utilizado
            no Google Keep, entre outros
            A modelagem basica consiste em apenas 2 tabelas, sendo possível
            uma Atividade não fazer parte de nenhuma lista específica:
               Lista (0..1) <-> (0..N) Atividade
            e o "antigo" Status passa a ser um atributo da Atividade, com valores predefinidos:
               1-Cadastrado : Sem DT_Inicio           - Sem DT_Termino
                  Item que foi apenas cadastrado, mas não iniciado.
                  Pode também ser considerado como "Pendente", "Na Fila", "Aguardando Início", etc.
               2-Andamento  : Possui DT_Inicio       - Sem DT_Termino
                  Atividade que foi iniciada mas ainda não concluída.
               3-Finalizada : Possui DT_Inicio       - Sem DT_Termino
                  Atividade que foi iniciada e foi concluída. Seria o fluxo normal de uma atividade.
               4-Cancelada  : DT_Inicio(vazio/informada) - DT_Termino(vazio/informada)
                  Atividade que foi cancelada. Pode ser marcada como cancelada à qualquer momento.
      2019-12-25 23:31, Wed; v.1.00; Versão inicial
         Versão inicial clássica do GTD "Getting Things Done" já testada em outras
            ferramentas/frameworks, onde a modelagem básica consiste em 3 tabelas:
               Tipo (1) <-> (0..N) Atividade (0..N) <-> (1) Status

   Database : SQLite
   TODO Pendencias neste script:
      (  ) Comentarios em todas as colunas
      (ok) Padronizar colunas: inclu_id(Int), inclu_dt(Datetime), alter_id(Int), alter_dt(Datetime)
      (ok) Alinhamento de campos/colunas com "Live Preview Mode": Int|VARCHAR|Datetime|COMMENT/l1l1
      (ok) Troca de "Tabs" por "Espacos"
   Formas de excutar este script:
      1) Identificar algum local onde encontar o SQLite3, ex:
         E:\Aplic\Banco\SQLite\SQLiteMaestro\sqlite3.exe
      2) Posicinar-se na pasta do script, ex:
         CD \
         CD C:\Users\rldsilva\Documents\Fontes\gtd_v4\protected\database
      3) Abrir o SQLLite e executar o script de criaçao, ex:
         E:\Aplic\Banco\SQLite\SQLiteMaestro\sqlite3.exe gtd_v4.db3
         .read gtd_v4.sql
*/

-- --------------------------------------------------------------------------------
-- Exclusao das tabelas na ordem correta para evitar erros
-- --------------------------------------------------------------------------------
   -- Primeiro as tabelas "Associativas"
   DROP TABLE IF EXISTS tb_planos_valores;
   DROP TABLE IF EXISTS tb_clientes_planos;

   -- Depois as tabelas "Pais"
   DROP TABLE IF EXISTS tb_status_atividades; -- Status agrupa 1..N Atividades
   DROP TABLE IF EXISTS tb_lista_atividades;  -- Lista agrupa 1..N Atividades
   DROP TABLE IF EXISTS tb_atividade;

   DROP TABLE IF EXISTS tb_planos;
   DROP TABLE IF EXISTS tb_clientes;
   DROP TABLE IF EXISTS tb_usuarios;
   DROP TABLE IF EXISTS tb_dominios;

   -- Implementacao futura
   DROP TABLE IF EXISTS tb_categorias;
   DROP TABLE IF EXISTS tb_categorias_x_atividades;
   DROP TABLE IF EXISTS tb_parametros;

-- --------------------------------------------------------------------------------
-- (Grupo 01) Implementar tabela basicas Autenticação e Autorização
-- --------------------------------------------------------------------------------
-- Clientes. Podem abrigar N usuarios (no caso de contas compatilhadas)
.print Criando tabela 01/13
CREATE TABLE tb_clientes
   (clie_id            INTEGER       primary key AUTOINCREMENT not null  --comment 'Identificador global do cliente, que pode ter 1 ou N users.'
   ,clie_nm_reduzido   VARCHAR (20)  not null              --comment 'Nome reduzido, apelido, ou nome fantasia (no caso de empresa)'
   ,clie_email         VARCHAR (255) not null              --comment 'Email do cliente. Obrigatorio'
   ,clie_endereco      VARCHAR (200)                       --comment 'Endereco completo do cliente. Opcional'
   ,clie_pais          VARCHAR (20)  not null              --comment 'País'
   ,clie_domi_status   VARCHAR (60)  not null DEFAULT 'ATIVO' --comment 'Valor para o Dominio/Grupo "STATUS_CLIENTE"'
   ,clie_nm_completo   VARCHAR (20)                        --comment 'Nome completo do cliente, pode ser o nome oficial'
   ,clie_fones_contato VARCHAR (20)                        --comment 'Telefones para contato'
   ,inclu_login        VARCHAR (50) NOT NULL DEFAULT '0'         --comment 'ID do usuario que realizou a inclusao'
   ,inclu_dt           DATETIME NOT NULL DEFAULT (strftime('%Y-%m-%d %H:%M:%S','now')) --comment 'Data e hora em que foi realizada a inclusao'
   ,alter_login        VARCHAR (50)                        --comment 'ID do usuario que realizou a alteracao'
   ,alter_dt           DATETIME                            --comment 'Data e hora em que foi realizada a alteracao'
   );
   CREATE UNIQUE INDEX ux_clie_email ON tb_clientes (clie_email);

-- Usuarios. Logins que acessam o sistema pelo email
.print Criando tabela 02/13
CREATE TABLE tb_usuarios
   (usua_id           INTEGER       primary key AUTOINCREMENT not null --comment 'ID do usuario'
   ,clie_id           INTEGER      NOT NULL DEFAULT '0'    --comment 'Identificador global do cliente, 0-Cliente auto cadastrado'
   ,usua_domi_status  VARCHAR (60) not null DEFAULT 'CADASTRADO'  --comment 'Valor para o Dominio/Grupo "STATUS_USUARIO"'
   ,usua_email        VARCHAR (255) not null             --comment 'Email do usuario'
   ,usua_username     VARCHAR (50)  not null             --comment 'Nome do Usuario', ACHO MELHOR usar o email
   ,usua_senha        VARCHAR (255) not null             --comment 'Senha do usuario criptografada com password_hash'
   ,usua_login_ulti   DATETIME                           --comment 'Data e Hora do último acesso'
   ,usua_idioma_ulti  VARCHAR (30)                       --comment 'Ultimo idioma utilizado'
   ,inclu_login       VARCHAR (50) NOT NULL DEFAULT '0'         --comment 'ID do usuario que realizou a inclusao'
   ,inclu_dt          DATETIME NOT NULL DEFAULT (strftime('%Y-%m-%d %H:%M:%S','now')) --comment 'Data e hora em que foi realizada a inclusao'
   ,alter_login       VARCHAR (50)                        --comment 'ID do usuario que realizou a alteracao'
   ,alter_dt          DATETIME                            --comment 'Data e hora em que foi realizada a alteracao'
   ,FOREIGN KEY (clie_id)  references tb_clientes (clie_id)  ON UPDATE RESTRICT ON DELETE RESTRICT
   );
   -- Criacao de Indices Unicos e Gerais
   CREATE INDEX ix_clie_id ON tb_usuarios (clie_id);
   CREATE UNIQUE INDEX ux_usua_email    ON tb_usuarios (usua_email);
   CREATE UNIQUE INDEX ux_usua_username ON tb_usuarios (usua_username);

-- --------------------------------------------------------------------------------
-- (Grupo 02) Criacao das tabelas de Valores e Faturamento
-- --------------------------------------------------------------------------------
-- Tipos de Planos (ex: "Free", "Pessoal", "Colaborativo", "Empresas")
.print Criando tabela 03/13
CREATE TABLE tb_planos
   (plan_id         INTEGER  NOT NULL PRIMARY KEY AUTOINCREMENT  --comment 'PK da tabela'
   ,plan_domi_tipo  VARCHAR (60) NOT NULL DEFAULT 'GRATIS'  --comment 'Valor para o Dominio/Grupo "TIPO_PLANO"'
   ,plan_nm         TEXT(50) NOT NULL UNIQUE       --comment 'Nome do plano'
   ,plan_ds         TEXT                           --comment 'Descricao do plano'
   ,inclu_login     VARCHAR (50) NOT NULL DEFAULT '0'         --comment 'ID do usuario que realizou a inclusao'
   ,inclu_dt        DATETIME NOT NULL DEFAULT (strftime('%Y-%m-%d %H:%M:%S','now')) --comment 'Data e hora em que foi realizada a inclusao'
   ,alter_login     VARCHAR (50)                        --comment 'ID do usuario que realizou a alteracao'
   ,alter_dt        DATETIME                            --comment 'Data e hora em que foi realizada a alteracao'
   );

-- Valores de cada Plano com datas de vigência do valor de cada plano
.print Criando tabela 04/13
CREATE TABLE tb_planos_valores
   (plva_id            INTEGER  NOT NULL PRIMARY KEY AUTOINCREMENT
   ,plan_id            INTEGER  NOT NULL
   ,plva_dt_vigenc_ini DATETIME NOT NULL
   ,plva_dt_vigenc_fim DATETIME
   ,plva_vl            NUMBER(10, 4)
   ,inclu_login        VARCHAR (50) NOT NULL DEFAULT '0'         --comment 'ID do usuario que realizou a inclusao'
   ,inclu_dt           DATETIME NOT NULL DEFAULT (strftime('%Y-%m-%d %H:%M:%S','now')) --comment 'Data e hora em que foi realizada a inclusao'
   ,alter_login        VARCHAR (50)                        --comment 'ID do usuario que realizou a alteracao'
   ,alter_dt           DATETIME                            --comment 'Data e hora em que foi realizada a alteracao'
   ,foreign key (plan_id) references tb_planos   (plan_id)  ON UPDATE RESTRICT ON DELETE RESTRICT
   );

-- Plano que o Cliente tem (ou ja teve) com datas de vigência de cada plano
.print Criando tabela 05/13
CREATE TABLE tb_clientes_planos
   (clipla_id            INTEGER  not null primary key AUTOINCREMENT   --comment 'PK da tabela'
   ,clie_id              INTEGER  not null               --comment 'Identificador global do cliente'
   ,plan_id              INTEGER  not null               --comment 'ID do Plano (o que tiver dt_vigen_fim = NULL é o plano atual)'
   ,clipla_dt_vigenc_ini DATETIME not null               --comment 'Data de Inicio do Plano do Cliente'
   ,clipla_dt_vigenc_fim DATETIME                        --comment 'Data de Final do Plano do Cliente'
   ,clipla_vl            NUMBER(10, 4)                   --comment 'Valor que efetivamente o cliente pagou'
   ,inclu_login          VARCHAR (50) NOT NULL DEFAULT '0'         --comment 'ID do usuario que realizou a inclusao'
   ,inclu_dt             DATETIME NOT NULL DEFAULT (strftime('%Y-%m-%d %H:%M:%S','now')) --comment 'Data e hora em que foi realizada a inclusao'
   ,alter_login          VARCHAR (50)                        --comment 'ID do usuario que realizou a alteracao'
   ,alter_dt             DATETIME                            --comment 'Data e hora em que foi realizada a alteracao'
   ,foreign key (clie_id) references tb_clientes (clie_id) ON UPDATE RESTRICT ON DELETE RESTRICT
   ,foreign key (plan_id) references tb_planos   (plan_id) ON UPDATE RESTRICT ON DELETE RESTRICT
   );

-- --------------------------------------------------------------------------------
-- (Grupo 03) Criacao das tabelas de Dominios
-- --------------------------------------------------------------------------------
-- Códigos de Listas Gerais para uso no sistema. Ex: Status de Clientes, Status de Usuarios, etc
.print Criando tabela 06/13
CREATE TABLE tb_dominios
   (domi_id     INTEGER      NOT NULL PRIMARY KEY AUTOINCREMENT --comment 'PK da tabela'
   ,domi_grupo  VARCHAR(100) NOT NULL             --comment 'Sigla de Agrupador do Dominio'
   ,domi_ordem  INTEGER      NOT NULL             --comment 'Ordem de exibicao dos valores do Dominio'
   ,domi_valor  VARCHAR( 60) NOT NULL             --comment 'Valor a ser gravado do Dominio'
   ,domi_exibe  VARCHAR(500) NOT NULL             --comment 'Valor a ser exibido do Dominio'
   ,inclu_login VARCHAR (50) NOT NULL DEFAULT '0'         --comment 'ID do usuario que realizou a inclusao'
   ,inclu_dt    DATETIME NOT NULL DEFAULT (strftime('%Y-%m-%d %H:%M:%S','now')) --comment 'Data e hora em que foi realizada a inclusao'
   ,alter_login VARCHAR (50)                        --comment 'ID do usuario que realizou a alteracao'
   ,alter_dt    DATETIME                            --comment 'Data e hora em que foi realizada a alteracao'
   );
   -- Criacao de Indices Unicos e Gerais
   CREATE UNIQUE INDEX ux_domi_grupovalor ON tb_dominios (domi_grupo, domi_valor);

-- Parametros e Configuracoes para uso no sistema. Ex: Limites, etc
.print Criando tabela 07/13

CREATE TABLE tb_parametros
    (para_id     INTEGER      NOT NULL PRIMARY KEY AUTOINCREMENT --comment 'PK da tabela'
   ,para_nome   VARCHAR(100) NOT NULL             --comment 'Sigla de Agrupador do Dominio'
   ,para_valor  VARCHAR(100) NOT NULL             --comment 'Ordem de exibicao dos valores do Dominio'
   ,para_ativo  VARCHAR(03) NOT NULL DEFAULT 'SIM' --comment 'SIM/NAO'
   ,inclu_login VARCHAR (50) NOT NULL DEFAULT '0' --comment 'ID do usuario que realizou a inclusao'
   ,inclu_dt    DATETIME NOT NULL DEFAULT (strftime('%Y-%m-%d %H:%M:%S','now')) --comment 'Data e hora em que foi realizada a inclusao'
   ,alter_login VARCHAR (50)                      --comment 'ID do usuario que realizou a alteracao'
   ,alter_dt    DATETIME                          --comment 'Data e hora em que foi realizada a alteracao'
   );
   -- Criacao de Indices Unicos e Gerais
   CREATE UNIQUE INDEX ux_para_nome ON tb_parametros (para_nome, para_ativo);

-- Tabela de Status "mais flexível". Para clientes pagantes configurarem seus status personalizados.
-- Se cliente "Free" (não pagante) o sistema usara as linhas com "clie_id = -1"
.print Criando tabela 08/13
CREATE TABLE tb_status_atividades
   (stat_id            INTEGER      primary key AUTOINCREMENT not null --comment 'PK da tabela'
   ,clie_id            INTEGER      not null             --comment 'Identificador global do cliente'
   -- Limitar inclusão no Sistema: Se cliente TIPO_PLANO' = 'GRATIS' ou 'STATUS_CLIENTE' != 'ATIVO'
   -- ,stat_fl_pago       INTEGER      not null DEFAULT 0   --comment 'CHECK(stat_fl_pago IN (0,1)) -- Ideia usar 0-Cliente Free, 1-Cliente Pago'
   ,stat_nm            VARCHAR (50) not null             --comment 'Nome'
   ,stat_ds            TEXT                              --comment 'Descricao mais longa'
   ,stat_fl_ativo      INTEGER      not null DEFAULT 1   --comment 'CHECK (stat_fl_ativo IN (0, 1))'
   ,inclu_login        VARCHAR (50) NOT NULL DEFAULT '0'         --comment 'ID do usuario que realizou a inclusao'
   ,inclu_dt           DATETIME NOT NULL DEFAULT (strftime('%Y-%m-%d %H:%M:%S','now')) --comment 'Data e hora em que foi realizada a inclusao'
   ,alter_login        VARCHAR (50)                        --comment 'ID do usuario que realizou a alteracao'
   ,alter_dt           DATETIME                            --comment 'Data e hora em que foi realizada a alteracao'
   ,foreign key (clie_id) references tb_clientes (clie_id) ON UPDATE RESTRICT ON DELETE RESTRICT
   );

-- --------------------------------------------------------------------------------
-- (Grupo 04) Criacao das tabelas de negócio
-- --------------------------------------------------------------------------------
.print Criando tabela 09/13
CREATE TABLE tb_lista_atividades
   (lista_id           INTEGER      primary key AUTOINCREMENT not null
   ,clie_id            INTEGER      not null --comment 'Identificador global do cliente'
   ,lista_nm           VARCHAR (50) not null --comment 'Nome'
   ,inclu_login        VARCHAR (50) NOT NULL DEFAULT '0'         --comment 'ID do usuario que realizou a inclusao'
   ,inclu_dt           DATETIME NOT NULL DEFAULT (strftime('%Y-%m-%d %H:%M:%S','now')) --comment 'Data e hora em que foi realizada a inclusao'
   ,alter_login        VARCHAR (50)                        --comment 'ID do usuario que realizou a alteracao'
   ,alter_dt           DATETIME                            --comment 'Data e hora em que foi realizada a alteracao'
   ,foreign key (clie_id) references tb_clientes (clie_id) ON UPDATE RESTRICT ON DELETE RESTRICT
);

.print Criando tabela 10/13
CREATE TABLE tb_atividade
   (ativ_id              INTEGER      primary key AUTOINCREMENT not null
   ,clie_id              INTEGER      not null             --comment 'Identificador global do cliente'
   ,ativ_nm              VARCHAR (50) not null             --comment 'Nome'
   ,ativ_ds              TEXT                              --comment 'Descricao mais longa'
   ,lista_id             INTEGER                           --comment 'ID da lista, caso atividade pertença a alguma lista'
   ,stat_id              INTEGER      not null             --comment 'Status da atividade'
   ,ativ_fl_ativo        INTEGER      not null DEFAULT 1   --comment 'CHECK (ativ_fl_ativo IN (0, 1))'
   ,ativ_prioridade      VARCHAR (1)  not null DEFAULT "BAIXA" --comment 'CHECK (ativ_prioridade IN ("BAIXA","MEDIA","ALTA"))'
   ,ativ_concluida       INTEGER      not null DEFAULT 0   --comment 'CHECK (ativ_concluida IN (0, 1))'
   ,ativ_dt_ini          DATETIME                          --comment 'Data início da atividade'
   ,ativ_dt_fim          DATETIME                          --comment 'Data fim da atividade'
   ,ativ_domi_unid_tempo VARCHAR (60)       --comment 'Valor para o Dominio/Grupo "TEMPO_UNIDADE"'
   ,ativ_tempo_estimado  INTEGER             --comment 'Tempo Estimado da ativdade na unidade ativ_domi_unid_tempo'
   ,ativ_tempo_real      INTEGER             --comment 'Tempo Real da ativdade na unidade ativ_domi_unid_tempo'
   ,inclu_login          VARCHAR (50) NOT NULL DEFAULT '0'         --comment 'ID do usuario que realizou a inclusao'
   ,inclu_dt             DATETIME NOT NULL DEFAULT (strftime('%Y-%m-%d %H:%M:%S','now')) --comment 'Data e hora em que foi realizada a inclusao'
   ,alter_login          VARCHAR (50)                        --comment 'ID do usuario que realizou a alteracao'
   ,alter_dt             DATETIME                            --comment 'Data e hora em que foi realizada a alteracao'
   ,foreign key (stat_id)  references tb_status_atividades  (stat_id)  ON UPDATE RESTRICT ON DELETE RESTRICT
   ,foreign key (lista_id) references tb_lista_atividades (lista_id) ON UPDATE RESTRICT ON DELETE RESTRICT
   ,foreign key (clie_id)  references tb_clientes (clie_id) ON UPDATE RESTRICT ON DELETE RESTRICT
);
-- Criacao de Indices Unicos e Gerais
   CREATE INDEX ix_ativstat_idx  ON tb_atividade (stat_id);
   CREATE INDEX ix_ativlista_idx ON tb_atividade (lista_id);


.print Criando tabela 11/13
CREATE TABLE tb_rotulos
   (cate_id         INTEGER      primary key AUTOINCREMENT not null
   ,clie_id         INTEGER      not null             --comment 'Identificador global do cliente'
   ,cate_nm         VARCHAR (50) not null             --comment 'Nome'
   ,inclu_login     VARCHAR (50) NOT NULL DEFAULT '0'         --comment 'ID do usuario que realizou a inclusao'
   ,inclu_dt        DATETIME NOT NULL DEFAULT (strftime('%Y-%m-%d %H:%M:%S','now')) --comment 'Data e hora em que foi realizada a inclusao'
   ,alter_login     VARCHAR (50)                        --comment 'ID do usuario que realizou a alteracao'
   ,alter_dt        DATETIME                            --comment 'Data e hora em que foi realizada a alteracao'
   ,foreign key (clie_id)  references tb_clientes (clie_id) ON UPDATE RESTRICT ON DELETE RESTRICT
);

.print Criando tabela 12/13
CREATE TABLE tb_tarefas_x_rotulos
   (caat_id         INTEGER      primary key AUTOINCREMENT not null
   ,cate_id         INTEGER      not null             --comment 'Identificador global da Categoria'
   ,ativ_id         INTEGER      not null             --comment 'Identificador global da Tarefa'
   ,inclu_login     VARCHAR (50) NOT NULL DEFAULT '0'         --comment 'ID do usuario que realizou a inclusao'
   ,inclu_dt        DATETIME NOT NULL DEFAULT (strftime('%Y-%m-%d %H:%M:%S','now')) --comment 'Data e hora em que foi realizada a inclusao'
   ,foreign key (ativ_id)  references tb_atividade  (ativ_id) ON UPDATE RESTRICT ON DELETE CASCADE
   ,foreign key (cate_id)  references tb_rotulos (cate_id) ON UPDATE RESTRICT ON DELETE CASCADE
);
-- Criacao de Indices Unicos e Gerais
   CREATE INDEX ix_caat_cate_idx ON tb_rotulos (cate_id);
   CREATE INDEX ix_caat_ativ_idx ON tb_atividade  (ativ_id);
-- --------------------------------------------------------------------------------

.print Criando tabela 13/13
DROP TABLE IF EXISTS tb_tarefas_ocorrencias;
CREATE TABLE tb_tarefas_ocorrencias
   -- Criando com nomes de coluna fora do padrao Oracle para testes de praticidade
   (ID_Ocorrencia   INTEGER      primary key AUTOINCREMENT not null
   ,ativ_id         INTEGER       NOT NULL   --comment 'Identificador global da Tarefa'
   ,clie_id         INTEGER       NOT NULL   --comment 'Identificador global do cliente'
   ,Data_Hora       DATETIME      NOT NULL DEFAULT (strftime('%Y-%m-%d %H:%M:%S','now'))
   ,Comentario      VARCHAR2(500) NOT NULL
   ,Concluida       NUMBER(1)     NOT NULL DEFAULT '0'         --Ocorrencia marcada como finalizada (0/1)
   ,inclu_login     VARCHAR (50)  NOT NULL DEFAULT '0'         --comment 'ID do usuario que realizou a inclusao'
   ,inclu_dt        DATETIME      NOT NULL DEFAULT (strftime('%Y-%m-%d %H:%M:%S','now')) --comment 'Data e hora em que foi realizada a inclusao'
   ,alter_login     VARCHAR (50)                        --comment 'ID do usuario que realizou a alteracao'
   ,alter_dt        DATETIME                            --comment 'Data e hora em que foi realizada a alteracao'
   ,foreign key (ativ_id)  references tb_atividade  (ativ_id) ON UPDATE RESTRICT ON DELETE CASCADE
   ,foreign key (clie_id)  references tb_rotulos (clie_id)    ON UPDATE RESTRICT ON DELETE CASCADE
);
-- Criacao de Indices Unicos e Gerais
   CREATE INDEX ix_ocor_clie_idx ON tb_tarefas_ocorrencias (clie_id);
   CREATE INDEX ix_ocor_ativ_idx ON tb_tarefas_ocorrencias (ativ_id);
   CREATE INDEX ix_ocor_data_idx ON tb_tarefas_ocorrencias (data_hora);
-- --------------------------------------------------------------------------------

-- --------------------------------------------------------------------------------
.print Fim do Script de criacao de tabelas.
-- --------------------------------------------------------------------------------
-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

DROP VIEW IF EXISTS vw_tarefas_rotulos_v1;
/*
   CREATE VIEW vw_tarefas_rotulos_v1
   AS
      SELECT a.ativ_id
         ,a.clie_id
         ,a.ativ_nm
         ,a.ativ_ds
         ,a.lista_id
         ,l.lista_nm
         ,a.stat_id
         ,s.stat_nm
         ,a.ativ_fl_ativo
         ,a.ativ_prioridade
         ,a.ativ_concluida
         ,a.ativ_dt_ini
         ,a.ativ_dt_fim
         ,a.inclu_login
         ,a.inclu_dt
         ,a.alter_login
         ,a.alter_dt
      , GROUP_CONCAT(cate_nm,', ') as Rotulos
      FROM tb_atividade a
      LEFT JOIN tb_tarefas_x_rotulos ca ON a.ativ_id = ca.ativ_id
      LEFT JOIN tb_rotulos c               ON c.cate_id = ca.cate_id
      LEFT JOIN tb_lista_atividades l         ON a.lista_id = l.lista_id
      LEFT JOIN tb_status_atividades s        ON a.stat_id = s.stat_id
      GROUP BY a.ativ_id
   ;
*/
DROP VIEW IF EXISTS vw_tarefas_rotulos_v1;


DROP VIEW "main"."vw_tarefas_rotulos";
CREATE VIEW vw_tarefas_rotulos
AS
   SELECT CAST(GROUP_CONCAT(cate_nm,', ') AS VARCHAR(200)) as Rotulos
      , tb.*
   FROM ( /* Necessario criar subquery para seguir ordem de cate_nm*/
      SELECT a.ativ_id
         ,a.clie_id
         ,a.ativ_nm
         ,r.cate_nm
         ,a.ativ_ds
         ,a.lista_id
         ,l.lista_nm
         ,a.stat_id
         ,s.stat_nm
         ,a.ativ_fl_ativo
         ,a.ativ_prioridade
         ,a.ativ_concluida
         ,a.ativ_dt_ini
         ,a.ativ_dt_fim
         ,a.inclu_login
         ,a.inclu_dt
         ,a.alter_login
         ,a.alter_dt
      -- , GROUP_CONCAT(cate_nm,', ') as Rotulos
      FROM tb_atividade a
      LEFT JOIN tb_tarefas_x_rotulos tr       ON a.ativ_id = tr.ativ_id
      LEFT JOIN tb_rotulos r                  ON r.cate_id = tr.cate_id
      LEFT JOIN tb_lista_atividades l         ON a.lista_id = l.lista_id
      LEFT JOIN tb_status_atividades s        ON a.stat_id = s.stat_id
      -- GROUP BY a.ativ_id
      ORDER BY r.cate_nm
     ) AS tb
   GROUP BY ativ_id
;

DROP VIEW IF EXISTS vw_dominio_tempo;
CREATE VIEW vw_dominio_tempo
AS
   SELECT * FROM (
      SELECT domi_grupo,domi_ordem,domi_valor,domi_exibe
      ,"Portuguese(Brazil)" AS IDIOMA
      FROM tb_dominios WHERE domi_grupo = "TEMPO_UNIDADE"
      UNION
         SELECT domi_grupo,domi_ordem,domi_valor,
         CASE domi_valor
         WHEN "MINUTOS" THEN "Minutes"
         WHEN "HORAS"   THEN "Hours"
         WHEN "DIAS"    THEN "Days"
         WHEN "SEMANAS" THEN "Weeks"
         WHEN "MESES"   THEN "Months"
         END AS domi_exibe
         ,"English" AS IDIOMA
         FROM tb_dominios WHERE domi_grupo = "TEMPO_UNIDADE"
      UNION
         SELECT domi_grupo,domi_ordem,domi_valor,
         CASE domi_valor
         WHEN "MINUTOS" THEN "(es) Minutos"
         WHEN "HORAS"   THEN "(es) Horas"
         WHEN "DIAS"    THEN "(es) Dias"
         WHEN "SEMANAS" THEN "(es) Semanas"
         WHEN "MESES"   THEN "(es) Meses"
         END AS domi_exibe
         ,"Spanish" AS IDIOMA
         FROM tb_dominios WHERE domi_grupo = "TEMPO_UNIDADE"
   )
   --WHERE idioma = $_SESSION["language"]
   ORDER BY IDIOMA, domi_ordem


DROP VIEW IF EXISTS vw_dominio_prioridade;
CREATE VIEW vw_dominio_prioridade
AS
   SELECT * FROM (
      SELECT domi_grupo,domi_ordem,domi_valor,domi_exibe
      ,"Portuguese(Brazil)" AS IDIOMA
      FROM tb_dominios WHERE domi_grupo = "PRIORIDADE_ATIVIDADE"
      UNION
         SELECT domi_grupo,domi_ordem,domi_valor,
         CASE domi_valor
         WHEN "ALTA"    THEN "1-High"
         WHEN "MEDIA"   THEN "2-Medium"
         WHEN "BAIXA"   THEN "3-Low"
         END AS domi_exibe
         ,"English" AS IDIOMA
         FROM tb_dominios WHERE domi_grupo = "PRIORIDADE_ATIVIDADE"
      UNION
         SELECT domi_grupo,domi_ordem,domi_valor,
         CASE domi_valor
         WHEN "ALTA"    THEN "1-Alto"
         WHEN "MEDIA"   THEN "2-Promedio"
         WHEN "BAIXA"   THEN "3-Bajo"
         END AS domi_exibe
         ,"Spanish" AS IDIOMA
         FROM tb_dominios WHERE domi_grupo = "PRIORIDADE_ATIVIDADE"
   )
   --WHERE idioma = $_SESSION["language"]
   ORDER BY IDIOMA, domi_ordem

   /*
   Não funciona ainda no Edit da página tb_atividade.ativ_domi_unid_tempo
      Editar como "LOOKUP", Campo "WHERE"
         idioma=<?php  echo mlang_getcurrentlang(); ?>
   */

;
