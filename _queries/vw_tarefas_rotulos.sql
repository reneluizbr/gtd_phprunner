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
