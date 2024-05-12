---Creating a Database:
MariaDB [(none)]> CREATE DATABASE Company;
Query OK, 1 row affected (0.001 sec)

---Selecting a Database:
MariaDB [(none)]> USE Company;
Database changed

---Creating a Table:
MariaDB [Company]> CREATE TABLE Employees (
    -> EmployeeID INT PRIMARY KEY,
    ->     FirstName VARCHAR(20),
    ->     LastName VARCHAR(20),
    ->     Age INT,
    ->     Department VARCHAR(50)
    -> );
Query OK, 0 rows affected (0.013 sec)

---Inserting Data into the Table:
MariaDB [Company]> INSERT INTO Employees (EmployeeID, FirstName, LastName, Age, Department) VALUES
    -> (1, "denise", "chavez", 21, "HR"),
    -> (2, "azhelle", "casimiro", 20, "accounting"),
    -> (3, "steffanie", "egloso", 21, "dpo"),
    -> (4, "rieza", "espejo", 21, "accounting"),
    -> (5, "jannah", "delarosa", 21, "dpo");
Query OK, 5 rows affected (0.010 sec)
Records: 5  Duplicates: 0  Warnings: 0

---Viewing Data:
MariaDB [Company]> SELECT * FROM Employees;
+------------+-----------+----------+------+------------+
| EmployeeID | FirstName | LastName | Age  | Department |
+------------+-----------+----------+------+------------+
|          1 | denise    | chavez   |   21 | HR         |
|          2 | azhelle   | casimiro |   20 | accounting |
|          3 | steffanie | egloso   |   21 | dpo        |
|          4 | rieza     | espejo   |   21 | accounting |
|          5 | jannah    | delarosa |   21 | dpo        |
+------------+-----------+----------+------+------------+
5 rows in set (0.001 sec)

---Updating Data:
MariaDB [Company]> UPDATE Employees SET Department = "Marketing" WHERE EmployeeID = 2;
Query OK, 1 row affected (0.009 sec)
Rows matched: 1  Changed: 1  Warnings: 0

---Deleting Data:
MariaDB [Company]> DELETE FROM Employees WHERE EmployeeID = 3;
Query OK, 1 row affected (0.009 sec)

---Dropping the Table:
MariaDB [Company]> DROP TABLE Employees;
Query OK, 0 rows affected (0.012 sec)
