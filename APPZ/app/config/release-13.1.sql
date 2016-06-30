INSERT INTO Supervisor (nombre) SELECT DISTINCT(UPPER(supervisor_facade)) FROM Encuesta WHERE supervisor_facade IS NOT NULL;
