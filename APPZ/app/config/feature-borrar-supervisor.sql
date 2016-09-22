UPDATE Encuesta set supervisor_id = supervisor_id + 3300000;
ALTER TABLE `ipal`.`ObservacionDeComportamiento`
DROP FOREIGN KEY `FK_EC54DA5D19E9AC5F`;
ALTER TABLE `ipal`.`ObservacionDeComportamiento`
DROP INDEX `IDX_EC54DA5D19E9AC5F` ;

UPDATE ObservacionDeComportamiento set supervisor_id = supervisor_id + 3300000;

DROP TABLE SupervisorDeEmpresa;

UPDATE Supervisor set id = id + 3300000;

ALTER TABLE `Empleado`
CHANGE COLUMN `rut` `rut` VARCHAR(50) CHARACTER SET 'utf8' NOT NULL ;

INSERT INTO Empleado (id, rut,nombre, pais_id, cargo) SELECT id,SUBSTR(rut,0,49),nombre,pais_id, 'SUPERVISOR' FROM Supervisor;
