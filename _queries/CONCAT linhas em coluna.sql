-- CONCAT linhas em coluna.sql
select a.ativ_id, a.ativ_nm, GROUP_CONCAT(cate_nm,', ') as wlCategorias
from tb_atividade a
LEFT JOIN tb_categorias_x_atividades ca 
	ON a.ativ_id = ca.ativ_id
LEFT JOIN tb_categorias c
	ON c.cate_id = ca.cate_id
GROUP BY a.ativ_id
