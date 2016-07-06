INSERT INTO Supervisor (nombre) SELECT DISTINCT(UPPER(supervisor_facade)) FROM ObservacionDeComportamiento WHERE UPPER(supervisor_facade) NOT IN (SELECT UPPER(nombre) FROM Supervisor) AND supervisor_facade IS NOT NULL;

UPDATE IGNORE ObservacionDeComportamiento SET supervisor_id = (SELECT id FROM Supervisor WHERE UPPER(Supervisor.nombre) = UPPER(ObservacionDeComportamiento.supervisor_facade));
