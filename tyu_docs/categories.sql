-- Categories
SELECT cat.category_id, cat.parent_id, cat_d.name, cat.image, cat.date_added, cat.date_modified 
FROM corelab.oc_category cat,
corelab.oc_category_description cat_d
WHERE cat.category_id  = cat_d.category_id ;

-- Manufactures
SELECT manufacturer_id, name, image
FROM corelab.oc_manufacturer;

-- Goods
SELECT 	op.product_id, 
		opd.name,
		opc.category_id,
		op.manufacturer_id,
		op.quantity,
		op.price,
		op.image ,
		op.weight ,
		op.`length` ,
		op.width ,
		op.height
FROM 	corelab.oc_product op, 
		corelab.oc_product_description opd,
--		corelab.oc_product_to_category opc
			(SELECT opc2.product_id , min(opc2.category_id )
			FROM corelab.oc_product_to_category opc2
			GROUP BY opc2.product_id)  AS opc
WHERE 	op.product_id = opd.product_id 
AND 	op.product_id = opc.product_id ;

SELECT product_id , min(category_id )
FROM corelab.oc_product_to_category
GROUP BY product_id ;

