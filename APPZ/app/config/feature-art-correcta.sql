ALTER TABLE EncuestaProxy ADD COLUMN `charla_correcta` VARCHAR(20) COLLATE utf8_unicode_ci DEFAULT 'N/A';
ALTER TABLE `EncuestaProxy` CHANGE COLUMN `auto_inspeccion` `auto_inspeccion` VARCHAR(20) CHARACTER SET 'utf8' NOT NULL ;
ALTER TABLE `EncuestaProxy` CHANGE COLUMN `charla_operativa` `charla_operativa` VARCHAR(20) CHARACTER SET 'utf8' NOT NULL ;
