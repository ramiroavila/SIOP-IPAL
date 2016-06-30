INSERT INTO Supervisor (nombre) SELECT DISTINCT(UPPER(supervisor_facade)) FROM Encuesta WHERE supervisor_facade IS NOT NULL;

ALTER TABLE EncuestaProxy ADD COLUMN auto_inspeccion VARCHAR(5) DEFAULT "N/A";

ALTER TABLE EncuestaProxy ADD COLUMN charla_operativa VARCHAR(5) DEFAULT "N/A";

ALTER TABLE EncuestaProxy ADD COLUMN tipo VARCHAR(25) DEFAULT "electrica";

ALTER TABLE EncuestaProxy ADD COLUMN cierre_texto TEXT NULL;

UPDATE EncuestaProxy SET tipo = (SELECT Encuesta.tipo FROM Encuesta WHERE Encuesta.id = EncuestaProxy.id);
