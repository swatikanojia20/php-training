SELECT
netmainproduct.productcode,
netmainproduct.productid,
netmainproduct.description,
netmainproduct.productname,
netmainproduct.listprice,
netcompany.company,
netcategory.category,
netunit.unit
FROM
netmainproduct
LEFT JOIN netcategory 
ON netmainproduct.categoryId = netcategory.categoryId
LEFT JOIN netunit 
ON netmainproduct.unitId = netunit.unitId
LEFT JOIN netcompany 
ON netmainproduct.companyId = netcompany.companyId
WHERE
netmainproduct.productcode like  '%117.020%'
