--.print Criando tabela 13/13
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