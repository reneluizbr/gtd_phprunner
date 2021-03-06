-- select count(lista_id) as qtde FROM tb_lista_atividades
-- Calculos com datas.sql
select * from tb_atividade where ativ_dt_ini >= datetime('now','-30 day','localtime')
select count(*) from tb_atividade where ativ_dt_ini >= datetime('now','-30 day','localtime')
select count(*) from tb_atividade where ativ_dt_ini >= datetime('now','-30 day','localtime')

select datetime('now','localtime'), datetime('now','-30 day','localtime')

