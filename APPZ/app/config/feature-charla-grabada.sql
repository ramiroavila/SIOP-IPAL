UPDATE Encuesta SET charla_grabada = 'N/A';
ALTER TABLE EncuestaProxy ADD COLUMN `charla_grabada` varchar(5) COLLATE utf8_unicode_ci DEFAULT 'N/A';
UPDATE EncuestaProxy SET charla_grabada = 'N/A';
