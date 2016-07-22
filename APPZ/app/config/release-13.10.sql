
INSERT INTO Actividad (empresa_id, visible, nombre) (SELECT id, 1, 'ACTIVIDAD POR DEFECTO' FROM Empresa);

ALTER TABLE EncuestaProxy ADD COLUMN actividad VARCHAR(255) DEFAULT "N/A";
