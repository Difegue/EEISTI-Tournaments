----
-- phpLiteAdmin database dump (https://bitbucket.org/phpliteadmin/public)
-- phpLiteAdmin version: 1.9.6
-- Exported: 1:00am on October 27, 2015 (CET)
-- database file: ../storage/database.sqlite
----
BEGIN TRANSACTION;

----
-- Table structure for CustomFields
----
CREATE TABLE 'CustomFields' ('id_custom_field' INTEGER, 'number_of_fields' INTEGER, 'field_1' TEXT, 'field_2' TEXT, 'field_3' TEXT, 'field_4' TEXT, 'field_5' TEXT, 'field_6' TEXT, 'field_7' TEXT, 'field_8' TEXT, 'name_of_field' TEXT);

----
-- Data dump for CustomFields, a total of 2 rows
----
INSERT INTO "CustomFields" ("id_custom_field","number_of_fields","field_1","field_2","field_3","field_4","field_5","field_6","field_7","field_8","name_of_field") VALUES ('1','2','Cergy','Pau','','','','','','','Campus');
INSERT INTO "CustomFields" ("id_custom_field","number_of_fields","field_1","field_2","field_3","field_4","field_5","field_6","field_7","field_8","name_of_field") VALUES ('2','6','XS','S','M','L','XL','XXL','','','Taille');
COMMIT;
