DROP VIEW "main"."vw_tarefas_categorias";
CREATE VIEW vw_tarefas_categorias
AS
   SELECT GROUP_CONCAT(cate_nm,', ') as Categorias
      , tb.*
   FROM ( /* Necessario criar subquery para seguir ordem de cate_nm*/
      SELECT a.ativ_id
         ,a.clie_id
         ,a.ativ_nm
         ,c.cate_nm
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
      -- , GROUP_CONCAT(cate_nm,', ') as Categorias
      FROM tb_atividade a
      LEFT JOIN tb_categorias_x_atividades ca ON a.ativ_id = ca.ativ_id
      LEFT JOIN tb_categorias c               ON c.cate_id = ca.cate_id
      LEFT JOIN tb_lista_atividades l         ON a.lista_id = l.lista_id
      LEFT JOIN tb_status_atividades s        ON a.stat_id = s.stat_id
      -- GROUP BY a.ativ_id
      ORDER BY c.cate_nm
   ) AS tb
   GROUP BY ativ_id