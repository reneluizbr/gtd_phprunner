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
