ALTER TABLE EncuestaProxy ADD COLUMN `observaciones` TEXT COLLATE utf8_unicode_ci;
ALTER TABLE EncuestaProxy ADD COLUMN `tipo_de_hallazgo` VARCHAR(20) COLLATE utf8_unicode_ci DEFAULT 'N/A';
ALTER TABLE EncuestaProxy ADD COLUMN `empleados` TEXT COLLATE utf8_unicode_ci;
