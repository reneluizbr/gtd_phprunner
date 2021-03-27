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