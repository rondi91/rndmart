select `attribute_options`.`id`, `attribute_options`.`attribute_id`, `attribute_options`.`name`, `attribute_options`.`keyword`, `attribute_options`.`stock`, `attribute_options`.`price`, attributes.name as ATTRIBUTE,`attribute_options`.`stock`*`attribute_options`.`price` AS total   from `items` inner join `attributes` on `attributes`.`item_id` = `items`.`id` inner join `attribute_options` on `attribute_options`.`attribute_id` = `attributes`.`id` where `items`.`id` = 600 order by `id` DESC;

SELECT sum(total) FROM 
(SELECT attribute_options.stock*attribute_options.price AS total  FROM items , attributes, attribute_options WHERE items.id=attributes.item_id AND attributes.id=attribute_options.attribute_id AND items.id=600)AS a;
SELECT items.name,attributes.name, attribute_options.name, attribute_options.stock AS stok, attribute_options.price AS pc,attribute_options.stock*attribute_options.price AS total  FROM items , attributes, attribute_options WHERE items.id=attributes.item_id AND attributes.id=attribute_options.attribute_id AND items.id=600;

SELECT * FROM attribute_options;


SELECT * FROM 
(SELECT attributes.name FROM attributes, attribute_options WHERE attributes.id=attribute_options.attribute_id) AS attribute
JOIN 
(SELECT items.id AS id_item, items.name FROM items WHERE items.id=600) AS item;





SELECT * FROM items, attributes, attribute_options WHERE items.id=attributes.item_id AND attribute_options.attribute_id=attributes.id AND items.id=600;

SELECT * FROM attributes, attribute_options WHERE attributes.id=attribute_options.attribute_id AND attributes.item_id=600;
SELECT items.name,attributes.name, attributes.id AS attribute_id FROM items , attributes WHERE items.id=attributes.item_id AND items.id=600;

SELECT items.name,attributes.name, attribute_options.name, attribute_options.stock FROM items , attributes, attribute_options WHERE items.id=attributes.item_id AND attributes.id=attribute_options.attribute_id ;