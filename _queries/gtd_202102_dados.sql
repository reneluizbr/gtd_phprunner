/* ------------------------------------------------------------------------------------ */
/*                        Inclusao de dados para testes iniciais                        */
/* ------------------------------------------------------------------------------------ */
   -- Primeiro as tabelas "Associativas"
   DELETE FROM tb_planos_valores;
   DELETE FROM tb_clientes_planos;

   -- Depois as tabelas "Pais"
   DELETE FROM tb_status_atividades; -- Status agrupa 1..N Atividades
   DELETE FROM tb_lista_atividades;  -- Lista agrupa 1..N Atividades
   DELETE FROM tb_atividade;

   DELETE FROM tb_planos;
   DELETE FROM tb_clientes;
   DELETE FROM tb_usuarios;
   DELETE FROM tb_dominios;

   -- Implementacao futura
   DELETE FROM tb_categorias;
   DELETE FROM tb_categorias_x_atividades;
   DELETE FROM tb_parametros;


-- INSERT inicial em tabelas
/* ------------------------ Incluir alguns CLIENTES para testes ----------------------- */
   INSERT INTO tb_clientes
      (clie_id, clie_nm_reduzido, clie_email, clie_endereco, clie_pais, clie_domi_status
      ,clie_nm_completo, clie_fones_contato, inclu_login, inclu_dt, alter_login, alter_dt)
   VALUES
       (0,'Cadastrados','cliente000@gmail.com','Cliente Rua 001','Brasil','ATIVO' ,'Cliente para usuarios auto cadastrados na WEB','(11) 00000-0000', 'root', '2020-04-21 15:16:54',NULL,NULL)
      ,(1,'GTD_Rene'   ,'cliente001@gmail.com','Cliente Rua 001','Brasil','ATIVO' ,'Cliente 001, Rene Luiz','(11) 98877-0001', 'root', '2020-04-21 15:16:54'              ,NULL,NULL)
      ,(2,'GTD_Homolog','cliente002@gmail.com','Cliente Rua 002','Brasil','ATIVO' ,'Cliente 002, usado para Homologacao do sistema','(11) 98877-0002', 'root', strftime('%Y-%m-%d %H:%M:%S','now'),NULL,NULL)
   ;

 /* ------------------------ Incluir alguns USUARIOS para testes ----------------------- */
   -- Nao incluindo aqui os usuários 1 'root', 2 'admin',3 'user' e,4 'trainee' (básicos de segurança)
   -- Incluir nenhum cliente de carga incial? (2021-03-13 13:14, Sat)
   INSERT INTO tb_usuarios (clie_id, usua_id, usua_domi_status, usua_email, usua_username, usua_senha, inclu_login, inclu_dt)
   VALUES
        (1, 01, 'CADASTRADO', 'root@email_fake.com'      , 'root'      , '$2y$10$UZ2hIk51tkfYNI7TIdpli.33n17tDTcLZ/c0kcpcqzLcOqCpORq/m', 'root', strftime('%Y-%m-%d %H:%M:%S','now')) -- senha: "padrao"
      --  (1, 01, 'CADASTRADO', 'root@email_fake.com'      , 'root'      , '$2y$10$rZRlCy2AV9414eAj8CeOv.l4dmPjdcTMnB4yV1VgnOAOdLSJJOPlW', 'root', strftime('%Y-%m-%d %H:%M:%S','now')) -- senha: 'root'
       ,(1, 02, 'ATIVO'     , 'admin@email_fake.com'     , 'admin'     , '$2y$10$xInu90xW0jOAIWU7p6Oyne2bE9w.qw71g7VptJ31c4W/p43c/sQI.', 'root', strftime('%Y-%m-%d %H:%M:%S','now')) -- senha: 'admin'
      -- -- Demais usuarios devem ser cadastrados pelo sistema
         --,(1, 03, 'CADASTRADO', 'user@email_fake.com'      , 'user'      , '$2y$10$INcEJxjWQ8leDesYxjDqIOv8ivBqlySlG41c2v/pYC..C/Cj2Dffe', 'root', strftime('%Y-%m-%d %H:%M:%S','now')) -- senha: 'user'
         --,(1, 04, 'CADASTRADO', 'trainee@email_fake.com'   , 'trainee'   , '$2y$10$T6s14LOdMknFkGl8enAVo.0DVAQmrxawEuIzGy8dlwR/Q02M.9ZeC', 'root', strftime('%Y-%m-%d %H:%M:%S','now')) -- senha: 'trainee'

   ;

/* ------------------------ Incluir alguns DOMINIOS para testes ----------------------- */
   INSERT INTO tb_dominios (domi_id, domi_grupo, domi_ordem, domi_valor, domi_exibe, inclu_login)
   VALUES
       (01, 'USUARIO_STATUS'        , 1, 'CADASTRADO' , 'Cadastrado'                                        , 'root')
      ,(02, 'USUARIO_STATUS'        , 2, 'ATIVO'      , 'Ativo'                                             , 'root')
      ,(03, 'USUARIO_STATUS'        , 3, 'INATIVO'    , 'Inativo'                                           , 'root')
      ,(04, 'USUARIO_STATUS'        , 4, 'SUSPENSO'   , 'Suspenso'                                          , 'root')
      ,(05, 'USUARIO_STATUS'        , 5, 'BLOQUEADO'  , 'Bloqueado'                                         , 'root')
      ,(06, 'CLIENTE_STATUS'        , 1, 'CADASTRADO' , 'Cadastrado'                                        , 'root')
      ,(07, 'CLIENTE_STATUS'        , 2, 'ATIVO'      , 'Ativo'                                             , 'root')
      ,(08, 'CLIENTE_STATUS'        , 3, 'PGTO_PEND'  , 'Pagamento Pendente'                                , 'root')
      ,(09, 'CLIENTE_STATUS'        , 4, 'PGTO_ATRA'  , 'Pagamento Atrasado'                                , 'root')
      ,(10, 'CLIENTE_STATUS'        , 5, 'LIMI_PGTO'  , 'Acesso Limitado por falta de Pagamento'            , 'root')
      ,(11, 'CLIENTE_STATUS'        , 6, 'SUSP_PGTO'  , 'Suspenso por falta de Pagamento'                   , 'root')
      ,(12, 'PLANO_TIPO'            , 1, 'GRATIS'     , 'Gratis, gratuito com propagandas e uso pessoal'    , 'root')
      ,(13, 'PLANO_TIPO'            , 2, 'PESSOAL'    , 'Pago, sem propagandas e uso pessoal'               , 'root')
      ,(14, 'PLANO_TIPO'            , 3, 'EQUIPE'     , 'Pago, sem propagandas e uso compartilhado'         , 'root')
      ,(15, 'PRIORIDADE_ATIVIDADE'  , 1, 'BAIXA'      , 'Baixa'                                             , 'root')
      ,(16, 'PRIORIDADE_ATIVIDADE'  , 2, 'MEDIA'      , 'Media'                                             , 'root')
      ,(17, 'PRIORIDADE_ATIVIDADE'  , 3, 'ALTA'       , 'Alta'                                              , 'root')
      ,(18, 'TEMPO_UNIDADE'         , 1, 'MINUTOS'    , 'Minutos'                                           , 'root')
      ,(19, 'TEMPO_UNIDADE'         , 2, 'HORAS'      , 'Horas'                                             , 'root')
      ,(20, 'TEMPO_UNIDADE'         , 3, 'DIAS'       , 'Dias'                                              , 'root')
      ,(21, 'TEMPO_UNIDADE'         , 4, 'SEMANAS'    , 'Semanas'                                           , 'root')
      ,(22, 'TEMPO_UNIDADE'         , 5, 'MESES'      , 'Meses'                                             , 'root')

      -- ,(21, 'SEXO'                  , 1, 'M'          , 'Masculino'                                         , 'root')
      -- ,(22, 'SEXO'                  , 2, 'F'          , 'Feminino'                                          , 'root')
      ;

   INSERT INTO tb_parametros (/*para_id,*/ para_nome, para_valor, para_ativo, inclu_login)
   VALUES
       ('PLANO_GRATIS_LISTAS_LIMITE'     , '3'   , 'SIM', 'root')
      ,('PLANO_GRATIS_LISTAS_LIMITE'     , '5'   , 'NAO', 'root')
      ,('PLANO_GRATIS_TAREFAS_LIMITE'    , '50'  , 'SIM', 'root')
      ,('PLANO_PESSOAL_LISTAS_LIMITE'    , '50'  , 'SIM', 'root')
      ,('PLANO_PESSOAL_TAREFAS_LIMITE'   , '500' , 'SIM', 'root')
      ,('PLANO_EQUIPE_LISTAS_LIMITE'     , '100' , 'SIM', 'root')
      ,('PLANO_EQUIPE_TAREFAS_LIMITE'    , '5000', 'SIM', 'root')
      ,('TEMPO_SESSAO_TIMEOUT'           , '60'  , 'SIM', 'root')
      ;
   INSERT INTO tb_planos
   (plan_nm, plan_ds, inclu_login, inclu_dt)
   VALUES ('Gratuito Pre-Lancamento', 'Plano gratuito pre lancamento 2021-02-16', 'root', '2021-02-16 23:29:00');

   INSERT INTO tb_status_atividades (clie_id, stat_id, stat_nm, stat_ds, inclu_login, inclu_dt)
   VALUES
       (1, 0, 'Cadastrado', 'Item que foi apenas cadastrado, mas nao iniciado.  Pode tambem ser considerado como "Pendente", "Na Fila", "Aguardando Inicio", etc.', 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 1, "Andamento" , 'Atividade que foi iniciada mas ainda nao concluida.'                                                                                 , 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 2, "Finalizada", 'Atividade que foi iniciada e foi concluida. Seria o fluxo normal de uma atividade.'                                                  , 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 3, "Cancelada" , 'Atividade que foi cancelada. Pode ser marcada como cancelada a qualquer momento.'                                                    , 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ;

   INSERT INTO tb_lista_atividades (clie_id, lista_id, lista_nm, inclu_login, inclu_dt)
   VALUES
       (1, 001, "GTD Desenvolvimento", 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 002, "GTD Regionalizacao" , 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 003, "GTD Testes"         , 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 004, 'Escola do Filho'    , 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 005, 'Tarefas de Trabalho', 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 006, 'Tratamento UBS/SUS' , 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ;

   INSERT INTO tb_atividade (clie_id, ativ_id, lista_id, stat_id, ativ_dt_ini, ativ_concluida, ativ_nm
                         ,ativ_ds, inclu_login, inclu_dt)
   VALUES
      -- Lista GTD Desenvolvimento (001)
    (1, 0001, 001, 2, '2021-02-15 14:15:16'              , 1, 'Finalizar desenvolvimento do projeto GTD v.alpha'   , 'Descricao opcional mais detalhada da atividade..', 'root', '2021-02-27 14:15:16')
   ,(1, 0002, 001, 2, '2021-02-15 14:15:16'              , 1, 'Paginas de Tabelas'                                 , 'Descricao opcional mais detalhada da atividade..', 'root', '2021-02-18 14:15:16')
   ,(1, 0003, 001, 2, '2021-02-15 14:15:16'              , 1, 'Dashboards'                                         , 'Descricao opcional mais detalhada da atividade..', 'root', '2021-02-24 14:15:16')
   ,(1, 0004, 001, 2, '2021-02-15 14:15:16'              , 1, 'Graficos'                                           , 'Descricao opcional mais detalhada da atividade..', 'root', '2021-02-21 14:15:16')
      -- Lista GTD Regionalizacao (002)
   ,(1, 0005, 002, 2, '2021-03-01 14:15:16'              , 0, 'Revisao Ingles por mim'                             , 'Descricao opcional mais detalhada da atividade..', 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
   ,(1, 0006, 002, 2, '2021-03-01 14:15:16'              , 0, 'Revisao Basica Espanhol'                            , 'Descricao opcional mais detalhada da atividade..', 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
   ,(1, 0007, 002, 2, '2021-03-01 14:15:16'              , 0, 'Revisao Ingles por outra pessoa'                    , 'Descricao opcional mais detalhada da atividade..', 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      -- Lista GTD Testes (003)
   ,(1, 0008, 003, 1, strftime('%Y-%m-%d %H:%M:%S','now'), 0, 'Teste de auto cadastramento de usuario'             , 'Descricao opcional mais detalhada da atividade..', 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
   ,(1, 0009, 003, 1, strftime('%Y-%m-%d %H:%M:%S','now'), 0, 'Teste e Revisao de permissoes de acesso'            , 'Descricao opcional mais detalhada da atividade..', 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
   ,(1, 0010, 003, 1, strftime('%Y-%m-%d %H:%M:%S','now'), 0, 'Agendar reuniao com equipe'                         , 'Descricao opcional mais detalhada da atividade..', 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      -- Lista Escola do filho (004)
   ,(1, 0011, 004, 1, strftime('%Y-%m-%d %H:%M:%S','now'), 0, 'Revisar agenda escolar do filho'                    , 'Descricao opcional mais detalhada da atividade..', 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
   ,(1, 0012, 004, 2, strftime('%Y-%m-%d %H:%M:%S','now'), 0, 'Acompanhar estudo do filho para prova de matematica', 'Descricao opcional mais detalhada da atividade..', 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
   ;

   INSERT INTO tb_categorias
      (clie_id, cate_id, cate_nm, inclu_login, inclu_dt)
   VALUES
       (1, 01, 'pessoal'    , 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 02, 'saude'      , 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 03, 'emprego'    , 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 04, 'projeto_gtd', 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 05, 'projeto_web', 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 06, 'desejo'     , 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 07, 'computador' , 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
      ,(1, 08, 'smartphone' , 'root', strftime('%Y-%m-%d %H:%M:%S','now'))
   ;

   INSERT INTO tb_categorias_x_atividades (/*caat_id ,*/cate_id ,ativ_id, inclu_login)
   VALUES
       (04, 0001, 'root')
      ,(04, 0002, 'root')
      ,(04, 0003, 'root')
      ,(04, 0004, 'root')
      ,(06, 0003, 'root')
      ,(06, 0004, 'root')
      ,(04, 0005, 'root')
      ,(04, 0006, 'root')
      ,(04, 0007, 'root')
      ,(04, 0008, 'root')
      ,(04, 0009, 'root')
      -- ,(04, 0010, 'root')  -- Vamos deixar esta atividade sem categoria
      ,(05, 0011, 'root')
      ,(05, 0012, 'root')
      ,(07, 0011, 'root')
      ,(07, 0012, 'root')
   ;

-- SELECTs de dados que foram incluidos como carga inicial
.print
.print Tabela tb_clientes
.print ------------------
.mode line
   -- .header on
   SELECT * FROM tb_clientes;

.print
.print Tabela tb_usuarios
.print ------------------
.mode column
.mode line
   SELECT usua_id
         ,clie_id
         ,usua_domi_status
         ,usua_email
         ,usua_username
         --,usua_senha
   FROM tb_usuarios;

/*
.print
.print Tabela tb_dominios.
   SELECT * FROM tb_dominios;
*/

.mode column
/*
   SELECT domi_id
         ,domi_grupo AS 'domi_grupo             .'
         ,domi_ordem
         ,domi_valor AS 'domi_valor         .'
         ,domi_exibe AS 'domi_exibe                                                 .'
    FROM tb_dominios;
*/

-- --------------------------------------------------------------------------------
.print Fim do Script.
-- --------------------------------------------------------------------------------
-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
